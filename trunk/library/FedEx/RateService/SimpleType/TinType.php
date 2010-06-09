<?php
namespace FedEx\RateService\SimpleType;

/**
 * Identifies the category of the taxpayer identification number.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class TinType
    extends AbstractSimpleType
{
    const _EIN = 'EIN';
    const _SSN = 'SSN';
}