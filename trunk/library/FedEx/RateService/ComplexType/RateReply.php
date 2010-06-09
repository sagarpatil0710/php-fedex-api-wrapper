<?php
namespace FedEx\RateService\ComplexType;

/**
 * The response to a RateRequest. The Notifications indicate whether the request was successful or not.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class RateReply
    extends AbstractComplexType
{
    protected $_name = 'RateReply';

    /**
     * This indicates the highest level of severity of all the notifications returned in this reply
     *
     * @param NotificationSeverityType $HighestSeverity
     * return RateReply
     */
    public function setHighestSeverity(\FedEx\RateService\SimpleType\NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * The descriptive data regarding the results of the submitted transaction.
     *
     * @param array[Notification] $Notifications
     * return RateReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return RateReply
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
     * return RateReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Rate information which was requested.
     *
     * @param array[RateReplyDetail] $RateReplyDetails
     * return RateReply
     */
    public function setRateReplyDetails(array $rateReplyDetails)
    {
        $this->RateReplyDetails = $rateReplyDetails;
        return $this;
    }
    

    
}