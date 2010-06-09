<?php
namespace FedEx\RateService\SimpleType;

/**
 * These values control the optional features of service that may be combined in a commitment/rate comparision transaction.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class ServiceOptionType
    extends AbstractSimpleType
{
    const _SATURDAY_DELIVERY = 'SATURDAY_DELIVERY';
    const _FREIGHT_GUARANTEE = 'FREIGHT_GUARANTEE';
    const _SMARTPOST_HUB_ID = 'SMARTPOST_HUB_ID';
}