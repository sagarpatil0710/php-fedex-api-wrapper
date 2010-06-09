<?php
namespace FedEx\ShipService\SimpleType;

/**
 * Identifies the collection of special service offered by FedEx. BROKER_SELECT_OPTION should be used for Express shipments only.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShipmentSpecialServiceType
    extends AbstractSimpleType
{
    const _BROKER_SELECT_OPTION = 'BROKER_SELECT_OPTION';
    const _COD = 'COD';
    const _DRY_ICE = 'DRY_ICE';
    const _ELECTRONIC_TRADE_DOCUMENTS = 'ELECTRONIC_TRADE_DOCUMENTS';
    const _EMAIL_NOTIFICATION = 'EMAIL_NOTIFICATION';
    const _FUTURE_DAY_SHIPMENT = 'FUTURE_DAY_SHIPMENT';
    const _HOLD_AT_LOCATION = 'HOLD_AT_LOCATION';
    const _HOME_DELIVERY_PREMIUM = 'HOME_DELIVERY_PREMIUM';
    const _INSIDE_DELIVERY = 'INSIDE_DELIVERY';
    const _INSIDE_PICKUP = 'INSIDE_PICKUP';
    const _PENDING_SHIPMENT = 'PENDING_SHIPMENT';
    const _RETURN_SHIPMENT = 'RETURN_SHIPMENT';
    const _SATURDAY_DELIVERY = 'SATURDAY_DELIVERY';
    const _SATURDAY_PICKUP = 'SATURDAY_PICKUP';
}