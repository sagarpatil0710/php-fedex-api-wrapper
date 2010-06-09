<?php
namespace FedEx\TrackService\ComplexType;

/**
 * The descriptive data that defines the extent of space between two objects or places.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class Distance
    extends AbstractComplexType
{
    protected $_name = 'Distance';

    /**
     * Identifies the distance quantity.
     *
     * @param decimal $Value
     * return Distance
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    
    /**
     * Identifies the unit of measure for the distance value.
     *
     * @param DistanceUnits $Units
     * return Distance
     */
    public function setUnits(\FedEx\TrackService\SimpleType\DistanceUnits $units)
    {
        $this->Units = $units;
        return $this;
    }
    

    
}