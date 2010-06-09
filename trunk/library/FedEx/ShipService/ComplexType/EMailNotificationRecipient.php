<?php
namespace FedEx\ShipService\ComplexType;

/**
 * The descriptive data for a FedEx email notification recipient.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class EMailNotificationRecipient
    extends AbstractComplexType
{
    protected $_name = 'EMailNotificationRecipient';

    /**
     * Identifies the email notification recipient type. See EMailNotificationRecipientType for a list of valid enumerated values.
     *
     * @param EMailNotificationRecipientType $EMailNotificationRecipientType
     * return EMailNotificationRecipient
     */
    public function setEMailNotificationRecipientType(\FedEx\ShipService\SimpleType\EMailNotificationRecipientType $eMailNotificationRecipientType)
    {
        $this->EMailNotificationRecipientType = $eMailNotificationRecipientType;
        return $this;
    }
    
    /**
     * Identifies the email address of the notification recipient.
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
     * Identifies if an email notification should be sent to the recipient when the package is shipped.
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
     * Identifies if an email notification should be sent to the recipient when an exception occurs during package movement from origin to destination.
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
     * Identifies if an email notification should be sent to the recipient when the package is delivered.
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
     * A unique format can be specified for each email address indicated. The format will apply to notification emails sent to a particular email address..
     *
     * @param EMailNotificationFormatType $Format
     * return EMailNotificationRecipient
     */
    public function setFormat(\FedEx\ShipService\SimpleType\EMailNotificationFormatType $format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * Indicates the language the notification is expressed in.
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