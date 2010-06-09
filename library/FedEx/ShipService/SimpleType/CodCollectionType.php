<?php
namespace FedEx\ShipService\SimpleType;

/**
 * Identifies the type of funds FedEx should collect upon package delivery.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CodCollectionType
    extends AbstractSimpleType
{
    const _ANY = 'ANY';
    const _CASH = 'CASH';
    const _GUARANTEED_FUNDS = 'GUARANTEED_FUNDS';
}