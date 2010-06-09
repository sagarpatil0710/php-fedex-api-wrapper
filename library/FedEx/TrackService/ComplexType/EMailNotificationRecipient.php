<?php
namespace FedEx\TrackService\ComplexType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class EMailNotificationRecipient
    extends AbstractComplexType
{
    protected $_name = 'EMailNotificationRecipient';

    /**
     * 
     *
     * @param EMailNotificationRecipientType $EMailNotificationRecipientType
     * return EMailNotificationRecipient
     */
    public function setEMailNotificationRecipientType(\FedEx\TrackService\SimpleType\EMailNotificationRecipientType $eMailNotificationRecipientType)
    {
        $this->EMailNotificationRecipientType = $eMailNotificationRecipientType;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $EMailAddress
     * return EMailNotificationRecipient
     */
    public function setEMailAddress($eMailAddress)
    {
        $this->EMailAddress = $eMailAddress;
        return $this;
    }
    
    /**
     * 
     *
     * @param boolean $NotifyOnShipment
     * return EMailNotificationRecipient
     */
    public function setNotifyOnShipment($notifyOnShipment)
    {
        $this->NotifyOnShipment = $notifyOnShipment;
        return $this;
    }
    
    /**
     * 
     *
     * @param boolean $NotifyOnException
     * return EMailNotificationRecipient
     */
    public function setNotifyOnException($notifyOnException)
    {
        $this->NotifyOnException = $notifyOnException;
        return $this;
    }
    
    /**
     * 
     *
     * @param boolean $NotifyOnDelivery
     * return EMailNotificationRecipient
     */
    public function setNotifyOnDelivery($notifyOnDelivery)
    {
        $this->NotifyOnDelivery = $notifyOnDelivery;
        return $this;
    }
    
    /**
     * 
     *
     * @param EMailNotificationFormatType $Format
     * return EMailNotificationRecipient
     */
    public function setFormat(\FedEx\TrackService\SimpleType\EMailNotificationFormatType $format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * 
     *
     * @param Localization $Localization
     * return EMailNotificationRecipient
     */
    public function setLocalization(Localization $localization)
    {
        $this->Localization = $localization;
        return $this;
    }
    

    
}