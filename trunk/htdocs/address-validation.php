<?php

require_once '../tests/bootstrap.php';

use     FedEx\AddressValidationService,
        FedEx\AddressValidationService\ComplexType,
        FedEx\AddressValidationService\SimpleType;

$addressValidationRequest = new ComplexType\AddressValidationRequest();

$userCredential = new ComplexType\WebAuthenticationCredential();
$userCredential
    ->setKey(FEDEX_KEY)
    ->setPassword(FEDEX_PASSWORD);

$webAuthenticationDetail = new ComplexType\WebAuthenticationDetail();
$webAuthenticationDetail->setUserCredential($userCredential);

$addressValidationRequest->setWebAuthenticationDetail($webAuthenticationDetail);

$clientDetail = new ComplexType\ClientDetail();
$clientDetail
    ->setAccountNumber(FEDEX_ACCOUNT_NUMBER)
    ->setMeterNumber(FEDEX_METER_NUMBER);

$addressValidationRequest->setClientDetail($clientDetail);

$transactionDetail = new ComplexType\TransactionDetail();
$transactionDetail->setCustomerTransactionId('WSVC_addressvalidation');

$addressValidationRequest->setTransactionDetail($transactionDetail);

$version = new ComplexType\VersionId();
$version
    ->setServiceId('aval')
    ->setMajor(2)
    ->setIntermediate(0)
    ->setMinor(0);

$addressValidationRequest->setVersion($version);

$addressValidationRequest->setRequestTimestamp(date('c'));

$options = new ComplexType\AddressValidationOptions();
$options
    ->setVerifyAddresses(true)
    ->setCheckResidentialStatus(true)
    ->setMaximumNumberOfMatches(10)
    ->setStreetAccuracy(new SimpleType\AddressValidationAccuracyType(SimpleType\AddressValidationAccuracyType::_EXACT))
    ->setDirectionalAccuracy(new SimpleType\AddressValidationAccuracyType(SimpleType\AddressValidationAccuracyType::_EXACT))
    ->setCompanyNameAccuracy(new SimpleType\AddressValidationAccuracyType(SimpleType\AddressValidationAccuracyType::_EXACT))
    ->setConvertToUpperCase(true)
    ->setRecognizeAlternateCityNames(true)
    ->setReturnParsedElements(true);

$addressValidationRequest->setOptions($options);

$address = new ComplexType\Address();
$address
    ->setStreetLines(array('600 N Weinbach Ave'))
    ->setCity('Evansville')
    ->setPostalCode(47711)
    ->setStateOrProvinceCode('IN')
    ->setCountryCode('US');

$addressToValidate = new ComplexType\AddressToValidate();
$addressToValidate
    ->setAddressId('address id 1')
    ->setCompanyName('Memory Portraits')
    ->setAddress($address);

$addressValidationRequest->setAddressesToValidate(array($addressToValidate));


$client = new AddressValidationService\Request();
var_dump($client->getAddressValidationReply($addressValidationRequest));