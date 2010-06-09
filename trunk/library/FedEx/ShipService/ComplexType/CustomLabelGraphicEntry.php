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
class CustomLabelGraphicEntry
    extends AbstractComplexType
{
    protected $_name = 'CustomLabelGraphicEntry';

    /**
     * 
     *
     * @param CustomLabelPosition $Position
     * return CustomLabelGraphicEntry
     */
    public function setPosition(CustomLabelPosition $position)
    {
        $this->Position = $position;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $PrinterGraphicId
     * return CustomLabelGraphicEntry
     */
    public function setPrinterGraphicId($printerGraphicId)
    {
        $this->PrinterGraphicId = $printerGraphicId;
        return $this;
    }
    

    
}