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
class TrackReconciliation
    extends AbstractComplexType
{
    protected $_name = 'TrackReconciliation';

    /**
     * 
     *
     * @param string $Status
     * return TrackReconciliation
     */
    public function setStatus($status)
    {
        $this->Status = $status;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Description
     * return TrackReconciliation
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    

    
}