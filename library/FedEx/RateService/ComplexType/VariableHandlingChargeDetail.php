<?php
namespace FedEx\RateService\ComplexType;

/**
 * Details about how to calculate variable handling charges at the shipment level.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class VariableHandlingChargeDetail
    extends AbstractComplexType
{
    protected $_name = 'VariableHandlingChargeDetail';

    /**
     * The type of handling charge to be calculated and returned in the reply.
     *
     * @param VariableHandlingChargeType $VariableHandlingChargeType
     * return VariableHandlingChargeDetail
     */
    public function setVariableHandlingChargeType(\FedEx\RateService\SimpleType\VariableHandlingChargeType $variableHandlingChargeType)
    {
        $this->VariableHandlingChargeType = $variableHandlingChargeType;
        return $this;
    }
    
    /**
     * Used with Variable handling charge type of FIXED_VALUE.
												  Contains the amount to be added to the freight charge.
												  Contains 2 explicit decimal positions with a total max length of 10 including the decimal.
					
     *
     * @param Money $FixedValue
     * return VariableHandlingChargeDetail
     */
    public function setFixedValue(Money $fixedValue)
    {
        $this->FixedValue = $fixedValue;
        return $this;
    }
    
    /**
     * Used with Variable handling charge types PERCENTAGE_OF_BASE, PERCENTAGE_OF_NET or PERCETAGE_OF_NET_EXCL_TAXES.
												  Used to calculate the amount to be added to the freight charge.
												  Contains 2 explicit decimal positions.
					
     *
     * @param decimal $PercentValue
     * return VariableHandlingChargeDetail
     */
    public function setPercentValue($percentValue)
    {
        $this->PercentValue = $percentValue;
        return $this;
    }
    

    
}