<?php
namespace FedEx\ShipService\ComplexType;

/**
 * The descriptive data for FedEx pending shipment
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PendingShipmentDetail
    extends AbstractComplexType
{
    protected $_name = 'PendingShipmentDetail';

    /**
     * Identifies the type of FedEx pending shipment
     *
     * @param PendingShipmentType $Type
     * return PendingShipmentDetail
     */
    public function setType(\FedEx\ShipService\SimpleType\PendingShipmentType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Date when the pending shipment expires.
     *
     * @param date $ExpirationDate
     * return PendingShipmentDetail
     */
    public function setExpirationDate($expirationDate)
    {
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    
    /**
     * Descriptive data about notification email
     *
     * @param EMailLabelDetail $EmailLabelDetail
     * return PendingShipmentDetail
     */
    public function setEmailLabelDetail(EMailLabelDetail $emailLabelDetail)
    {
        $this->EmailLabelDetail = $emailLabelDetail;
        return $this;
    }
    

    
}