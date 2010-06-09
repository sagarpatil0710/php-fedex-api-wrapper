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
class CompletedPackageDetail
    extends AbstractComplexType
{
    protected $_name = 'CompletedPackageDetail';

    /**
     * The package sequence number of this package in a multiple piece shipment.
     *
     * @param positiveInteger $SequenceNumber
     * return CompletedPackageDetail
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    
    /**
     * The Tracking number and form id for this package.
     *
     * @param array[TrackingId] $TrackingIds
     * return CompletedPackageDetail
     */
    public function setTrackingIds(array $trackingIds)
    {
        $this->TrackingIds = $trackingIds;
        return $this;
    }
    
    /**
     * Used with request containing PACKAGE_GROUPS, to identify which group of identical packages was used to produce a reply item.
     *
     * @param nonNegativeInteger $GroupNumber
     * return CompletedPackageDetail
     */
    public function setGroupNumber($groupNumber)
    {
        $this->GroupNumber = $groupNumber;
        return $this;
    }
    
    /**
     * Oversize class for this package.
     *
     * @param OversizeClassType $OversizeClass
     * return CompletedPackageDetail
     */
    public function setOversizeClass(\FedEx\ShipService\SimpleType\OversizeClassType $oversizeClass)
    {
        $this->OversizeClass = $oversizeClass;
        return $this;
    }
    
    /**
     * The rating information for this package. Note, this is a courtesy rate and may be different from what is invoiced.
     *
     * @param PackageRating $PackageRating
     * return CompletedPackageDetail
     */
    public function setPackageRating(PackageRating $packageRating)
    {
        $this->PackageRating = $packageRating;
        return $this;
    }
    
    /**
     * Associated with package, due to interaction with per-package hazardous materials presence/absence.
     *
     * @param string $GroundServiceCode
     * return CompletedPackageDetail
     */
    public function setGroundServiceCode($groundServiceCode)
    {
        $this->GroundServiceCode = $groundServiceCode;
        return $this;
    }
    
    /**
     * The data that is used to from the Astra and 2DCommon barcodes for the label..
     *
     * @param PackageBarcodes $Barcodes
     * return CompletedPackageDetail
     */
    public function setBarcodes(PackageBarcodes $barcodes)
    {
        $this->Barcodes = $barcodes;
        return $this;
    }
    
    /**
     * The textual description of the special service applied to the package.
     *
     * @param string $AstraHandlingText
     * return CompletedPackageDetail
     */
    public function setAstraHandlingText($astraHandlingText)
    {
        $this->AstraHandlingText = $astraHandlingText;
        return $this;
    }
    
    /**
     * ?
     *
     * @param array[AstraLabelElement] $AstraLabelElements
     * return CompletedPackageDetail
     */
    public function setAstraLabelElements(array $astraLabelElements)
    {
        $this->AstraLabelElements = $astraLabelElements;
        return $this;
    }
    
    /**
     * The label image or printer commands to print the label.
     *
     * @param ShippingDocument $Label
     * return CompletedPackageDetail
     */
    public function setLabel(ShippingDocument $label)
    {
        $this->Label = $label;
        return $this;
    }
    
    /**
     * All package-level shipping documents (other than labels and barcodes).
     *
     * @param array[ShippingDocument] $PackageDocuments
     * return CompletedPackageDetail
     */
    public function setPackageDocuments(array $packageDocuments)
    {
        $this->PackageDocuments = $packageDocuments;
        return $this;
    }
    
    /**
     * Information about the COD return shipment.
     *
     * @param CodReturnPackageDetail $CodReturnDetail
     * return CompletedPackageDetail
     */
    public function setCodReturnDetail(CodReturnPackageDetail $codReturnDetail)
    {
        $this->CodReturnDetail = $codReturnDetail;
        return $this;
    }
    
    /**
     * The actual signature option applied to this shipment. This could be different than the signature option requested if a conflict occured with other service features in the shipment.
     *
     * @param SignatureOptionType $SignatureOption
     * return CompletedPackageDetail
     */
    public function setSignatureOption(\FedEx\ShipService\SimpleType\SignatureOptionType $signatureOption)
    {
        $this->SignatureOption = $signatureOption;
        return $this;
    }
    
    /**
     * Documents the kinds and quantities of all hazardous commodities in the current package, using updated hazardous commodity description data.
     *
     * @param array[ValidatedHazardousCommodityContent] $HazardousCommodities
     * return CompletedPackageDetail
     */
    public function setHazardousCommodities(array $hazardousCommodities)
    {
        $this->HazardousCommodities = $hazardousCommodities;
        return $this;
    }
    

    
}