<?php
namespace FedEx\TrackService\ComplexType;

/**
 * Detailed tracking information about a particular package.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackDetail
    extends AbstractComplexType
{
    protected $_name = 'TrackDetail';

    /**
     * Holds error or warning information for a particular package.
     *
     * @param Notification $Notification
     * return TrackDetail
     */
    public function setNotification(Notification $notification)
    {
        $this->Notification = $notification;
        return $this;
    }
    
    /**
     * The tracking number of this package.
     *
     * @param string $TrackingNumber
     * return TrackDetail
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * Further identifies a tracking number in case duplicates exist. Returned if a track by number results in duplicates.
     *
     * @param string $TrackingNumberUniqueIdentifier
     * return TrackDetail
     */
    public function setTrackingNumberUniqueIdentifier($trackingNumberUniqueIdentifier)
    {
        $this->TrackingNumberUniqueIdentifier = $trackingNumberUniqueIdentifier;
        return $this;
    }
    
    /**
     * For example, SP = split shipment.
     *
     * @param string $StatusCode
     * return TrackDetail
     */
    public function setStatusCode($statusCode)
    {
        $this->StatusCode = $statusCode;
        return $this;
    }
    
    /**
     * Tracking status description of this package.
     *
     * @param string $StatusDescription
     * return TrackDetail
     */
    public function setStatusDescription($statusDescription)
    {
        $this->StatusDescription = $statusDescription;
        return $this;
    }
    
    /**
     * Tracking reconciliation of this package.
     *
     * @param TrackReconciliation $Reconciliation
     * return TrackDetail
     */
    public function setReconciliation(TrackReconciliation $reconciliation)
    {
        $this->Reconciliation = $reconciliation;
        return $this;
    }
    
    /**
     * Only applicable to H3 Express freight areas inbound to U.S. to FedEx location only. Additional days may be required for final delivery. Please call Customer Service for details.
     *
     * @param string $ServiceCommitMessage
     * return TrackDetail
     */
    public function setServiceCommitMessage($serviceCommitMessage)
    {
        $this->ServiceCommitMessage = $serviceCommitMessage;
        return $this;
    }
    
    /**
     * Carrier associated with tracking number.
     *
     * @param CarrierCodeType $CarrierCode
     * return TrackDetail
     */
    public function setCarrierCode(\FedEx\TrackService\SimpleType\CarrierCodeType $carrierCode)
    {
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * Other related identifiers for this package such as reference numbers. May occur zero to many times for each tracking number.
     *
     * @param array[TrackPackageIdentifier] $OtherIdentifiers
     * return TrackDetail
     */
    public function setOtherIdentifiers(array $otherIdentifiers)
    {
        $this->OtherIdentifiers = $otherIdentifiers;
        return $this;
    }
    
    /**
     * The service type of this package.
     *
     * @param string $ServiceInfo
     * return TrackDetail
     */
    public function setServiceInfo($serviceInfo)
    {
        $this->ServiceInfo = $serviceInfo;
        return $this;
    }
    
    /**
     * The enumerated service type of this package.
     *
     * @param ServiceType $ServiceType
     * return TrackDetail
     */
    public function setServiceType(\FedEx\TrackService\SimpleType\ServiceType $serviceType)
    {
        $this->ServiceType = $serviceType;
        return $this;
    }
    
    /**
     * The weight of this package.
     *
     * @param Weight $PackageWeight
     * return TrackDetail
     */
    public function setPackageWeight(Weight $packageWeight)
    {
        $this->PackageWeight = $packageWeight;
        return $this;
    }
    
    /**
     * Not available at this time.
     *
     * @param Weight $PackageDimensionalWeight
     * return TrackDetail
     */
    public function setPackageDimensionalWeight(Weight $packageDimensionalWeight)
    {
        $this->PackageDimensionalWeight = $packageDimensionalWeight;
        return $this;
    }
    
    /**
     * The weight of this entire shipment.
     *
     * @param Weight $ShipmentWeight
     * return TrackDetail
     */
    public function setShipmentWeight(Weight $shipmentWeight)
    {
        $this->ShipmentWeight = $shipmentWeight;
        return $this;
    }
    
    /**
     * The packaging type of this package.
     *
     * @param string $Packaging
     * return TrackDetail
     */
    public function setPackaging($packaging)
    {
        $this->Packaging = $packaging;
        return $this;
    }
    
    /**
     * The enumerated packaging type used for this package.
     *
     * @param PackagingType $PackagingType
     * return TrackDetail
     */
    public function setPackagingType(\FedEx\TrackService\SimpleType\PackagingType $packagingType)
    {
        $this->PackagingType = $packagingType;
        return $this;
    }
    
    /**
     * The sequence of the package for FedEx Express international MPS (1 of X).
     *
     * @param nonNegativeInteger $PackageSequenceNumber
     * return TrackDetail
     */
    public function setPackageSequenceNumber($packageSequenceNumber)
    {
        $this->PackageSequenceNumber = $packageSequenceNumber;
        return $this;
    }
    
    /**
     * The number of pieces in this shipment.
     *
     * @param nonNegativeInteger $PackageCount
     * return TrackDetail
     */
    public function setPackageCount($packageCount)
    {
        $this->PackageCount = $packageCount;
        return $this;
    }
    
    /**
     * The address information for the shipper.
     *
     * @param Address $ShipperAddress
     * return TrackDetail
     */
    public function setShipperAddress(Address $shipperAddress)
    {
        $this->ShipperAddress = $shipperAddress;
        return $this;
    }
    
    /**
     * The address information for the origin of the package.
     *
     * @param Address $OriginLocationAddress
     * return TrackDetail
     */
    public function setOriginLocationAddress(Address $originLocationAddress)
    {
        $this->OriginLocationAddress = $originLocationAddress;
        return $this;
    }
    
    /**
     * Estimated package pickup time for shipments that haven't been picked up yet.
     *
     * @param dateTime $EstimatedPickupTimestamp
     * return TrackDetail
     */
    public function setEstimatedPickupTimestamp($estimatedPickupTimestamp)
    {
        $this->EstimatedPickupTimestamp = $estimatedPickupTimestamp;
        return $this;
    }
    
    /**
     * Time package was shipped/tendered over to FedEx. Time portion will be populated if available, otherwise will be set to midnight.
     *
     * @param dateTime $ShipTimestamp
     * return TrackDetail
     */
    public function setShipTimestamp($shipTimestamp)
    {
        $this->ShipTimestamp = $shipTimestamp;
        return $this;
    }
    
    /**
     * Total distance package traveled. Returned in miles only at this time.
     *
     * @param Distance $TotalTransitDistance
     * return TrackDetail
     */
    public function setTotalTransitDistance(Distance $totalTransitDistance)
    {
        $this->TotalTransitDistance = $totalTransitDistance;
        return $this;
    }
    
    /**
     * Total distance package still has to travel. Returned in miles only at this time.
     *
     * @param Distance $DistanceToDestination
     * return TrackDetail
     */
    public function setDistanceToDestination(Distance $distanceToDestination)
    {
        $this->DistanceToDestination = $distanceToDestination;
        return $this;
    }
    
    /**
     * The address the package is destined to.
     *
     * @param Address $DestinationAddress
     * return TrackDetail
     */
    public function setDestinationAddress(Address $destinationAddress)
    {
        $this->DestinationAddress = $destinationAddress;
        return $this;
    }
    
    /**
     * The address of the carrier facility for the package destination.
     *
     * @param Address $DestinationLocationAddress
     * return TrackDetail
     */
    public function setDestinationLocationAddress(Address $destinationLocationAddress)
    {
        $this->DestinationLocationAddress = $destinationLocationAddress;
        return $this;
    }
    
    /**
     * Projected package delivery time based on ship time stamp, service and destination. Not populated if delivery has already occurred.
     *
     * @param dateTime $EstimatedDeliveryTimestamp
     * return TrackDetail
     */
    public function setEstimatedDeliveryTimestamp($estimatedDeliveryTimestamp)
    {
        $this->EstimatedDeliveryTimestamp = $estimatedDeliveryTimestamp;
        return $this;
    }
    
    /**
     * The time the package was actually delivered.
     *
     * @param dateTime $ActualDeliveryTimestamp
     * return TrackDetail
     */
    public function setActualDeliveryTimestamp($actualDeliveryTimestamp)
    {
        $this->ActualDeliveryTimestamp = $actualDeliveryTimestamp;
        return $this;
    }
    
    /**
     * The address where the package was delivered.
     *
     * @param Address $ActualDeliveryAddress
     * return TrackDetail
     */
    public function setActualDeliveryAddress(Address $actualDeliveryAddress)
    {
        $this->ActualDeliveryAddress = $actualDeliveryAddress;
        return $this;
    }
    
    /**
     * The delivery location at the delivered to address.
     *
     * @param TrackDeliveryLocationType $DeliveryLocationType
     * return TrackDetail
     */
    public function setDeliveryLocationType(\FedEx\TrackService\SimpleType\TrackDeliveryLocationType $deliveryLocationType)
    {
        $this->DeliveryLocationType = $deliveryLocationType;
        return $this;
    }
    
    /**
     * A description of where the package was delivered (Front Desk, Back Door, etc.)
     *
     * @param string $DeliveryLocationDescription
     * return TrackDetail
     */
    public function setDeliveryLocationDescription($deliveryLocationDescription)
    {
        $this->DeliveryLocationDescription = $deliveryLocationDescription;
        return $this;
    }
    
    /**
     * Name on delivery record or release number.
     *
     * @param string $DeliverySignatureName
     * return TrackDetail
     */
    public function setDeliverySignatureName($deliverySignatureName)
    {
        $this->DeliverySignatureName = $deliverySignatureName;
        return $this;
    }
    
    /**
     * True if signed for signature image is available.
     *
     * @param boolean $SignatureProofOfDeliveryAvailable
     * return TrackDetail
     */
    public function setSignatureProofOfDeliveryAvailable($signatureProofOfDeliveryAvailable)
    {
        $this->SignatureProofOfDeliveryAvailable = $signatureProofOfDeliveryAvailable;
        return $this;
    }
    
    /**
     * True if delivery email updates are available for this tracking number.
     *
     * @param boolean $ProofOfDeliveryNotificationsAvailable
     * return TrackDetail
     */
    public function setProofOfDeliveryNotificationsAvailable($proofOfDeliveryNotificationsAvailable)
    {
        $this->ProofOfDeliveryNotificationsAvailable = $proofOfDeliveryNotificationsAvailable;
        return $this;
    }
    
    /**
     * True if exception email updates are available for this tracking number. Exception notifications include: General Delivery Exception, Incorrect Address,Clearance Delay, and International Shipment Release. Exception notifications are not available after shipment delivery.
     *
     * @param boolean $ExceptionNotificationsAvailable
     * return TrackDetail
     */
    public function setExceptionNotificationsAvailable($exceptionNotificationsAvailable)
    {
        $this->ExceptionNotificationsAvailable = $exceptionNotificationsAvailable;
        return $this;
    }
    
    /**
     * Returned for cargo shipments only when they are currently split across vehicles.
     *
     * @param array[TrackSplitShipmentPart] $SplitShipmentParts
     * return TrackDetail
     */
    public function setSplitShipmentParts(array $splitShipmentParts)
    {
        $this->SplitShipmentParts = $splitShipmentParts;
        return $this;
    }
    
    /**
     * Event information for a tracking number.
     *
     * @param array[TrackEvent] $Events
     * return TrackDetail
     */
    public function setEvents(array $events)
    {
        $this->Events = $events;
        return $this;
    }
    

    
}