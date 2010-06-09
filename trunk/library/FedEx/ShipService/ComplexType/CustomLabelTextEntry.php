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
class CustomLabelTextEntry
    extends AbstractComplexType
{
    protected $_name = 'CustomLabelTextEntry';

    /**
     * 
     *
     * @param CustomLabelPosition $Position
     * return CustomLabelTextEntry
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
     * return CustomLabelTextEntry
     */
    public function setFormat($format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * Printer-specific font name for use with thermal printer labels.
     *
     * @param string $ThermalFontId
     * return CustomLabelTextEntry
     */
    public function setThermalFontId($thermalFontId)
    {
        $this->ThermalFontId = $thermalFontId;
        return $this;
    }
    

    
}