<?php
namespace FedEx\ShipService\ComplexType;

/**
 * 
 *
 * @version     $Revision$
 * @author      Jeremy Dunn (www.jsdunn.info)
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class DeleteTagRequest
    extends AbstractComplexType
{
    protected $_name = 'DeleteTagRequest';

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return DeleteTagRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * Descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $ClientDetail
     * return DeleteTagRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return DeleteTagRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return DeleteTagRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Express Location Identifier.
     *
     * @param string $DispatchLocationId
     * return DeleteTagRequest
     */
    public function setDispatchLocationId($dispatchLocationId)
    {
        $this->DispatchLocationId = $dispatchLocationId;
        return $this;
    }
    
    /**
     * The date FedEx will attempt to pick up the shipment from the Sender.
     *
     * @param date $DispatchDate
     * return DeleteTagRequest
     */
    public function setDispatchDate($dispatchDate)
    {
        $this->DispatchDate = $dispatchDate;
        return $this;
    }
    
    /**
     * 
     *
     * @param Payment $Payment
     * return DeleteTagRequest
     */
    public function setPayment(Payment $payment)
    {
        $this->Payment = $payment;
        return $this;
    }
    
    /**
     * Also known as Pickup Confirmation Number or Dispatch Number
     *
     * @param string $ConfirmationNumber
     * return DeleteTagRequest
     */
    public function setConfirmationNumber($confirmationNumber)
    {
        $this->ConfirmationNumber = $confirmationNumber;
        return $this;
    }
    

    
}