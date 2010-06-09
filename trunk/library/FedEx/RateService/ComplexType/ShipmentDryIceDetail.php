<?php
namespace FedEx\RateService\ComplexType;

/**
 * The number of packages with dry ice and the total weight of the dry ice.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class ShipmentDryIceDetail
    extends AbstractComplexType
{
    protected $_name = 'ShipmentDryIceDetail';

    /**
     * The number of packages in this shipment that contain dry ice.
     *
     * @param nonNegativeInteger $PackageCount
     * return ShipmentDryIceDetail
     */
    public function setPackageCount($packageCount)
    {
        $this->PackageCount = $packageCount;
        return $this;
    }
    
    /**
     * The total weight of the dry ice in this shipment.
     *
     * @param Weight $TotalWeight
     * return ShipmentDryIceDetail
     */
    public function setTotalWeight(Weight $totalWeight)
    {
        $this->TotalWeight = $totalWeight;
        return $this;
    }
    

    
}