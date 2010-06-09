<?php
namespace FedEx\RateService\ComplexType;

/**
 * Descriptive data regarding special services requested by the shipper for a shipment. If the shipper is requesting a special service which requires additional data (e.g. COD), the special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object. For example, to request COD, "COD" must be included in the SpecialServiceTypes collection and the CodDetail object must contain the required data.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class PackageSpecialServicesRequested
    extends AbstractComplexType
{
    protected $_name = 'PackageSpecialServicesRequested';

    /**
     * Identifies the collection of special service types requested by the shipper. See SpecialServiceTypes for the list of valid enumerated types.
     *
     * @param array[PackageSpecialServiceType] $SpecialServiceTypes
     * return PackageSpecialServicesRequested
     */
    public function setSpecialServiceTypes(array $specialServiceTypes)
    {
        $this->SpecialServiceTypes = $specialServiceTypes;
        return $this;
    }
    
    /**
     * For use with FedEx Ground services only; COD must be present in shipment's special services.
     *
     * @param Money $CodCollectionAmount
     * return PackageSpecialServicesRequested
     */
    public function setCodCollectionAmount(Money $codCollectionAmount)
    {
        $this->CodCollectionAmount = $codCollectionAmount;
        return $this;
    }
    
    /**
     * Descriptive data required for a FedEx shipment containing dangerous materials. This element is required when SpecialServiceType.DANGEROUS_GOODS or HAZARDOUS_MATERIAL is present in the SpecialServiceTypes collection.
     *
     * @param DangerousGoodsDetail $DangerousGoodsDetail
     * return PackageSpecialServicesRequested
     */
    public function setDangerousGoodsDetail(DangerousGoodsDetail $dangerousGoodsDetail)
    {
        $this->DangerousGoodsDetail = $dangerousGoodsDetail;
        return $this;
    }
    
    /**
     * Descriptive data required for a FedEx shipment containing dry ice. This element is required when SpecialServiceType.DRY_ICE is present in the SpecialServiceTypes collection.
     *
     * @param Weight $DryIceWeight
     * return PackageSpecialServicesRequested
     */
    public function setDryIceWeight(Weight $dryIceWeight)
    {
        $this->DryIceWeight = $dryIceWeight;
        return $this;
    }
    
    /**
     * The descriptive data required for FedEx signature services. This element is required when SpecialServiceType.SIGNATURE_OPTION is present in the SpecialServiceTypes collection.
     *
     * @param SignatureOptionDetail $SignatureOptionDetail
     * return PackageSpecialServicesRequested
     */
    public function setSignatureOptionDetail(SignatureOptionDetail $signatureOptionDetail)
    {
        $this->SignatureOptionDetail = $signatureOptionDetail;
        return $this;
    }
    
    /**
     * To be filled.
     *
     * @param PriorityAlertDetail $PriorityAlertDetail
     * return PackageSpecialServicesRequested
     */
    public function setPriorityAlertDetail(PriorityAlertDetail $priorityAlertDetail)
    {
        $this->PriorityAlertDetail = $priorityAlertDetail;
        return $this;
    }
    

    
}