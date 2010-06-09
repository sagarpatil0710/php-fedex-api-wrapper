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
class EMailNotificationDetail
    extends AbstractComplexType
{
    protected $_name = 'EMailNotificationDetail';

    /**
     * Personal messages are not applicable with wireless formatted notifications. UTF-8 encoded message.
     *
     * @param string $PersonalMessage
     * return EMailNotificationDetail
     */
    public function setPersonalMessage($personalMessage)
    {
        $this->PersonalMessage = $personalMessage;
        return $this;
    }
    
    /**
     * Currently up to a maximum of 6 email combinations are supported.
     *
     * @param array[EMailNotificationRecipient] $Recipients
     * return EMailNotificationDetail
     */
    public function setRecipients(array $recipients)
    {
        $this->Recipients = $recipients;
        return $this;
    }
    

    
}