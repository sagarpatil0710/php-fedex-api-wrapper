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
class Contact
    extends AbstractComplexType
{
    protected $_name = 'Contact';

    /**
     * Name of person.
     *
     * @param string $PersonName
     * return Contact
     */
    public function setPersonName($personName)
    {
        $this->PersonName = $personName;
        return $this;
    }
    
    /**
     * Title used by contact.
     *
     * @param string $Title
     * return Contact
     */
    public function setTitle($title)
    {
        $this->Title = $title;
        return $this;
    }
    
    /**
     * Company name.
     *
     * @param string $CompanyName
     * return Contact
     */
    public function setCompanyName($companyName)
    {
        $this->CompanyName = $companyName;
        return $this;
    }
    
    /**
     * Phone number of contact.
     *
     * @param string $PhoneNumber
     * return Contact
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    
    /**
     * Phone extension of contact.
     *
     * @param string $PhoneExtension
     * return Contact
     */
    public function setPhoneExtension($phoneExtension)
    {
        $this->PhoneExtension = $phoneExtension;
        return $this;
    }
    
    /**
     * Pager number of contact.
     *
     * @param string $PagerNumber
     * return Contact
     */
    public function setPagerNumber($pagerNumber)
    {
        $this->PagerNumber = $pagerNumber;
        return $this;
    }
    
    /**
     * Fax number of contact.
     *
     * @param string $FaxNumber
     * return Contact
     */
    public function setFaxNumber($faxNumber)
    {
        $this->FaxNumber = $faxNumber;
        return $this;
    }
    
    /**
     * Email address of contact.
     *
     * @param string $EMailAddress
     * return Contact
     */
    public function setEMailAddress($eMailAddress)
    {
        $this->EMailAddress = $eMailAddress;
        return $this;
    }
    

    
}