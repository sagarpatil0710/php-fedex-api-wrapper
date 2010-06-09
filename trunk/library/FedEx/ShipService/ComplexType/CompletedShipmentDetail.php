<?php
namespace FedEx\ShipService\ComplexType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CompletedShipmentDetail
    extends AbstractComplexType
{
    protected $_name = 'CompletedShipmentDetail';

    /**
     * Indicates whether or not this is a US Domestic shipment.
     *
     * @param boolean $UsDomestic
     * return CompletedShipmentDetail
     */
    public function setUsDomestic($usDomestic)
    {
        $this->UsDomestic = $usDomestic;
        return $this;
    }
    
    /**
     * Indicates the carrier that will be used to deliver this shipment.
     *
     * @param CarrierCodeType $CarrierCode
     * return CompletedShipmentDetail
     */
    public function setCarrierCode(\FedEx\ShipService\SimpleType\CarrierCodeType $carrierCode)
    {
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * The master tracking number and form id of this multiple piece shipment. This information is to be provided for each subsequent of a multiple piece shipment.
     *
     * @param TrackingId $MasterTrackingId
     * return CompletedShipmentDetail
     */
    public function setMasterTrackingId(TrackingId $masterTrackingId)
    {
        $this->MasterTrackingId = $masterTrackingId;
        return $this;
    }
    
    /**
     * Description of the FedEx service used for this shipment. Currently not supported.
     *
     * @param string $ServiceTypeDescription
     * return CompletedShipmentDetail
     */
    public function setServiceTypeDescription($serviceTypeDescription)
    {
        $this->ServiceTypeDescription = $serviceTypeDescription;
        return $this;
    }
    
    /**
     * Description of the packaging used for this shipment. Currently not supported.
     *
     * @param string $PackagingDescription
     * return CompletedShipmentDetail
     */
    public function setPackagingDescription($packagingDescription)
    {
        $this->PackagingDescription = $packagingDescription;
        return $this;
    }
    
    /**
     * Information about the routing, origin, destination and delivery of a shipment.
     *
     * @param ShipmentRoutingDetail $RoutingDetail
     * return CompletedShipmentDetail
     */
    public function setRoutingDetail(ShipmentRoutingDetail $routingDetail)
    {
        $this->RoutingDetail = $routingDetail;
        return $this;
    }
    
    /**
     * Access Details about PendingShipment information.
     *
     * @param PendingShipmentAccessDetail $AccessDetail
     * return CompletedShipmentDetail
     */
    public function setAccessDetail(PendingShipmentAccessDetail $accessDetail)
    {
        $this->AccessDetail = $accessDetail;
        return $this;
    }
    
    /**
     * Only used in the reply to tag requests.
     *
     * @param CompletedTagDetail $TagDetail
     * return CompletedShipmentDetail
     */
    public function setTagDetail(CompletedTagDetail $tagDetail)
    {
        $this->TagDetail = $tagDetail;
        return $this;
    }
    
    /**
     * Provides reply information specific to SmartPost shipments.
     *
     * @param CompletedSmartPostDetail $SmartPostDetail
     * return CompletedShipmentDetail
     */
    public function setSmartPostDetail(CompletedSmartPostDetail $smartPostDetail)
    {
        $this->SmartPostDetail = $smartPostDetail;
        return $this;
    }
    
    /**
     * The rating information for this shipment. Note, this is a courtesy rate and may be different from what is invoiced.
     *
     * @param ShipmentRating $ShipmentRating
     * return CompletedShipmentDetail
     */
    public function setShipmentRating(ShipmentRating $shipmentRating)
    {
        $this->ShipmentRating = $shipmentRating;
        return $this;
    }
    
    /**
     * Information about the COD return shipment.
     *
     * @param CodReturnShipmentDetail $CodReturnDetail
     * return CompletedShipmentDetail
     */
    public function setCodReturnDetail(CodReturnShipmentDetail $codReturnDetail)
    {
        $this->CodReturnDetail = $codReturnDetail;
        return $this;
    }
    
    /**
     * Indicates whether or not this shipment is eligible for a money back guarantee.
     *
     * @param boolean $IneligibleForMoneyBackGuarantee
     * return CompletedShipmentDetail
     */
    public function setIneligibleForMoneyBackGuarantee($ineligibleForMoneyBackGuarantee)
    {
        $this->IneligibleForMoneyBackGuarantee = $ineligibleForMoneyBackGuarantee;
        return $this;
    }
    
    /**
     * General field for exporting-country-specific export data (e.g. B13A for CA, FTSR Exemption or AES Citation for US.
     *
     * @param string $ExportComplianceStatement
     * return CompletedShipmentDetail
     */
    public function setExportComplianceStatement($exportComplianceStatement)
    {
        $this->ExportComplianceStatement = $exportComplianceStatement;
        return $this;
    }
    
    /**
     * 
     *
     * @param CompletedEtdDetail $CompletedEtdDetail
     * return CompletedShipmentDetail
     */
    public function setCompletedEtdDetail(CompletedEtdDetail $completedEtdDetail)
    {
        $this->CompletedEtdDetail = $completedEtdDetail;
        return $this;
    }
    
    /**
     * All shipment-level shipping documents (other than labels and barcodes).
     *
     * @param array[ShippingDocument] $ShipmentDocuments
     * return CompletedShipmentDetail
     */
    public function setShipmentDocuments(array $shipmentDocuments)
    {
        $this->ShipmentDocuments = $shipmentDocuments;
        return $this;
    }
    
    /**
     * Package level details about this package.
     *
     * @param array[CompletedPackageDetail] $CompletedPackageDetails
     * return CompletedShipmentDetail
     */
    public function setCompletedPackageDetails(array $completedPackageDetails)
    {
        $this->CompletedPackageDetails = $completedPackageDetails;
        return $this;
    }
    

    
}