<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Descriptive data for FedEx pending shipment
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PendingShipmentAccessDetail
    extends AbstractComplexType
{
    protected $_name = 'PendingShipmentAccessDetail';

    /**
     * Provides the url for accessing email label.
     *
     * @param string $EmailLabelUrl
     * return PendingShipmentAccessDetail
     */
    public function setEmailLabelUrl($emailLabelUrl)
    {
        $this->EmailLabelUrl = $emailLabelUrl;
        return $this;
    }
    
    /**
     * User id.
     *
     * @param string $UserId
     * return PendingShipmentAccessDetail
     */
    public function setUserId($userId)
    {
        $this->UserId = $userId;
        return $this;
    }
    
    /**
     * Password.
     *
     * @param string $Password
     * return PendingShipmentAccessDetail
     */
    public function setPassword($password)
    {
        $this->Password = $password;
        return $this;
    }
    
    /**
     * This element is currently not supported and is for the future use.
     *
     * @param dateTime $ExpirationTimestamp
     * return PendingShipmentAccessDetail
     */
    public function setExpirationTimestamp($expirationTimestamp)
    {
        $this->ExpirationTimestamp = $expirationTimestamp;
        return $this;
    }
    

    
}