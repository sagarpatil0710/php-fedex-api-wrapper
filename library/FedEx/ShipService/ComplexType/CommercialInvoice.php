<?php
namespace FedEx\ShipService\ComplexType;

/**
 * CommercialInvoice element is required for electronic upload of CI data. It will serve to create/transmit an Electronic Commercial Invoice through FedEx System. Customers are responsible for printing their own Commercial Invoice. Commercial Invoice support consists of a maximum of 99 commodity line items.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
                Required if Terms Of Sale is CFR or CIF.
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
     * Any packing costs that are associated with this shipment.
     *
     * @param Money $PackingCosts
     * return CommercialInvoice
     */
    public function setPackingCosts(Money $packingCosts)
    {
        $this->PackingCosts = $packingCosts;
        return $this;
    }
    
    /**
     * Any handling costs that are associated with this shipment.
     *
     * @param Money $HandlingCosts
     * return CommercialInvoice
     */
    public function setHandlingCosts(Money $handlingCosts)
    {
        $this->HandlingCosts = $handlingCosts;
        return $this;
    }
    
    /**
     * Free-form text.
     *
     * @param string $SpecialInstructions
     * return CommercialInvoice
     */
    public function setSpecialInstructions($specialInstructions)
    {
        $this->SpecialInstructions = $specialInstructions;
        return $this;
    }
    
    /**
     * Free-form text.
     *
     * @param string $DeclarationStatment
     * return CommercialInvoice
     */
    public function setDeclarationStatment($declarationStatment)
    {
        $this->DeclarationStatment = $declarationStatment;
        return $this;
    }
    
    /**
     * Free-form text.
     *
     * @param string $PaymentTerms
     * return CommercialInvoice
     */
    public function setPaymentTerms($paymentTerms)
    {
        $this->PaymentTerms = $paymentTerms;
        return $this;
    }
    
    /**
     * Test for the Commercial Invoice. Note that Sold is not a valid Purpose for a Proforma Invoice.
     *
     * @param PurposeOfShipmentType $Purpose
     * return CommercialInvoice
     */
    public function setPurpose(\FedEx\ShipService\SimpleType\PurposeOfShipmentType $purpose)
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
     * Name of the International Expert that completed the Commercial Invoice different from Sender.
     *
     * @param string $OriginatorName
     * return CommercialInvoice
     */
    public function setOriginatorName($originatorName)
    {
        $this->OriginatorName = $originatorName;
        return $this;
    }
    
    /**
     * Defines the terms of the sale.
     *
     * @param TermsOfSaleType $TermsOfSale
     * return CommercialInvoice
     */
    public function setTermsOfSale(\FedEx\ShipService\SimpleType\TermsOfSaleType $termsOfSale)
    {
        $this->TermsOfSale = $termsOfSale;
        return $this;
    }
    

    
}