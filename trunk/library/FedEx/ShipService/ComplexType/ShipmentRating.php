<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Shipment level rate information.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShipmentRating
    extends AbstractComplexType
{
    protected $_name = 'ShipmentRating';

    /**
     * Identifies which entry in the ShipmentRateDetails array is considered as presenting the actual rates for the shipment.
     *
     * @param ReturnedRateType $ActualRateType
     * return ShipmentRating
     */
    public function setActualRateType(\FedEx\ShipService\SimpleType\ReturnedRateType $actualRateType)
    {
        $this->ActualRateType = $actualRateType;
        return $this;
    }
    
    /**
     * The difference between account based rates and list rates. Only returned when list rates are requested.
     *
     * @param Money $EffectiveNetDiscount
     * return ShipmentRating
     */
    public function setEffectiveNetDiscount(Money $effectiveNetDiscount)
    {
        $this->EffectiveNetDiscount = $effectiveNetDiscount;
        return $this;
    }
    
    /**
     * Each element of this field provides shipment-level rate data for a specific rate type.
     *
     * @param array[ShipmentRateDetail] $ShipmentRateDetails
     * return ShipmentRating
     */
    public function setShipmentRateDetails(array $shipmentRateDetails)
    {
        $this->ShipmentRateDetails = $shipmentRateDetails;
        return $this;
    }
    

    
}