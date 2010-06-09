<?php
namespace FedEx\ShipService\ComplexType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class AdditionalLabelsDetail
    extends AbstractComplexType
{
    protected $_name = 'AdditionalLabelsDetail';

    /**
     * 
     *
     * @param AdditionalLabelsType $Type
     * return AdditionalLabelsDetail
     */
    public function setType(\FedEx\ShipService\SimpleType\AdditionalLabelsType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * 
     *
     * @param nonNegativeInteger $Count
     * return AdditionalLabelsDetail
     */
    public function setCount($count)
    {
        $this->Count = $count;
        return $this;
    }
    

    
}