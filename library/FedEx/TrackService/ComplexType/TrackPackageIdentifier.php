<?php
namespace FedEx\TrackService\ComplexType;

/**
 * Idenitifies the particular package to be tracked and how it is referenced.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackPackageIdentifier
    extends AbstractComplexType
{
    protected $_name = 'TrackPackageIdentifier';

    /**
     * Specifies the value to be tracked (e.g., tracking number or reference value).
     *
     * @param string $Value
     * return TrackPackageIdentifier
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    
    /**
     * Specifies the type of track value that is specified in the previous Value element.
     *
     * @param TrackIdentifierType $Type
     * return TrackPackageIdentifier
     */
    public function setType(\FedEx\TrackService\SimpleType\TrackIdentifierType $type)
    {
        $this->Type = $type;
        return $this;
    }
    

    
}