<?php
namespace FedEx\ShipService\SimpleType;

/**
 * Identifies the category of the taxpayer identification number.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class TinType
    extends AbstractSimpleType
{
    const _EIN = 'EIN';
    const _SSN = 'SSN';
}