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
class CompletedSmartPostDetail
    extends AbstractComplexType
{
    protected $_name = 'CompletedSmartPostDetail';

    /**
     * 
     *
     * @param CarrierCodeType $PickUpCarrier
     * return CompletedSmartPostDetail
     */
    public function setPickUpCarrier(\FedEx\ShipService\SimpleType\CarrierCodeType $pickUpCarrier)
    {
        $this->PickUpCarrier = $pickUpCarrier;
        return $this;
    }
    
    /**
     * 
     *
     * @param boolean $Machinable
     * return CompletedSmartPostDetail
     */
    public function setMachinable($machinable)
    {
        $this->Machinable = $machinable;
        return $this;
    }
    

    
}