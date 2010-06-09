<?php
require_once '../tests/bootstrap.php';

use     FedEx\ShipService,
        FedEx\ShipService\ComplexType,
        FedEx\ShipService\SimpleType;

$processShipmentRequest = new ComplexType\ProcessShipmentRequest();

//WebAuthenticationDetail

$userCredential = new ComplexType\WebAuthenticationCredential();
$userCredential
    ->setKey(FEDEX_KEY)
    ->setPassword(FEDEX_PASSWORD);

$webAuthenticationDetail = new ComplexType\WebAuthenticationDetail();
$webAuthenticationDetail->setUserCredential($userCredential);

$processShipmentRequest->setWebAuthenticationDetail($webAuthenticationDetail);

//ClientDetail

$clientDetail = new ComplexType\ClientDetail();
$clientDetail
    ->setAccountNumber(FEDEX_ACCOUNT_NUMBER)
    ->setMeterNumber(FEDEX_METER_NUMBER);

$processShipmentRequest->setClientDetail($clientDetail);

//TransactionDetail
$transactionDetail = new ComplexType\TransactionDetail();
$transactionDetail
    ->setCustomerTransactionId('TC02_USUS_E01011_DOM_Exp_POS');

$processShipmentRequest->setTransactionDetail($transactionDetail);

//Version
$version = new ComplexType\VersionId();
$version
    ->setServiceId('ship')
    ->setMajor(8)
    ->setIntermediate(0)
    ->setMinor(0);

$processShipmentRequest->setVersion($version);

$holdAddress = new ComplexType\Address();
$holdAddress
    ->setStreetLines(array('321 Ground Rd', '23 Fl. Room 301'))
    ->setCity('New York')
    ->setStateOrProvinceCode('NY')
    ->setPostalCode(10042);

$holdAtLocationDetail = new ComplexType\HoldAtLocationDetail();
$holdAtLocationDetail
    ->setPhoneNumber('812-423-6389')
    ->setAddress($holdAddress);

//RequestedShipment
$requestedShipment = new ComplexType\RequestedShipment();

$requestedShipment
    ->setShipTimestamp(strtotime("11 June 2010"))
    ->setDropoffType(new SimpleType\DropoffType(SimpleType\DropoffType::_REGULAR_PICKUP))
    ->setServiceType(new SimpleType\ServiceType(SimpleType\ServiceType::_FEDEX_GROUND))
    ->setPackagingType(new SimpleType\PackagingType(SimpleType\PackagingType::_YOUR_PACKAGING));

$totalWeight = new ComplexType\Weight();
$totalWeight
    ->setUnits(new SimpleType\WeightUnits(SimpleType\WeightUnits::_LB))
    ->setValue(20);

$requestedShipment->setTotalWeight($totalWeight);

$shipperContact = new ComplexType\Contact();
$shipperContact
    ->setCompanyName('Memory Portraits')
    ->setPhoneNumber('812 423-6389');

$shipperAddress = new ComplexType\Address();
$shipperAddress
    ->setStreetLines(array('600 N Weinbach Ave', 'Suite 110'))
    ->setCity('Evansville')
    ->setStateOrProvinceCode('IN')
    ->setPostalCode('47711')
    ->setCountryCode('US');

$shipper = new ComplexType\Party();
$shipper
    ->setAccountNumber(FEDEX_ACCOUNT_NUMBER)
    ->setContact($shipperContact)
    ->setAddress($shipperAddress);

$requestedShipment->setShipper($shipper);

$recipientContact = new ComplexType\Contact();
$recipientContact
    ->setPersonName('Contact Name')
    ->setPhoneNumber('1234567890');

$recipientAddress = new ComplexType\Address();
$recipientAddress
    ->setStreetLines(array('123 Software Lane'))
    ->setCity('Atlanta')
    ->setStateOrProvinceCode('GA')
    ->setPostalCode('30303')
    ->setCountryCode('US');

$recipient = new ComplexType\Party();
$recipient
    ->setAccountNumber('214877600')
    ->setContact($recipientContact)
    ->setAddress($recipientAddress);

$requestedShipment->setRecipient($recipient);

$payor = new ComplexType\Payor();
$payor
    ->setAccountNumber(FEDEX_ACCOUNT_NUMBER)
    ->setCountryCode('US');

$shippingChargesPayment = new ComplexType\Payment();
$shippingChargesPayment
    ->setPaymentType(new SimpleType\PaymentType(SimpleType\PaymentType::_SENDER))
    ->setPayor($payor);

$requestedShipment->setShippingChargesPayment($shippingChargesPayment);

$labelSpecification = new ComplexType\LabelSpecification();
$labelSpecification
    ->setLabelFormatType(new SimpleType\LabelFormatType(SimpleType\LabelFormatType::_COMMON2D))
    ->setImageType(new SimpleType\ShippingDocumentImageType(\FedEx\RateService\SimpleType\ShippingDocumentImageType::_PNG))
    ->setLabelStockType(new SimpleType\LabelStockType(SimpleType\LabelStockType::_PAPER_4X6));

$requestedShipment->setLabelSpecification($labelSpecification);

$requestedShipment->setRateRequestTypes(array(new SimpleType\RateRequestType(SimpleType\RateRequestType::_ACCOUNT)));
$requestedShipment->setPackageCount(1);
$requestedShipment->setPackageDetail(new SimpleType\RequestedPackageDetailType(SimpleType\RequestedPackageDetailType::_INDIVIDUAL_PACKAGES));

$dimensions = new ComplexType\Dimensions();
$dimensions
    ->setHeight(4)
    ->setLength(27)
    ->setWidth(12)
    ->setUnits(new SimpleType\LinearUnits(SimpleType\LinearUnits::_IN));

$contentRecords = new ComplexType\ContentRecord();
$contentRecords
    ->setPartNumber('123445')
    ->setItemNumber('kjdjalsro1262739827')
    ->setReceivedQuantity('12')
    ->setDescription('ContentDescription');

$requestedPackageLineItems = new ComplexType\RequestedPackageLineItem();
$requestedPackageLineItems
    ->setSequenceNumber('1')
    ->setWeight($totalWeight)
    //->setDimensions($dimensions)
    ->setContentRecords(array($contentRecords));

$requestedShipment->setRequestedPackageLineItems(array($requestedPackageLineItems));

$processShipmentRequest->setRequestedShipment($requestedShipment);

var_dump($processShipmentRequest->toArray());

echo "<hr />";

$shipmentRequest = new ShipService\Request();
$reply = $shipmentRequest->getProcessShipmentReply($processShipmentRequest);

var_dump($reply);

//$fh = fopen("/mnt/NetBeansProjects/label.png", "w");
//fwrite($fh, $reply->CompletedShipmentDetail->CompletedPackageDetails->Label->Parts->Image);
//fclose($fh);

$file = new SplFileObject("/mnt/NetBeansProjects/label.png", "w");
$file->fwrite($reply->CompletedShipmentDetail->CompletedPackageDetails->Label->Parts->Image);
echo $reply->CompletedShipmentDetail->CompletedPackageDetails->Label->Parts->Image;
