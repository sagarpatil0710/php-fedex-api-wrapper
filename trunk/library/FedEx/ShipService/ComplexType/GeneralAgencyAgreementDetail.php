<?php
namespace FedEx\ShipService\ComplexType;

/**
 * This element is currently not supported and is for the future use.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class GeneralAgencyAgreementDetail
    extends AbstractComplexType
{
    protected $_name = 'GeneralAgencyAgreementDetail';

    /**
     * 
     *
     * @param ShippingDocumentFormat $Format
     * return GeneralAgencyAgreementDetail
     */
    public function setFormat(ShippingDocumentFormat $format)
    {
        $this->Format = $format;
        return $this;
    }
    

    
}