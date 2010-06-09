<?php
require '../tests/bootstrap.php';

use     FedEx\PackageMovementInformationService,
        FedEx\PackageMovementInformationService\ComplexType,
        FedEx\PackageMovementInformationService\SimpleType;

$postalCodeInquiryRequest = new ComplexType\PostalCodeInquiryRequest();

$userCredential = new ComplexType\WebAuthenticationCredential();
$userCredential
    ->setKey(FEDEX_KEY)
    ->setPassword(FEDEX_PASSWORD);

$webAuthenticationDetail = new ComplexType\WebAuthenticationDetail();
$webAuthenticationDetail->setUserCredential($userCredential);

$postalCodeInquiryRequest->setWebAuthenticationDetail($webAuthenticationDetail);

$clientDetail = new ComplexType\ClientDetail();
$clientDetail
    ->setAccountNumber(FEDEX_ACCOUNT_NUMBER)
    ->setMeterNumber(FEDEX_METER_NUMBER);

$postalCodeInquiryRequest->setClientDetail($clientDetail);

$transactionDetail = new ComplexType\TransactionDetail();
$transactionDetail->setCustomerTransactionId('WSVC_Postalcode');

$postalCodeInquiryRequest->setTransactionDetail($transactionDetail);

$version = new ComplexType\VersionId();
$version
    ->setServiceId('pmis')
    ->setMajor(4)
    ->setIntermediate(0)
    ->setMinor(0);

$postalCodeInquiryRequest->setVersion($version);

$postalCodeInquiryRequest->setCarrierCode(new SimpleType\CarrierCodeType(SimpleType\CarrierCodeType::_FDXE));

$postalCodeInquiryRequest->setPostalCode(73301);
$postalCodeInquiryRequest->setCountryCode('US');

$request = new PackageMovementInformation\Request();

var_dump($request->getPostalCodeInquiryReply($postalCodeInquiryRequest));