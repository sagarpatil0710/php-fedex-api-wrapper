<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Package level rate information.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PackageRating
    extends AbstractComplexType
{
    protected $_name = 'PackageRating';

    /**
     * Identifies which entry in the PackageRateDetails array is considered as presenting the actual rates for the package.
     *
     * @param ReturnedRateType $ActualRateType
     * return PackageRating
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
     * return PackageRating
     */
    public function setEffectiveNetDiscount(Money $effectiveNetDiscount)
    {
        $this->EffectiveNetDiscount = $effectiveNetDiscount;
        return $this;
    }
    
    /**
     * Each element of this field provides package-level rate data for a specific rate type.
     *
     * @param array[PackageRateDetail] $PackageRateDetails
     * return PackageRating
     */
    public function setPackageRateDetails(array $packageRateDetails)
    {
        $this->PackageRateDetails = $packageRateDetails;
        return $this;
    }
    

    
}