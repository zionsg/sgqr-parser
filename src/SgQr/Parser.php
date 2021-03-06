<?php
namespace SgQr;

use InvalidArgumentException;

class Parser
{
    const ROOT_DATA_OBJECTS_BY_ID = 'rootDataObjectsById';
    const INFO_TEMPLATE = 'infoTemplate';
    const TEMPLATES_BY_ID = 'templatesById';
    const ID = 'id';
    const NAME = 'name';
    const VALUE = 'value';
    const COMMENT = 'comment';
    const MAX_VALUE_LENGTH = 99;
    const DATA_OBJECTS_BY_ID = 'dataObjectsById';
    const IS_TEMPLATE = 'isTemplate';
    const USES_INFO_TEMPLATE = 'usesInfoTemplate';
    const DATA_OBJECTS = 'dataObjects';

    /** @var array */
    protected $specs;

    /** @var array */
    protected $infoTemplate;

    /**
     * Constructor
     *
     * @param array $specs SGQR specifications. If not specified, default specs will be loaded.
     */
    public function __construct(array $specs = null)
    {
        $specsPath = __DIR__ . '/../../config/sgqr-specs.php';
        if (null === $specs && file_exists($specsPath)) {
            $specs = include $specsPath;
            $specs = is_array($specs) ? $specs : [];
        }

        $this->specs = $specs;
        $this->infoTemplate = $specs[self::INFO_TEMPLATE] ?? [];
    }

    /**
     * Parse SGQR
     *
     * @param string $qrCode Contents of SGQR
     * @return array
     */
    public function parse($qrCode)
    {
        return $this->extractDataObjects($qrCode);
    }

    /**
     * Assemble SGQR
     *
     * This is the opposite of parse().
     *
     * @param array $dataObjects Extracted data objects as per return value of parse() including checksum
     * @param boolean $isRecursiveCall Default=false. Used internally within method, not meant for user to specify.
     * @return string Checksum will be recalculated
     * @throws InvalidArgumentException If any data object is invalid
     */
    public function assemble($dataObjects, $isRecursiveCall = false)
    {
        $result = '';

        foreach (($dataObjects ?: []) as $dataObject) {
            $id = $dataObject[self::ID] ?? '';
            $value = $dataObject[self::VALUE] ?? '';
            $subDataObjects = $dataObject[self::DATA_OBJECTS] ?? [];
            if (!$id || ('' === $value && !$subDataObjects)) {
                throw new InvalidArgumentException('Invalid data object: ' . json_encode($dataObject));
            }

            // Recompute value from inner data objects
            if ($subDataObjects) {
                $value = $this->assemble($subDataObjects, true);
            }

            // Recompute length
            $length = strlen($value);
            if ($length > self::MAX_VALUE_LENGTH) {
                throw new InvalidArgumentException(
                    'Value cannot be more than ' . self::MAX_VALUE_LENGTH . ' characters: '
                    . json_encode($dataObject)
                );
            }

            // Assemble section
            $section = $id . str_pad($length, 2, '0', STR_PAD_LEFT) . $value;
            if (!$section) {
                throw InvalidArgumentException('Could not assemble data object: ' . json_encode($dataObject));
            }

            // Append section
            $result .= $section;
        }

        // Recompute checksum only for original method call, not recursive calls
        if (!$isRecursiveCall) {
            $resultWithoutChecksum = substr($result, 0, -4);
            $result = $resultWithoutChecksum . $this->computeChecksum($resultWithoutChecksum);
        }

        return $result;
    }

    /**
     * Compute CRC-CCITT checksum according to ISO/IEC 13239
     *
     * This yields the same checksum as SGQR - pass the contents of a SGQR code minus the last 4 characters to this
     * function and the result should be the same as the last 4 characters of the contents of the SGQR code.
     *
     * @link Online CRC calculator at https://www.tahapaksu.com/crc/
     * @link From https://stackoverflow.com/questions/30035582/how-to-calculate-crc16-ccitt-in-php-hex/30036901#30036901
     * @param string $text Plain text to compute checksum for, e.g. "Hello World!".
     * @param int $polynomialHex Default=0x1021. Polynomial (in hex) to use.
     * @param int $initialValue Default=0xFFFF. Initial value (in hex) to use.
     * @return string 4-digit hex string, e.g. 882A for text "Hello World!".
     */
    public function computeChecksum($text, $polynomialHex = 0x1021, $initialValue = 0xFFFF)
    {
        $result = $initialValue;
        $buffer = $text;
        $length = strlen($buffer);

        if ($length > 0) {
            for ($offset = 0; $offset < $length; $offset++) {
                $result ^= (ord($buffer[$offset]) << 8);
                for ($bitwise = 0; $bitwise < 8; $bitwise++) {
                    if (($result <<= 1) & 0x10000) {
                        $result ^= $polynomialHex;
                    }

                    $result &= 0xFFFF; // not sure if it is always 0xFFFF or should be $initialValue
                }
            }
        }

        return str_pad(strtoupper(dechex($result)), 4, '0', STR_PAD_LEFT); // ensure 4 chars cos result may be shorter
    }

    /**
     * Extract data objects from SQQR
     *
     * @param string $text Contents of SGQR
     * @param array $specs Specifications for data objects under parent
     * @return array
     */
    protected function extractDataObjects($text, array $specs = null)
    {
        $result = [];

        if (null === $specs) {
            $specs = $this->specs[self::ROOT_DATA_OBJECTS_BY_ID];
        }

        $textLen = strlen($text);
        $index = 0;
        while ($index < $textLen) {
            $id = substr($text, $index, 2);
            $length = substr($text, $index + 2, 2);
            $value = substr($text, $index + 4, $length);
            $index += 4 + $length;

            $result[] = $this->analyzeDataObject($id, $length, $value, $specs[$id] ?? []);
        }

        return $result;
    }

    /**
     * Analyze single data object
     *
     * @param string $id ID of data object
     * @param int $length Length of value for data object
     * @param string $value Value for data object
     * @param array $specs Specifications for data object
     * @return array
     */
    protected function analyzeDataObject($id, $length, $value, array $specs)
    {
        // Does specs belong to a template? If yes, get template info and child data objects if any.
        $isTemplate = $specs[self::IS_TEMPLATE] ?? false;
        if ($isTemplate) {
            $specs = array_merge($specs, $this->specs[self::TEMPLATES_BY_ID][$id] ?? []);
        }

        // Does specs use info template? If yes, populate child data objects with it.
        $usesInfoTemplate = $specs[self::USES_INFO_TEMPLATE] ?? false;
        if ($usesInfoTemplate) {
            $specs[self::DATA_OBJECTS_BY_ID] = $this->infoTemplate;
        }

        // Resolve data object
        $result = [
            'id' => $id,
            'name' => $specs[self::NAME] ?? '',
            'length' => $length,
            'value' => $value,
            'comment' => $specs[self::COMMENT] ?? '',
        ];

        // Parse data object further if it is a template
        if ($isTemplate) {
            $result[self::DATA_OBJECTS] = $this->extractDataObjects($value, $specs[self::DATA_OBJECTS_BY_ID] ?? []);
        }

        return $result;
    }
}
