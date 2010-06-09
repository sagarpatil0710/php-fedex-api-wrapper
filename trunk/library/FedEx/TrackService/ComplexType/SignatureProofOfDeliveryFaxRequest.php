<?php
namespace FedEx\TrackService\ComplexType;

/**
 * FedEx Signature Proof Of Delivery Fax request.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class SignatureProofOfDeliveryFaxRequest
    extends AbstractComplexType
{
    protected $_name = 'SignatureProofOfDeliveryFaxRequest';

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return SignatureProofOfDeliveryFaxRequest
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
     * return SignatureProofOfDeliveryFaxRequest
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
     * return SignatureProofOfDeliveryFaxRequest
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
     * return SignatureProofOfDeliveryFaxRequest
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
     * return SignatureProofOfDeliveryFaxRequest
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
     * return SignatureProofOfDeliveryFaxRequest
     */
    public function setAdditionalComments($additionalComments)
    {
        $this->AdditionalComments = $additionalComments;
        return $this;
    }
    
    /**
     * 
     *
     * @param ContactAndAddress $FaxSender
     * return SignatureProofOfDeliveryFaxRequest
     */
    public function setFaxSender(ContactAndAddress $faxSender)
    {
        $this->FaxSender = $faxSender;
        return $this;
    }
    
    /**
     * Identifies the recipient's fax details.
     *
     * @param ContactAndAddress $FaxRecipient
     * return SignatureProofOfDeliveryFaxRequest
     */
    public function setFaxRecipient(ContactAndAddress $faxRecipient)
    {
        $this->FaxRecipient = $faxRecipient;
        return $this;
    }
    

    
}