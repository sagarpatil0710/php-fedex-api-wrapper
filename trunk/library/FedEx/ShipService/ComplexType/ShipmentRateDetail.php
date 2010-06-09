<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Shipment level rate information. Currently this is the same as the package level rate information.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShipmentRateDetail
    extends AbstractComplexType
{
    protected $_name = 'ShipmentRateDetail';

    /**
     * The type used for this specific set of rate data.
     *
     * @param ReturnedRateType $RateType
     * return ShipmentRateDetail
     */
    public function setRateType(\FedEx\ShipService\SimpleType\ReturnedRateType $rateType)
    {
        $this->RateType = $rateType;
        return $this;
    }
    
    /**
     * The FedEx rate scale used to calculate these rates.
     *
     * @param string $RateScale
     * return ShipmentRateDetail
     */
    public function setRateScale($rateScale)
    {
        $this->RateScale = $rateScale;
        return $this;
    }
    
    /**
     * The FedEx rate zone used to calculate these rates.
     *
     * @param string $RateZone
     * return ShipmentRateDetail
     */
    public function setRateZone($rateZone)
    {
        $this->RateZone = $rateZone;
        return $this;
    }
    
    /**
     * Identifies the type of pricing used for this shipment.
     *
     * @param array[PricingCodeType] $PricingCode
     * return ShipmentRateDetail
     */
    public function setPricingCode(array $pricingCode)
    {
        $this->PricingCode = $pricingCode;
        return $this;
    }
    
    /**
     * Indicates which weight was used.
     *
     * @param RatedWeightMethod $RatedWeightMethod
     * return ShipmentRateDetail
     */
    public function setRatedWeightMethod(\FedEx\ShipService\SimpleType\RatedWeightMethod $ratedWeightMethod)
    {
        $this->RatedWeightMethod = $ratedWeightMethod;
        return $this;
    }
    
    /**
     * INTERNAL FEDEX USE ONLY.
     *
     * @param MinimumChargeType $MinimumChargeType
     * return ShipmentRateDetail
     */
    public function setMinimumChargeType(\FedEx\ShipService\SimpleType\MinimumChargeType $minimumChargeType)
    {
        $this->MinimumChargeType = $minimumChargeType;
        return $this;
    }
    
    /**
     * Currency exchange rate information.
     *
     * @param CurrencyExchangeRate $CurrencyExchangeRate
     * return ShipmentRateDetail
     */
    public function setCurrencyExchangeRate(CurrencyExchangeRate $currencyExchangeRate)
    {
        $this->CurrencyExchangeRate = $currencyExchangeRate;
        return $this;
    }
    
    /**
     * Special circumstance rating used for this shipment.
     *
     * @param array[SpecialRatingAppliedType] $SpecialRatingApplied
     * return ShipmentRateDetail
     */
    public function setSpecialRatingApplied(array $specialRatingApplied)
    {
        $this->SpecialRatingApplied = $specialRatingApplied;
        return $this;
    }
    
    /**
     * The value used to calculate the weight based on the dimensions.
     *
     * @param nonNegativeInteger $DimDivisor
     * return ShipmentRateDetail
     */
    public function setDimDivisor($dimDivisor)
    {
        $this->DimDivisor = $dimDivisor;
        return $this;
    }
    
    /**
     * Identifies the type of dim divisor that was applied.
     *
     * @param RateDimensionalDivisorType $DimDivisorType
     * return ShipmentRateDetail
     */
    public function setDimDivisorType(\FedEx\ShipService\SimpleType\RateDimensionalDivisorType $dimDivisorType)
    {
        $this->DimDivisorType = $dimDivisorType;
        return $this;
    }
    
    /**
     * Specifies a fuel surcharge percentage.
     *
     * @param decimal $FuelSurchargePercent
     * return ShipmentRateDetail
     */
    public function setFuelSurchargePercent($fuelSurchargePercent)
    {
        $this->FuelSurchargePercent = $fuelSurchargePercent;
        return $this;
    }
    
    /**
     * The weight used to calculate these rates.
     *
     * @param Weight $TotalBillingWeight
     * return ShipmentRateDetail
     */
    public function setTotalBillingWeight(Weight $totalBillingWeight)
    {
        $this->TotalBillingWeight = $totalBillingWeight;
        return $this;
    }
    
    /**
     * The dimensional weith used to calculate these rates, if applicible.
     *
     * @param Weight $TotalDimWeight
     * return ShipmentRateDetail
     */
    public function setTotalDimWeight(Weight $totalDimWeight)
    {
        $this->TotalDimWeight = $totalDimWeight;
        return $this;
    }
    
    /**
     * The total freight charge that was calculated for this package before surcharges, discounts and taxes.
     *
     * @param Money $TotalBaseCharge
     * return ShipmentRateDetail
     */
    public function setTotalBaseCharge(Money $totalBaseCharge)
    {
        $this->TotalBaseCharge = $totalBaseCharge;
        return $this;
    }
    
    /**
     * The total discounts used in the rate calculation.
     *
     * @param Money $TotalFreightDiscounts
     * return ShipmentRateDetail
     */
    public function setTotalFreightDiscounts(Money $totalFreightDiscounts)
    {
        $this->TotalFreightDiscounts = $totalFreightDiscounts;
        return $this;
    }
    
    /**
     * The freight charge minus discounts.
     *
     * @param Money $TotalNetFreight
     * return ShipmentRateDetail
     */
    public function setTotalNetFreight(Money $totalNetFreight)
    {
        $this->TotalNetFreight = $totalNetFreight;
        return $this;
    }
    
    /**
     * The total amount of all surcharges applied to this shipment.
     *
     * @param Money $TotalSurcharges
     * return ShipmentRateDetail
     */
    public function setTotalSurcharges(Money $totalSurcharges)
    {
        $this->TotalSurcharges = $totalSurcharges;
        return $this;
    }
    
    /**
     * 
     *
     * @param Money $TotalNetFedExCharge
     * return ShipmentRateDetail
     */
    public function setTotalNetFedExCharge(Money $totalNetFedExCharge)
    {
        $this->TotalNetFedExCharge = $totalNetFedExCharge;
        return $this;
    }
    
    /**
     * The total amount of all taxes applied to this shipment. Currently not supported.
     *
     * @param Money $TotalTaxes
     * return ShipmentRateDetail
     */
    public function setTotalTaxes(Money $totalTaxes)
    {
        $this->TotalTaxes = $totalTaxes;
        return $this;
    }
    
    /**
     * The net charge after applying all discounts and surcharges.
     *
     * @param Money $TotalNetCharge
     * return ShipmentRateDetail
     */
    public function setTotalNetCharge(Money $totalNetCharge)
    {
        $this->TotalNetCharge = $totalNetCharge;
        return $this;
    }
    
    /**
     * The total sum of all rebates applied to this shipment.
     *
     * @param Money $TotalRebates
     * return ShipmentRateDetail
     */
    public function setTotalRebates(Money $totalRebates)
    {
        $this->TotalRebates = $totalRebates;
        return $this;
    }
    
    /**
     * Total of all values under this shipment's dutiesAndTaxes; only provided if estimated duties and taxes were calculated for this shipment.
     *
     * @param Money $TotalDutiesAndTaxes
     * return ShipmentRateDetail
     */
    public function setTotalDutiesAndTaxes(Money $totalDutiesAndTaxes)
    {
        $this->TotalDutiesAndTaxes = $totalDutiesAndTaxes;
        return $this;
    }
    
    /**
     * This shipment's totalNetCharge + totalDutiesAndTaxes; only provided if estimated duties and taxes were calculated for this shipment AND duties, taxes and transportation charges are all paid by the same sender's account.
     *
     * @param Money $TotalNetChargeWithDutiesAndTaxes
     * return ShipmentRateDetail
     */
    public function setTotalNetChargeWithDutiesAndTaxes(Money $totalNetChargeWithDutiesAndTaxes)
    {
        $this->TotalNetChargeWithDutiesAndTaxes = $totalNetChargeWithDutiesAndTaxes;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[RateDiscount] $FreightDiscounts
     * return ShipmentRateDetail
     */
    public function setFreightDiscounts(array $freightDiscounts)
    {
        $this->FreightDiscounts = $freightDiscounts;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[Rebate] $Rebates
     * return ShipmentRateDetail
     */
    public function setRebates(array $rebates)
    {
        $this->Rebates = $rebates;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[Surcharge] $Surcharges
     * return ShipmentRateDetail
     */
    public function setSurcharges(array $surcharges)
    {
        $this->Surcharges = $surcharges;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[Tax] $Taxes
     * return ShipmentRateDetail
     */
    public function setTaxes(array $taxes)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    
    /**
     * All commodity-based duties and taxes applicable to this shipment.
     *
     * @param array[EdtCommodityTax] $DutiesAndTaxes
     * return ShipmentRateDetail
     */
    public function setDutiesAndTaxes(array $dutiesAndTaxes)
    {
        $this->DutiesAndTaxes = $dutiesAndTaxes;
        return $this;
    }
    
    /**
     * The variable handling charges calculated based on the type variable handling charges requested.
     *
     * @param VariableHandlingCharges $VariableHandlingCharges
     * return ShipmentRateDetail
     */
    public function setVariableHandlingCharges(VariableHandlingCharges $variableHandlingCharges)
    {
        $this->VariableHandlingCharges = $variableHandlingCharges;
        return $this;
    }
    
    /**
     * The total of the package and shipment level variable handling charges.
     *
     * @param VariableHandlingCharges $TotalVariableHandlingCharges
     * return ShipmentRateDetail
     */
    public function setTotalVariableHandlingCharges(VariableHandlingCharges $totalVariableHandlingCharges)
    {
        $this->TotalVariableHandlingCharges = $totalVariableHandlingCharges;
        return $this;
    }
    

    
}