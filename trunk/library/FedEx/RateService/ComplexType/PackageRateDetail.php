<?php
namespace FedEx\RateService\ComplexType;

/**
 * Data for a package's rates, as calculated per a specific rate type.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class PackageRateDetail
    extends AbstractComplexType
{
    protected $_name = 'PackageRateDetail';

    /**
     * The type of rates this information contains either account based or list rates.
     *
     * @param ReturnedRateType $RateType
     * return PackageRateDetail
     */
    public function setRateType(\FedEx\RateService\SimpleType\ReturnedRateType $rateType)
    {
        $this->RateType = $rateType;
        return $this;
    }
    
    /**
     * The method used to calculate the weight to be used in rating the package..
     *
     * @param RatedWeightMethod $RatedWeightMethod
     * return PackageRateDetail
     */
    public function setRatedWeightMethod(\FedEx\RateService\SimpleType\RatedWeightMethod $ratedWeightMethod)
    {
        $this->RatedWeightMethod = $ratedWeightMethod;
        return $this;
    }
    
    /**
     * Internal FedEx use only.
     *
     * @param MinimumChargeType $MinimumChargeType
     * return PackageRateDetail
     */
    public function setMinimumChargeType(\FedEx\RateService\SimpleType\MinimumChargeType $minimumChargeType)
    {
        $this->MinimumChargeType = $minimumChargeType;
        return $this;
    }
    
    /**
     * The weight that was used to calculate the rate.
     *
     * @param Weight $BillingWeight
     * return PackageRateDetail
     */
    public function setBillingWeight(Weight $billingWeight)
    {
        $this->BillingWeight = $billingWeight;
        return $this;
    }
    
    /**
     * The dimensional weight that was calculated for this package.
     *
     * @param Weight $DimWeight
     * return PackageRateDetail
     */
    public function setDimWeight(Weight $dimWeight)
    {
        $this->DimWeight = $dimWeight;
        return $this;
    }
    
    /**
     * The oversize weight that was used in the rate calculation.
     *
     * @param Weight $OversizeWeight
     * return PackageRateDetail
     */
    public function setOversizeWeight(Weight $oversizeWeight)
    {
        $this->OversizeWeight = $oversizeWeight;
        return $this;
    }
    
    /**
     * The freight charge that was calculated for this package before surcharges, discounts and taxes..
     *
     * @param Money $BaseCharge
     * return PackageRateDetail
     */
    public function setBaseCharge(Money $baseCharge)
    {
        $this->BaseCharge = $baseCharge;
        return $this;
    }
    
    /**
     * The total discounts used in the rate calculation.
     *
     * @param Money $TotalFreightDiscounts
     * return PackageRateDetail
     */
    public function setTotalFreightDiscounts(Money $totalFreightDiscounts)
    {
        $this->TotalFreightDiscounts = $totalFreightDiscounts;
        return $this;
    }
    
    /**
     * The base charge minus discounts. 
     *
     * @param Money $NetFreight
     * return PackageRateDetail
     */
    public function setNetFreight(Money $netFreight)
    {
        $this->NetFreight = $netFreight;
        return $this;
    }
    
    /**
     * The total amount of all surcharges applied to this package.
     *
     * @param Money $TotalSurcharges
     * return PackageRateDetail
     */
    public function setTotalSurcharges(Money $totalSurcharges)
    {
        $this->TotalSurcharges = $totalSurcharges;
        return $this;
    }
    
    /**
     * This package's netFreight + totalSurcharges (not including totalTaxes).
     *
     * @param Money $NetFedExCharge
     * return PackageRateDetail
     */
    public function setNetFedExCharge(Money $netFedExCharge)
    {
        $this->NetFedExCharge = $netFedExCharge;
        return $this;
    }
    
    /**
     * The total amount of all taxes applied to this package.
     *
     * @param Money $TotalTaxes
     * return PackageRateDetail
     */
    public function setTotalTaxes(Money $totalTaxes)
    {
        $this->TotalTaxes = $totalTaxes;
        return $this;
    }
    
    /**
     * The the charge for this package including surcharges, discounts and taxes.
     *
     * @param Money $NetCharge
     * return PackageRateDetail
     */
    public function setNetCharge(Money $netCharge)
    {
        $this->NetCharge = $netCharge;
        return $this;
    }
    
    /**
     * The total sum of all rebates applied to this package.
     *
     * @param Money $TotalRebates
     * return PackageRateDetail
     */
    public function setTotalRebates(Money $totalRebates)
    {
        $this->TotalRebates = $totalRebates;
        return $this;
    }
    
    /**
     * A list of discounts that were applied to this package.
     *
     * @param array[RateDiscount] $FreightDiscounts
     * return PackageRateDetail
     */
    public function setFreightDiscounts(array $freightDiscounts)
    {
        $this->FreightDiscounts = $freightDiscounts;
        return $this;
    }
    
    /**
     * A list of the surcharges applied to this package.
     *
     * @param array[Rebate] $Rebates
     * return PackageRateDetail
     */
    public function setRebates(array $rebates)
    {
        $this->Rebates = $rebates;
        return $this;
    }
    
    /**
     * A list of the surcharges applied to this package.
     *
     * @param array[Surcharge] $Surcharges
     * return PackageRateDetail
     */
    public function setSurcharges(array $surcharges)
    {
        $this->Surcharges = $surcharges;
        return $this;
    }
    
    /**
     * A list of the taxes applied to this package.
     *
     * @param array[Tax] $Taxes
     * return PackageRateDetail
     */
    public function setTaxes(array $taxes)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    
    /**
     * The variable handling charges calculated based on the type variable handling charges requested.
     *
     * @param VariableHandlingCharges $VariableHandlingCharges
     * return PackageRateDetail
     */
    public function setVariableHandlingCharges(VariableHandlingCharges $variableHandlingCharges)
    {
        $this->VariableHandlingCharges = $variableHandlingCharges;
        return $this;
    }
    

    
}