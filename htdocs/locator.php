<?php
require_once '../tests/bootstrap.php';

use     FedEx\LocatorService,
        FedEx\LocatorService\ComplexType,
        FedEx\LocatorService\SimpleType;

$locatorRequest = new ComplexType\FedExLocatorRequest();

$userCredential = new ComplexType\WebAuthenticationCredential();
$userCredential
    ->setKey(FEDEX_KEY)
    ->setPassword(FEDEX_PASSWORD);

$webAuthenticationDetail = new ComplexType\WebAuthenticationDetail();
$webAuthenticationDetail->setUserCredential($userCredential);

$locatorRequest->setWebAuthenticationDetail($webAuthenticationDetail);

$clientDetail = new ComplexType\ClientDetail();
$clientDetail
    ->setAccountNumber(FEDEX_ACCOUNT_NUMBER)
    ->setMeterNumber(FEDEX_METER_NUMBER);

$locatorRequest->setClientDetail($clientDetail);

$version = new ComplexType\VersionId();
$version
    ->setServiceId('dloc')
    ->setMajor(1)
    ->setIntermediate(0)
    ->setMinor(0);

$locatorRequest->setVersion($version);

$locatorRequest->setBeginningRecordIndex(1);
//$locatorRequest->setDropoffServicesDesired(array($dropOffServicesRequired));
//$locatorRequest->setMaximumMatchCount(2);
$locatorRequest->setDistanceUnits(new SimpleType\DistanceUnits(SimpleType\DistanceUnits::_MI));

$nearToAddress = new ComplexType\Address();
$nearToAddress
    ->setStreetLines(array('123 Software Lane'))
    ->setCity('Atlanta')
    ->setStateOrProvinceCode('GA')
    ->setPostalCode(30303);

$locatorRequest->setNearToAddress($nearToAddress);

$request = new LocatorService\Request();
$reply = $request->getFedExLocatorReply($locatorRequest);

var_dump($reply);
var_dump($request->getSoapClient()->__getFunctions());