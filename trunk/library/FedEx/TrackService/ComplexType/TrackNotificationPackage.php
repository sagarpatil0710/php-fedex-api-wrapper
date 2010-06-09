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
class TrackNotificationPackage
    extends AbstractComplexType
{
    protected $_name = 'TrackNotificationPackage';

    /**
     * 
     *
     * @param string $TrackingNumber
     * return TrackNotificationPackage
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $TrackingNumberUniqueIdentifiers
     * return TrackNotificationPackage
     */
    public function setTrackingNumberUniqueIdentifiers($trackingNumberUniqueIdentifiers)
    {
        $this->TrackingNumberUniqueIdentifiers = $trackingNumberUniqueIdentifiers;
        return $this;
    }
    
    /**
     * 
     *
     * @param CarrierCodeType $CarrierCode
     * return TrackNotificationPackage
     */
    public function setCarrierCode(\FedEx\TrackService\SimpleType\CarrierCodeType $carrierCode)
    {
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * 
     *
     * @param date $ShipDate
     * return TrackNotificationPackage
     */
    public function setShipDate($shipDate)
    {
        $this->ShipDate = $shipDate;
        return $this;
    }
    
    /**
     * 
     *
     * @param Address $Destination
     * return TrackNotificationPackage
     */
    public function setDestination(Address $destination)
    {
        $this->Destination = $destination;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[TrackNotificationRecipientDetail] $RecipientDetails
     * return TrackNotificationPackage
     */
    public function setRecipientDetails(array $recipientDetails)
    {
        $this->RecipientDetails = $recipientDetails;
        return $this;
    }
    

    
}