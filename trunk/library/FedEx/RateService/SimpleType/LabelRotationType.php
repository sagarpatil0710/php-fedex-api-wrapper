<?php
namespace FedEx\RateService\SimpleType;

/**
 * Relative to normal orientation for the printer. RIGHT=90 degrees clockwise, UPSIDE_DOWN=180 degrees, LEFT=90 degrees counterclockwise.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class LabelRotationType
    extends AbstractSimpleType
{
    const _NONE = 'NONE';
    const _RIGHT = 'RIGHT';
    const _UPSIDE_DOWN = 'UPSIDE_DOWN';
    const _LEFT = 'LEFT';
}