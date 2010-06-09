<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Descriptive data required for a FedEx COD (Collect-On-Delivery) shipment.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CodDetail
    extends AbstractComplexType
{
    protected $_name = 'CodDetail';

    /**
     * Identifies if freight charges are to be added to the COD amount. This element determines which freight charges should be added to the COD collect amount. See CodAddTransportationChargesType for the list of valid enumerated values.
     *
     * @param CodAddTransportationChargesType $AddTransportationCharges
     * return CodDetail
     */
    public function setAddTransportationCharges(\FedEx\ShipService\SimpleType\CodAddTransportationChargesType $addTransportationCharges)
    {
        $this->AddTransportationCharges = $addTransportationCharges;
        return $this;
    }
    
    /**
     * Identifies the type of funds FedEx should collect upon package delivery. See CodCollectionType for the list of valid enumerated values.
     *
     * @param CodCollectionType $CollectionType
     * return CodDetail
     */
    public function setCollectionType(\FedEx\ShipService\SimpleType\CodCollectionType $collectionType)
    {
        $this->CollectionType = $collectionType;
        return $this;
    }
    
    /**
     * Descriptive data about the recipient of the COD shipment.
     *
     * @param Party $CodRecipient
     * return CodDetail
     */
    public function setCodRecipient(Party $codRecipient)
    {
        $this->CodRecipient = $codRecipient;
        return $this;
    }
    
    /**
     * Indicates which type of reference information to include on the COD return shipping label.
     *
     * @param CodReturnReferenceIndicatorType $ReferenceIndicator
     * return CodDetail
     */
    public function setReferenceIndicator(\FedEx\ShipService\SimpleType\CodReturnReferenceIndicatorType $referenceIndicator)
    {
        $this->ReferenceIndicator = $referenceIndicator;
        return $this;
    }
    

    
}