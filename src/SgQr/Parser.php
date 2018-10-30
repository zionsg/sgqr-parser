<?php
namespace SgQr;

class Parser
{
    const ROOT_DATA_OBJECTS_BY_ID = 'rootDataObjectsById';
    const INFO_TEMPLATE = 'infoTemplate';
    const TEMPLATES_BY_ID = 'templatesById';
    const NAME = 'name';
    const COMMENT = 'comment';
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
