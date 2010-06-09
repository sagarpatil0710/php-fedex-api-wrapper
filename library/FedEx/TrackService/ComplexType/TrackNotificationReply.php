<?php
namespace FedEx\TrackService\ComplexType;

/**
 * FedEx Track Notification reply.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackNotificationReply
    extends AbstractComplexType
{
    protected $_name = 'TrackNotificationReply';

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param NotificationSeverityType $HighestSeverity
     * return TrackNotificationReply
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
     * return TrackNotificationReply
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
     * return TrackNotificationReply
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
     * return TrackNotificationReply
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * True if duplicate packages with the same tracking number have been found, and only limited data will be provided for each one.
     *
     * @param boolean $DuplicateWaybill
     * return TrackNotificationReply
     */
    public function setDuplicateWaybill($duplicateWaybill)
    {
        $this->DuplicateWaybill = $duplicateWaybill;
        return $this;
    }
    
    /**
     * True if additional packages remain to be retrieved.
     *
     * @param boolean $MoreDataAvailable
     * return TrackNotificationReply
     */
    public function setMoreDataAvailable($moreDataAvailable)
    {
        $this->MoreDataAvailable = $moreDataAvailable;
        return $this;
    }
    
    /**
     * Value that must be passed in a TrackNotification request to retrieve the next set of packages.
     *
     * @param string $PagingToken
     * return TrackNotificationReply
     */
    public function setPagingToken($pagingToken)
    {
        $this->PagingToken = $pagingToken;
        return $this;
    }
    
    /**
     * Data pertaining to packages.
     *
     * @param array[TrackNotificationPackage] $Packages
     * return TrackNotificationReply
     */
    public function setPackages(array $packages)
    {
        $this->Packages = $packages;
        return $this;
    }
    

    
}