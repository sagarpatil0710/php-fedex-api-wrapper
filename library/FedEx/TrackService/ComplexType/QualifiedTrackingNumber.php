<?php
namespace FedEx\TrackService\ComplexType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class QualifiedTrackingNumber
    extends AbstractComplexType
{
    protected $_name = 'QualifiedTrackingNumber';

    /**
     * Tracking number of package.
     *
     * @param string $TrackingNumber
     * return QualifiedTrackingNumber
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * Date on which package was tendered to FedEx.
     *
     * @param date $ShipDate
     * return QualifiedTrackingNumber
     */
    public function setShipDate($shipDate)
    {
        $this->ShipDate = $shipDate;
        return $this;
    }
    
    /**
     * Account number associated with shipment (as opposed to account number in ClientDetail, which is that of party sending request).
     *
     * @param string $AccountNumber
     * return QualifiedTrackingNumber
     */
    public function setAccountNumber($accountNumber)
    {
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    
    /**
     * 
     *
     * @param CarrierCodeType $Carrier
     * return QualifiedTrackingNumber
     */
    public function setCarrier(\FedEx\TrackService\SimpleType\CarrierCodeType $carrier)
    {
        $this->Carrier = $carrier;
        return $this;
    }
    
    /**
     * 
     *
     * @param Address $Destination
     * return QualifiedTrackingNumber
     */
    public function setDestination(Address $destination)
    {
        $this->Destination = $destination;
        return $this;
    }
    

    
}