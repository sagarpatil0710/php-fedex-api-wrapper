<?php
namespace FedEx\ShipService\ComplexType;

/**
 * 
            One or more document parts which make up a single logical document, such as
            multiple pages of a single form.
          
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShippingDocumentPart
    extends AbstractComplexType
{
    protected $_name = 'ShippingDocumentPart';

    /**
     * The one-origin position of this part within a document.
     *
     * @param positiveInteger $DocumentPartSequenceNumber
     * return ShippingDocumentPart
     */
    public function setDocumentPartSequenceNumber($documentPartSequenceNumber)
    {
        $this->DocumentPartSequenceNumber = $documentPartSequenceNumber;
        return $this;
    }
    
    /**
     * Graphic or printer commands for this image within a document.
     *
     * @param base64Binary $Image
     * return ShippingDocumentPart
     */
    public function setImage($image)
    {
        $this->Image = $image;
        return $this;
    }
    

    
}