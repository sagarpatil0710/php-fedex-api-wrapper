<?php
namespace FedEx\TrackService\ComplexType;

/**
 * FedEx Track Notification request.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackNotificationRequest
    extends AbstractComplexType
{
    protected $_name = 'TrackNotificationRequest';

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return TrackNotificationRequest
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
     * return TrackNotificationRequest
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
     * return TrackNotificationRequest
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
     * return TrackNotificationRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Tracking number.
     *
     * @param string $TrackingNumber
     * return TrackNotificationRequest
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * Indicates whether to return tracking information for all associated packages.
     *
     * @param boolean $MultiPiece
     * return TrackNotificationRequest
     */
    public function setMultiPiece($multiPiece)
    {
        $this->MultiPiece = $multiPiece;
        return $this;
    }
    
    /**
     * To obtain additional data on second and subsequent TrackNotification requests.Client must submit this value in subsequent track requests in order to obtain next page of data. Must contain at least four characters.
     *
     * @param string $PagingToken
     * return TrackNotificationRequest
     */
    public function setPagingToken($pagingToken)
    {
        $this->PagingToken = $pagingToken;
        return $this;
    }
    
    /**
     * Populate only if the TrackingNumberUniqueId is known from a previous Tracking request or an Email notifications request that resulted in a duplicate reply.
     *
     * @param string $TrackingNumberUniqueId
     * return TrackNotificationRequest
     */
    public function setTrackingNumberUniqueId($trackingNumberUniqueId)
    {
        $this->TrackingNumberUniqueId = $trackingNumberUniqueId;
        return $this;
    }
    
    /**
     * Recommend providing date range to find desired track number by limiting the results to this range. If not provided FedEx will default to a range that may not be useful for the search.
     *
     * @param date $ShipDateRangeBegin
     * return TrackNotificationRequest
     */
    public function setShipDateRangeBegin($shipDateRangeBegin)
    {
        $this->ShipDateRangeBegin = $shipDateRangeBegin;
        return $this;
    }
    
    /**
     * If provided, ShipDateRangeBegin is required. 
     *
     * @param date $ShipDateRangeEnd
     * return TrackNotificationRequest
     */
    public function setShipDateRangeEnd($shipDateRangeEnd)
    {
        $this->ShipDateRangeEnd = $shipDateRangeEnd;
        return $this;
    }
    
    /**
     * Included in the notification identifying the requester of this notification.
     *
     * @param string $SenderEMailAddress
     * return TrackNotificationRequest
     */
    public function setSenderEMailAddress($senderEMailAddress)
    {
        $this->SenderEMailAddress = $senderEMailAddress;
        return $this;
    }
    
    /**
     * Included in the notification identifying the requester of this notification.
     *
     * @param string $SenderContactName
     * return TrackNotificationRequest
     */
    public function setSenderContactName($senderContactName)
    {
        $this->SenderContactName = $senderContactName;
        return $this;
    }
    
    /**
     * Email notification details.
     *
     * @param EMailNotificationDetail $NotificationDetail
     * return TrackNotificationRequest
     */
    public function setNotificationDetail(EMailNotificationDetail $notificationDetail)
    {
        $this->NotificationDetail = $notificationDetail;
        return $this;
    }
    

    
}