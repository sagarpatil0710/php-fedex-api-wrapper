<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Department of Commerce/Department of State information about this shipment.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class DestinationControlDetail
    extends AbstractComplexType
{
    protected $_name = 'DestinationControlDetail';

    /**
     * List of applicable Statment types.
     *
     * @param array[DestinationControlStatementType] $StatementTypes
     * return DestinationControlDetail
     */
    public function setStatementTypes(array $statementTypes)
    {
        $this->StatementTypes = $statementTypes;
        return $this;
    }
    
    /**
     * Countries this shipment is destined for.
     *
     * @param string $DestinationCountries
     * return DestinationControlDetail
     */
    public function setDestinationCountries($destinationCountries)
    {
        $this->DestinationCountries = $destinationCountries;
        return $this;
    }
    
    /**
     * Department of State End User.
     *
     * @param string $EndUser
     * return DestinationControlDetail
     */
    public function setEndUser($endUser)
    {
        $this->EndUser = $endUser;
        return $this;
    }
    

    
}