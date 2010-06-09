<?php
namespace FedEx\PackageMovementInformationService\ComplexType;

/**
 * The descriptive data for a physical location. 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class Address
    extends AbstractComplexType
{
    protected $_name = 'Address';

    /**
     * Identification of a region (usually small) for mail/package delivery. Format and presence of this field will vary, depending on country. This element is required if the CountryCode is US or CA. PostalCode may also be required for other postal-aware countries.
     *
     * @param string $PostalCode
     * return Address
     */
    public function setPostalCode($postalCode)
    {
        $this->PostalCode = $postalCode;
        return $this;
    }
    
    /**
     * Identification of a country.
     *
     * @param string $CountryCode
     * return Address
     */
    public function setCountryCode($countryCode)
    {
        $this->CountryCode = $countryCode;
        return $this;
    }
    

    
}