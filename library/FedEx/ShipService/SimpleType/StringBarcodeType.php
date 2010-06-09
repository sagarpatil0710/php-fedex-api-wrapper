<?php
namespace FedEx\ShipService\SimpleType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class StringBarcodeType
    extends AbstractSimpleType
{
    const _ASTRA = 'ASTRA';
    const _GROUND = 'GROUND';
    const _USPS = 'USPS';
}