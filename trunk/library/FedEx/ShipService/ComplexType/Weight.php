<?php
namespace FedEx\ShipService\ComplexType;

/**
 * The descriptive data for the heaviness of an object.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class Weight
    extends AbstractComplexType
{
    protected $_name = 'Weight';

    /**
     * Identifies the unit of measure associated with a weight value. See WeightUnits for the list of valid enumerated values.
     *
     * @param WeightUnits $Units
     * return Weight
     */
    public function setUnits(\FedEx\ShipService\SimpleType\WeightUnits $units)
    {
        $this->Units = $units;
        return $this;
    }
    
    /**
     * Identifies the weight value of the package/shipment. Contains 1 explicit decimal position
     *
     * @param  $Value
     * return Weight
     */
    public function setValue( $value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}