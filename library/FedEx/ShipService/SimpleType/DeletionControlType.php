<?php
namespace FedEx\ShipService\SimpleType;

/**
 * Valid values for DeletionControlType
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class DeletionControlType
    extends AbstractSimpleType
{
    const _DELETE_ALL_PACKAGES = 'DELETE_ALL_PACKAGES';
    const _DELETE_ONE_PACKAGE = 'DELETE_ONE_PACKAGE';
    const _LEGACY = 'LEGACY';
}