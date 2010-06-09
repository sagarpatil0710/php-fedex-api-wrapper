<?php
namespace FedEx\ShipService\SimpleType;

/**
 * A unique format can be specified for each email address indicated. The format will apply to notification emails sent to a particular email address.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class EMailNotificationFormatType
    extends AbstractSimpleType
{
    const _HTML = 'HTML';
    const _TEXT = 'TEXT';
    const _WIRELESS = 'WIRELESS';
}