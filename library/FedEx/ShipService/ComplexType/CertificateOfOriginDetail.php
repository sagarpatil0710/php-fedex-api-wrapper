<?php
namespace FedEx\ShipService\ComplexType;

/**
 * ?
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CertificateOfOriginDetail
    extends AbstractComplexType
{
    protected $_name = 'CertificateOfOriginDetail';

    /**
     * ?
     *
     * @param ShippingDocumentFormat $DocumentFormat
     * return CertificateOfOriginDetail
     */
    public function setDocumentFormat(ShippingDocumentFormat $documentFormat)
    {
        $this->DocumentFormat = $documentFormat;
        return $this;
    }
    
    /**
     * ?
     *
     * @param array[CustomerImageUsage] $CustomerImageUsages
     * return CertificateOfOriginDetail
     */
    public function setCustomerImageUsages(array $customerImageUsages)
    {
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    

    
}