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
class CommercialInvoiceDetail
    extends AbstractComplexType
{
    protected $_name = 'CommercialInvoiceDetail';

    /**
     * 
     *
     * @param ShippingDocumentFormat $Format
     * return CommercialInvoiceDetail
     */
    public function setFormat(ShippingDocumentFormat $format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * ?
     *
     * @param array[CustomerImageUsage] $CustomerImageUsages
     * return CommercialInvoiceDetail
     */
    public function setCustomerImageUsages(array $customerImageUsages)
    {
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    

    
}