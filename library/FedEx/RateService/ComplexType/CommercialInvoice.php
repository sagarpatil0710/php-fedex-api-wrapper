<?php
namespace FedEx\RateService\ComplexType;

/**
 * CommercialInvoice element is required for electronic upload of CI data. It will serve to create/transmit an Electronic Commercial Invoice through FedEx System. Customers are responsible for printing their own Commercial Invoice. Commercial Invoice support consists of a maximum of 99 commodity line items.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information
 */
class CommercialInvoice
    extends AbstractComplexType
{
    protected $_name = 'CommercialInvoice';

    /**
     * Commercial Invoice comments to be uploaded to customs.
     *
     * @param array[string] $Comments
     * return CommercialInvoice
     */
    public function setComments(array $comments)
    {
        $this->Comments = $comments;
        return $this;
    }
    
    /**
     * 
                Format: Two explicit decimal positions max length 19 including decimal.
                Required if Terms Of Sale is CFR or  CIF.
                This charge should be added to the total customs value amount.
              
     *
     * @param Money $FreightCharge
     * return CommercialInvoice
     */
    public function setFreightCharge(Money $freightCharge)
    {
        $this->FreightCharge = $freightCharge;
        return $this;
    }
    
    /**
     * 
                Format: Two explicit decimal positions max length 19 including decimal.
                This charge should be added to the total customs value amount.
              
     *
     * @param Money $TaxesOrMiscellaneousCharge
     * return CommercialInvoice
     */
    public function setTaxesOrMiscellaneousCharge(Money $taxesOrMiscellaneousCharge)
    {
        $this->TaxesOrMiscellaneousCharge = $taxesOrMiscellaneousCharge;
        return $this;
    }
    
    /**
     * Test for the Commercial Invoice. Note that Sold is not a valid Purpose for a Proforma Invoice.
     *
     * @param PurposeOfShipmentType $Purpose
     * return CommercialInvoice
     */
    public function setPurpose(\FedEx\RateService\SimpleType\PurposeOfShipmentType $purpose)
    {
        $this->Purpose = $purpose;
        return $this;
    }
    
    /**
     * Descriptive text for the purpose of the shipment.
     *
     * @param string $PurposeOfShipmentDescription
     * return CommercialInvoice
     */
    public function setPurposeOfShipmentDescription($purposeOfShipmentDescription)
    {
        $this->PurposeOfShipmentDescription = $purposeOfShipmentDescription;
        return $this;
    }
    
    /**
     * Customer assigned invoice number.
     *
     * @param string $CustomerInvoiceNumber
     * return CommercialInvoice
     */
    public function setCustomerInvoiceNumber($customerInvoiceNumber)
    {
        $this->CustomerInvoiceNumber = $customerInvoiceNumber;
        return $this;
    }
    
    /**
     * Defines the terms of the sale.
     *
     * @param TermsOfSaleType $TermsOfSale
     * return CommercialInvoice
     */
    public function setTermsOfSale(\FedEx\RateService\SimpleType\TermsOfSaleType $termsOfSale)
    {
        $this->TermsOfSale = $termsOfSale;
        return $this;
    }
    

    
}