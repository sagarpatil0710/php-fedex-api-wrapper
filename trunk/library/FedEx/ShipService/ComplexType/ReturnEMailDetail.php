<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Return Email Details
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ReturnEMailDetail
    extends AbstractComplexType
{
    protected $_name = 'ReturnEMailDetail';

    /**
     * Phone number of the merchant
     *
     * @param string $MerchantPhoneNumber
     * return ReturnEMailDetail
     */
    public function setMerchantPhoneNumber($merchantPhoneNumber)
    {
        $this->MerchantPhoneNumber = $merchantPhoneNumber;
        return $this;
    }
    
    /**
     * Allowed Special service type
     *
     * @param array[ReturnEMailAllowedSpecialServiceType] $AllowedSpecialServices
     * return ReturnEMailDetail
     */
    public function setAllowedSpecialServices(array $allowedSpecialServices)
    {
        $this->AllowedSpecialServices = $allowedSpecialServices;
        return $this;
    }
    

    
}