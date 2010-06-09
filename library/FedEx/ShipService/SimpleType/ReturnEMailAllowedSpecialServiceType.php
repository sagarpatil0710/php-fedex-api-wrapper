<?php
namespace FedEx\ShipService\SimpleType;

/**
 * Describes the special services the merchant will allow on a return shipment.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ReturnEMailAllowedSpecialServiceType
    extends AbstractSimpleType
{
    const _SATURDAY_DELIVERY = 'SATURDAY_DELIVERY';
    const _SATURDAY_PICKUP = 'SATURDAY_PICKUP';
}