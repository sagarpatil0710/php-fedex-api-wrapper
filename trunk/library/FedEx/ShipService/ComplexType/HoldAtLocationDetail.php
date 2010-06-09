<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Descriptive data required for a FedEx shipment that is to be held at the destination FedEx location for pickup by the recipient.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class HoldAtLocationDetail
    extends AbstractComplexType
{
    protected $_name = 'HoldAtLocationDetail';

    /**
     * Identifies a telephone number.
     *
     * @param string $PhoneNumber
     * return HoldAtLocationDetail
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    
    /**
     * The descriptive data for a physical location.
     *
     * @param Address $Address
     * return HoldAtLocationDetail
     */
    public function setAddress(Address $address)
    {
        $this->Address = $address;
        return $this;
    }
    

    
}