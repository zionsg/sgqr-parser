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
     * @param bool $isTemplate If $text belongs to a template instead of root
     * @param string $rootId Root ID to which template belongs to. Only specified if $isTemplate is true.
     * @return array
     */
    protected function extractDataObjects($text, $isTemplate = false, $rootId = null)
    {
        $result = [];

        $textLen = strlen($text);
        $index = 0;
        while ($index < $textLen) {
            $id = substr($text, $index, 2);
            $length = substr($text, $index + 2, 2);
            $value = substr($text, $index + 4, $length);
            $index += 4 + $length;

            $result[] = $this->analyzeDataObject($id, $length, $value, $isTemplate, $rootId);
        }

        return $result;
    }

    /**
     * Analyze single data object
     *
     * @param string $id ID of data object
     * @param int $length Length of value for data object
     * @param string $value Value for data object
     * @param bool $isTemplate If data object belongs to a template instead of root
     * @param string $rootId Root ID of template that data object belongs to. Only specified if $isTemplate is true.
     * @return array
     */
    protected function analyzeDataObject(
        $id,
        $length,
        $value,
        $isTemplate = false,
        $rootId = null
    ) {
        $result = [];

        $info = [];
        if ($isTemplate) {
            $templateInfo = $this->specs[self::TEMPLATES_BY_ID][$rootId] ?? [];
            if ($templateInfo[self::USES_INFO_TEMPLATE] ?? false) {
                $templateInfo[self::DATA_OBJECTS_BY_ID] = $this->infoTemplate;
            }

            $info = $templateInfo[self::DATA_OBJECTS_BY_ID][$id] ?? [];
        } else {
            $info = $this->specs[self::ROOT_DATA_OBJECTS_BY_ID][$id] ?? [];
        }

        if ($info[self::USES_INFO_TEMPLATE] ?? false) {
            $info[self::DATA_OBJECTS_BY_ID] = $this->infoTemplate;
        }

        // Resolve data object
        $result['id'] = [
            'key' => $id,
            'name' => $info[self::NAME] ?? '',
        ];
        $result['length'] = $length;
        $result['value'] = $value;
        $result['comment'] = $info[self::COMMENT] ?? '';

        // Parse data object further if it is a template
        $isObjTemplate = $info[self::IS_TEMPLATE] ?? false;
        if ($isObjTemplate) {
            $result['dataObjects'] = $this->extractDataObjects($value, $isObjTemplate, $id);
        }

        return $result;
    }
}
