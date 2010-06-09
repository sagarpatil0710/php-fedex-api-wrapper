<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Format of shipping documents
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShippingDocumentFormat
    extends AbstractComplexType
{
    protected $_name = 'ShippingDocumentFormat';

    /**
     * Specifies how to create, organize, and return the document.
     *
     * @param array[ShippingDocumentDispositionDetail] $Dispositions
     * return ShippingDocumentFormat
     */
    public function setDispositions(array $dispositions)
    {
        $this->Dispositions = $dispositions;
        return $this;
    }
    
    /**
     * Specifies how far down the page to move the beginning of the image; allows for printing on letterhead and other pre-printed stock.
     *
     * @param LinearMeasure $TopOfPageOffset
     * return ShippingDocumentFormat
     */
    public function setTopOfPageOffset(LinearMeasure $topOfPageOffset)
    {
        $this->TopOfPageOffset = $topOfPageOffset;
        return $this;
    }
    
    /**
     * 
     *
     * @param ShippingDocumentImageType $ImageType
     * return ShippingDocumentFormat
     */
    public function setImageType(\FedEx\ShipService\SimpleType\ShippingDocumentImageType $imageType)
    {
        $this->ImageType = $imageType;
        return $this;
    }
    
    /**
     * 
     *
     * @param ShippingDocumentStockType $StockType
     * return ShippingDocumentFormat
     */
    public function setStockType(\FedEx\ShipService\SimpleType\ShippingDocumentStockType $stockType)
    {
        $this->StockType = $stockType;
        return $this;
    }
    
    /**
     * 
     *
     * @param boolean $ProvideInstructions
     * return ShippingDocumentFormat
     */
    public function setProvideInstructions($provideInstructions)
    {
        $this->ProvideInstructions = $provideInstructions;
        return $this;
    }
    

    
}