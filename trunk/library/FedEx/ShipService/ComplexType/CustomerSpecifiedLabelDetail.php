<?php
namespace FedEx\ShipService\ComplexType;

/**
 * Allows customer-specified control of label content.
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CustomerSpecifiedLabelDetail
    extends AbstractComplexType
{
    protected $_name = 'CustomerSpecifiedLabelDetail';

    /**
     * If omitted, no doc tab will be produced (i.e. default = former NONE type).
     *
     * @param DocTabContent $DocTabContent
     * return CustomerSpecifiedLabelDetail
     */
    public function setDocTabContent(DocTabContent $docTabContent)
    {
        $this->DocTabContent = $docTabContent;
        return $this;
    }
    
    /**
     * Defines any custom content to print on the label.
     *
     * @param CustomLabelDetail $CustomContent
     * return CustomerSpecifiedLabelDetail
     */
    public function setCustomContent(CustomLabelDetail $customContent)
    {
        $this->CustomContent = $customContent;
        return $this;
    }
    
    /**
     * Defines additional data to print in the Configurable portion of the label, this allows you to print the same type information on the label that can also be printed on the doc tab.
     *
     * @param array[ConfigurableLabelReferenceEntry] $ConfigurableReferenceEntries
     * return CustomerSpecifiedLabelDetail
     */
    public function setConfigurableReferenceEntries(array $configurableReferenceEntries)
    {
        $this->ConfigurableReferenceEntries = $configurableReferenceEntries;
        return $this;
    }
    
    /**
     * Data to exclude from printing on the label.
     *
     * @param array[LabelMaskableDataType] $MaskedData
     * return CustomerSpecifiedLabelDetail
     */
    public function setMaskedData(array $maskedData)
    {
        $this->MaskedData = $maskedData;
        return $this;
    }
    
    /**
     * 
     *
     * @param Localization $TermsAndConditionsLocalization
     * return CustomerSpecifiedLabelDetail
     */
    public function setTermsAndConditionsLocalization(Localization $termsAndConditionsLocalization)
    {
        $this->TermsAndConditionsLocalization = $termsAndConditionsLocalization;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[AdditionalLabelsDetail] $AdditionalLabels
     * return CustomerSpecifiedLabelDetail
     */
    public function setAdditionalLabels(array $additionalLabels)
    {
        $this->AdditionalLabels = $additionalLabels;
        return $this;
    }
    
    /**
     * 
     *
     * @param nonNegativeInteger $AirWaybillSuppressionCount
     * return CustomerSpecifiedLabelDetail
     */
    public function setAirWaybillSuppressionCount($airWaybillSuppressionCount)
    {
        $this->AirWaybillSuppressionCount = $airWaybillSuppressionCount;
        return $this;
    }
    

    
}