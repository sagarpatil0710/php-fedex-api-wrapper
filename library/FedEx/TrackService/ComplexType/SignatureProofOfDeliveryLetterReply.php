<?php
namespace FedEx\TrackService\ComplexType;

/**
 * FedEx Signature Proof Of Delivery Letter reply.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class SignatureProofOfDeliveryLetterReply
    extends AbstractComplexType
{
    protected $_name = 'SignatureProofOfDeliveryLetterReply';

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param NotificationSeverityType $HighestSeverity
     * return SignatureProofOfDeliveryLetterReply
     */
    public function setHighestSeverity(\FedEx\TrackService\SimpleType\NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * The descriptive data detailing the status of a submitted transaction.
     *
     * @param array[Notification] $Notifications
     * return SignatureProofOfDeliveryLetterReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Descriptive data that governs data payload language/translations.  The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return SignatureProofOfDeliveryLetterReply
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
     * return SignatureProofOfDeliveryLetterReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Base64-encoded SPOD Letter.
     *
     * @param base64Binary $Letter
     * return SignatureProofOfDeliveryLetterReply
     */
    public function setLetter($letter)
    {
        $this->Letter = $letter;
        return $this;
    }
    

    
}