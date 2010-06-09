<?php
require '../tests/bootstrap.php';

use     FedEx\PackageMovementInformation,
        FedEx\PackageMovementInformation\ComplexType,
        FedEx\PackageMovementInformation\SimpleType;

$serviceAvailabilityRequest = new ComplexType\ServiceAvailabilityRequest();

//WebAuthenticationDetail
$userCredential = new ComplexType\WebAuthenticationCredential();
$userCredential
    ->setKey(FEDEX_KEY)
    ->setPassword(FEDEX_PASSWORD);

$webAuthenticationDetail = new ComplexType\WebAuthenticationDetail();
$webAuthenticationDetail->setUserCredential($userCredential);

$serviceAvailabilityRequest->setWebAuthenticationDetail($webAuthenticationDetail);

//ClientDetail
$clientDetail = new ComplexType\ClientDetail();
$clientDetail
    ->setAccountNumber(FEDEX_ACCOUNT_NUMBER)
    ->setMeterNumber(FEDEX_METER_NUMBER);

$serviceAvailabilityRequest->setClientDetail($clientDetail);

//TransactionDetail
$transactionDetail = new ComplexType\TransactionDetail();
$transactionDetail->setCustomerTransactionId('*** Service Availability Request v4 using PHP ***');

$serviceAvailabilityRequest->setTransactionDetail($transactionDetail);

//Version
$version = new ComplexType\VersionId();
$version
    ->setServiceId('pmis')
    ->setMajor(4)
    ->setIntermediate(0)
    ->setMinor(0);

$serviceAvailabilityRequest->setVersion($version);

//Origin
$origin = new ComplexType\Address();
$origin
    ->setPostalCode(77510)
    ->setCountryCode('US');

$serviceAvailabilityRequest->setOrigin($origin);

//Destination
$destination = new ComplexType\Address();
$destination
    ->setPostalCode(38110)
    ->setCountryCode('US');

$serviceAvailabilityRequest->setDestination($destination);

//ShipDate
$serviceAvailabilityRequest->setShipDate(date('Y-m-d'));

//CarrierCode
$serviceAvailabilityRequest->setCarrierCode(new SimpleType\CarrierCodeType(SimpleType\CarrierCodeType::_FDXE));

//Packaging
$serviceAvailabilityRequest->setPackaging(new SimpleType\PackagingType(SimpleType\PackagingType::_YOUR_PACKAGING));

$request = new PackageMovementInformation\Request();

var_dump($request->getServiceAvailabilityReply($serviceAvailabilityRequest));