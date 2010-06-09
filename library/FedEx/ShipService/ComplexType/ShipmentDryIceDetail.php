<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Number of packages in this shipment which contain dry ice and the total weight of the dry ice for this shipment.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShipmentDryIceDetail
    extends AbstractComplexType
{
    protected $_name = 'ShipmentDryIceDetail';

    /**
     * 
     *
     * @param string $PackageCount
     * return ShipmentDryIceDetail
     */
    public function setPackageCount($packageCount)
    {
        $this->PackageCount = $packageCount;
        return $this;
    }
    
    /**
     * 
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