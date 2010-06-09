<?php
namespace FedEx\ShipService\ComplexType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CustomLabelBarcodeEntry
    extends AbstractComplexType
{
    protected $_name = 'CustomLabelBarcodeEntry';

    /**
     * 
     *
     * @param CustomLabelPosition $Position
     * return CustomLabelBarcodeEntry
     */
    public function setPosition(CustomLabelPosition $position)
    {
        $this->Position = $position;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Format
     * return CustomLabelBarcodeEntry
     */
    public function setFormat($format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[string] $DataFields
     * return CustomLabelBarcodeEntry
     */
    public function setDataFields(array $dataFields)
    {
        $this->DataFields = $dataFields;
        return $this;
    }
    
    /**
     * 
     *
     * @param int $BarHeight
     * return CustomLabelBarcodeEntry
     */
    public function setBarHeight($barHeight)
    {
        $this->BarHeight = $barHeight;
        return $this;
    }
    
    /**
     * 
     *
     * @param int $ThinBarWidth
     * return CustomLabelBarcodeEntry
     */
    public function setThinBarWidth($thinBarWidth)
    {
        $this->ThinBarWidth = $thinBarWidth;
        return $this;
    }
    
    /**
     * 
     *
     * @param BarcodeSymbologyType $BarcodeSymbology
     * return CustomLabelBarcodeEntry
     */
    public function setBarcodeSymbology(\FedEx\ShipService\SimpleType\BarcodeSymbologyType $barcodeSymbology)
    {
        $this->BarcodeSymbology = $barcodeSymbology;
        return $this;
    }
    

    
}