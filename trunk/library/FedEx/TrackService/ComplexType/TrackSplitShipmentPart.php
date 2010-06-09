<?php
namespace FedEx\TrackService\ComplexType;

/**
 * Returned for cargo shipments only when they are currently split across vehicles.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackSplitShipmentPart
    extends AbstractComplexType
{
    protected $_name = 'TrackSplitShipmentPart';

    /**
     * Number of pieces/skids traveling together.
     *
     * @param int $PieceCount
     * return TrackSplitShipmentPart
     */
    public function setPieceCount($pieceCount)
    {
        $this->PieceCount = $pieceCount;
        return $this;
    }
    
    /**
     * Time this package was delivered.
     *
     * @param dateTime $Timestamp
     * return TrackSplitShipmentPart
     */
    public function setTimestamp($timestamp)
    {
        $this->Timestamp = $timestamp;
        return $this;
    }
    
    /**
     * The most recent status code for this specific split.
     *
     * @param string $StatusCode
     * return TrackSplitShipmentPart
     */
    public function setStatusCode($statusCode)
    {
        $this->StatusCode = $statusCode;
        return $this;
    }
    
    /**
     * The most recent status description for a specific split.
     *
     * @param string $StatusDescription
     * return TrackSplitShipmentPart
     */
    public function setStatusDescription($statusDescription)
    {
        $this->StatusDescription = $statusDescription;
        return $this;
    }
    

    
}