<?php
namespace FedEx\TrackService\ComplexType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackNotificationRecipientDetail
    extends AbstractComplexType
{
    protected $_name = 'TrackNotificationRecipientDetail';

    /**
     * 
     *
     * @param boolean $NotifyOnDelivery
     * return TrackNotificationRecipientDetail
     */
    public function setNotifyOnDelivery($notifyOnDelivery)
    {
        $this->NotifyOnDelivery = $notifyOnDelivery;
        return $this;
    }
    
    /**
     * 
     *
     * @param boolean $NotifyOnException
     * return TrackNotificationRecipientDetail
     */
    public function setNotifyOnException($notifyOnException)
    {
        $this->NotifyOnException = $notifyOnException;
        return $this;
    }
    

    
}