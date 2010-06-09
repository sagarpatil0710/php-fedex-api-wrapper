<?php
namespace FedEx\RateService\SimpleType;

/**
 * Identifies the collection of special service offered by FedEx.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class ShipmentSpecialServiceType
    extends AbstractSimpleType
{
    const _BROKER_SELECT_OPTION = 'BROKER_SELECT_OPTION';
    const _COD = 'COD';
    const _DRY_ICE = 'DRY_ICE';
    const _EAST_COAST_SPECIAL = 'EAST_COAST_SPECIAL';
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
    const _DANGEROUS_GOODS = 'DANGEROUS_GOODS';
    const _EXTREME_LENGTH = 'EXTREME_LENGTH';
    const _FLATBED_TRAILER = 'FLATBED_TRAILER';
    const _FREIGHT_GUARANTEE = 'FREIGHT_GUARANTEE';
    const _LIFTGATE_DELIVERY = 'LIFTGATE_DELIVERY';
    const _LIFTGATE_PICKUP = 'LIFTGATE_PICKUP';
    const _LIMITED_ACCESS_DELIVERY = 'LIMITED_ACCESS_DELIVERY';
    const _LIMITED_ACCESS_PICKUP = 'LIMITED_ACCESS_PICKUP';
    const _PRE_DELIVERY_NOTIFICATION = 'PRE_DELIVERY_NOTIFICATION';
    const _PROTECTION_FROM_FREEZING = 'PROTECTION_FROM_FREEZING';
    const _REGIONAL_MALL_DELIVERY = 'REGIONAL_MALL_DELIVERY';
    const _REGIONAL_MALL_PICKUP = 'REGIONAL_MALL_PICKUP';
    const _EXHIBITION_DELIVERY = 'EXHIBITION_DELIVERY';
    const _EXHIBITION_PICKUP = 'EXHIBITION_PICKUP';
}