<?php
namespace FedEx\RateService\SimpleType;

/**
 * Valid values for CustomLabelCoordinateUnits
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class CustomLabelCoordinateUnits
    extends AbstractSimpleType
{
    const _MILS = 'MILS';
    const _PIXELS = 'PIXELS';
}