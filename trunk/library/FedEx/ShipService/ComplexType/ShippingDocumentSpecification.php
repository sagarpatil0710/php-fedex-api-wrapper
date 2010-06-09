<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Description of shipping documents
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShippingDocumentSpecification
    extends AbstractComplexType
{
    protected $_name = 'ShippingDocumentSpecification';

    /**
     * Specify type of documents
     *
     * @param array[RequestedShippingDocumentType] $ShippingDocumentTypes
     * return ShippingDocumentSpecification
     */
    public function setShippingDocumentTypes(array $shippingDocumentTypes)
    {
        $this->ShippingDocumentTypes = $shippingDocumentTypes;
        return $this;
    }
    
    /**
     * Specifies the production of each package-level custom document (the same specification is used for all packages).
     *
     * @param CustomDocumentDetail $CustomPackageDocumentDetail
     * return ShippingDocumentSpecification
     */
    public function setCustomPackageDocumentDetail(CustomDocumentDetail $customPackageDocumentDetail)
    {
        $this->CustomPackageDocumentDetail = $customPackageDocumentDetail;
        return $this;
    }
    
    /**
     * Specifies the production of a shipment-level custom document.
     *
     * @param CustomDocumentDetail $CustomShipmentDocumentDetail
     * return ShippingDocumentSpecification
     */
    public function setCustomShipmentDocumentDetail(CustomDocumentDetail $customShipmentDocumentDetail)
    {
        $this->CustomShipmentDocumentDetail = $customShipmentDocumentDetail;
        return $this;
    }
    
    /**
     * ?
     *
     * @param NaftaCertificateOfOriginDetail $NaftaCertificateOfOriginDetail
     * return ShippingDocumentSpecification
     */
    public function setNaftaCertificateOfOriginDetail(NaftaCertificateOfOriginDetail $naftaCertificateOfOriginDetail)
    {
        $this->NaftaCertificateOfOriginDetail = $naftaCertificateOfOriginDetail;
        return $this;
    }
    
    /**
     * ?
     *
     * @param CommercialInvoiceDetail $CommercialInvoiceDetail
     * return ShippingDocumentSpecification
     */
    public function setCommercialInvoiceDetail(CommercialInvoiceDetail $commercialInvoiceDetail)
    {
        $this->CommercialInvoiceDetail = $commercialInvoiceDetail;
        return $this;
    }
    
    /**
     * This element is currently not supported and is for the future use. (Details pertaining to the GAA.)
     *
     * @param GeneralAgencyAgreementDetail $GeneralAgencyAgreementDetail
     * return ShippingDocumentSpecification
     */
    public function setGeneralAgencyAgreementDetail(GeneralAgencyAgreementDetail $generalAgencyAgreementDetail)
    {
        $this->GeneralAgencyAgreementDetail = $generalAgencyAgreementDetail;
        return $this;
    }
    
    /**
     * ?
     *
     * @param CertificateOfOriginDetail $CertificateOfOrigin
     * return ShippingDocumentSpecification
     */
    public function setCertificateOfOrigin(CertificateOfOriginDetail $certificateOfOrigin)
    {
        $this->CertificateOfOrigin = $certificateOfOrigin;
        return $this;
    }
    
    /**
     * Specifies the production of the OP-900 document for hazardous materials.
     *
     * @param Op900Detail $Op900Detail
     * return ShippingDocumentSpecification
     */
    public function setOp900Detail(Op900Detail $op900Detail)
    {
        $this->Op900Detail = $op900Detail;
        return $this;
    }
    

    
}