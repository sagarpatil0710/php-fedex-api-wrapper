<?php
namespace FedEx\TrackService\ComplexType;

/**
 * FedEx Signature Proof Of Delivery Letter request.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class SignatureProofOfDeliveryLetterRequest
    extends AbstractComplexType
{
    protected $_name = 'SignatureProofOfDeliveryLetterRequest';

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return SignatureProofOfDeliveryLetterRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * The descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $ClientDetail
     * return SignatureProofOfDeliveryLetterRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * The descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return SignatureProofOfDeliveryLetterRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return SignatureProofOfDeliveryLetterRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Tracking number and additional shipment data used to identify a unique shipment for proof of delivery.
     *
     * @param QualifiedTrackingNumber $QualifiedTrackingNumber
     * return SignatureProofOfDeliveryLetterRequest
     */
    public function setQualifiedTrackingNumber(QualifiedTrackingNumber $qualifiedTrackingNumber)
    {
        $this->QualifiedTrackingNumber = $qualifiedTrackingNumber;
        return $this;
    }
    
    /**
     * More information.
     *
     * @param string $AdditionalComments
     * return SignatureProofOfDeliveryLetterRequest
     */
    public function setAdditionalComments($additionalComments)
    {
        $this->AdditionalComments = $additionalComments;
        return $this;
    }
    
    /**
     *  Must be specified when type is LETTER.
     *
     * @param SignatureProofOfDeliveryImageType $LetterFormat
     * return SignatureProofOfDeliveryLetterRequest
     */
    public function setLetterFormat(\FedEx\TrackService\SimpleType\SignatureProofOfDeliveryImageType $letterFormat)
    {
        $this->LetterFormat = $letterFormat;
        return $this;
    }
    
    /**
     * Information to be substituted for recipient information in letter. The actual delivery details will be available by default.
     *
     * @param ContactAndAddress $Consignee
     * return SignatureProofOfDeliveryLetterRequest
     */
    public function setConsignee(ContactAndAddress $consignee)
    {
        $this->Consignee = $consignee;
        return $this;
    }
    

    
}