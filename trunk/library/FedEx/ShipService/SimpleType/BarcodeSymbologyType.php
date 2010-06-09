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
class BarcodeSymbologyType
    extends AbstractSimpleType
{
    const _CODE128B = 'CODE128B';
    const _CODE128C = 'CODE128C';
    const _CODE39 = 'CODE39';
}