<?php
namespace FedEx\TrackService\ComplexType;

/**
 * The descriptive data regarding the results of the submitted transaction.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class Notification
    extends AbstractComplexType
{
    protected $_name = 'Notification';

    /**
     * Identifies the severity of the Notification item. See NotificationSeverityType for list of returned values.
     *
     * @param NotificationSeverityType $Severity
     * return Notification
     */
    public function setSeverity(\FedEx\TrackService\SimpleType\NotificationSeverityType $severity)
    {
        $this->Severity = $severity;
        return $this;
    }
    
    /**
     * Identifies the source - what FedEx system, sub-system, or component generated the Notification item.
     *
     * @param string $Source
     * return Notification
     */
    public function setSource($source)
    {
        $this->Source = $source;
        return $this;
    }
    
    /**
     * Identifies the error code generated by the FedEx system, sub-system or component.
     *
     * @param string $Code
     * return Notification
     */
    public function setCode($code)
    {
        $this->Code = $code;
        return $this;
    }
    
    /**
     * Identifies the error message text.
     *
     * @param string $Message
     * return Notification
     */
    public function setMessage($message)
    {
        $this->Message = $message;
        return $this;
    }
    
    /**
     * Identifies the error message text in the localization requested. Currently not supported.
     *
     * @param string $LocalizedMessage
     * return Notification
     */
    public function setLocalizedMessage($localizedMessage)
    {
        $this->LocalizedMessage = $localizedMessage;
        return $this;
    }
    
    /**
     * Used internally by FedEx systems for message translation.
     *
     * @param array[NotificationParameter] $MessageParameters
     * return Notification
     */
    public function setMessageParameters(array $messageParameters)
    {
        $this->MessageParameters = $messageParameters;
        return $this;
    }
    

    
}