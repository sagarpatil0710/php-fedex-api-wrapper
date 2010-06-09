<?php
namespace FedEx\RateService\ComplexType;

/**
 * Details used while creating a pending shipment
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class PendingShipmentDetail
    extends AbstractComplexType
{
    protected $_name = 'PendingShipmentDetail';

    /**
     * Pending Shipment Type
     *
     * @param PendingShipmentType $Type
     * return PendingShipmentDetail
     */
    public function setType(\FedEx\RateService\SimpleType\PendingShipmentType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Date and time when this pending shipment expires.
     *
     * @param dateTime $ExpirationDate
     * return PendingShipmentDetail
     */
    public function setExpirationDate($expirationDate)
    {
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    
    /**
     * Details used for emailing a label.
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