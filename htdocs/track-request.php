<?php
//remember to update /tests/credentials.php
require_once '../tests/bootstrap.php';

use     FedEx\TrackService,
        FedEx\TrackService\ComplexType,
        FedEx\TrackService\SimpleType;

$trackRequest = new ComplexType\TrackRequest();

$userCredential = new ComplexType\WebAuthenticationCredential();
$userCredential
    ->setKey(FEDEX_KEY)
    ->setPassword(FEDEX_PASSWORD);

$webAuthenticationDetail = new ComplexType\WebAuthenticationDetail();
$webAuthenticationDetail->setUserCredential($userCredential);

$trackRequest->setWebAuthenticationDetail($webAuthenticationDetail);

$clientDetail = new ComplexType\ClientDetail();
$clientDetail
    ->setAccountNumber(FEDEX_ACCOUNT_NUMBER)
    ->setMeterNumber(FEDEX_METER_NUMBER);

$trackRequest->setClientDetail($clientDetail);

$localization = new ComplexType\Localization();
$localization->setLanguageCode('EN');

$transactionDetail = new ComplexType\TransactionDetail();
$transactionDetail
    ->setCustomerTransactionId('Sample_V4')
    ->setLocalization($localization);

$trackRequest->setTransactionDetail($transactionDetail);

$version = new ComplexType\VersionId();
$version
    ->setServiceId('trck')
    ->setMajor(4)
    ->setIntermediate(0)
    ->setMinor(0);

$trackRequest->setVersion($version);

$packageIdentifier = new ComplexType\TrackPackageIdentifier();
$packageIdentifier->setValue('456311571189953');
$packageIdentifier->setType(new SimpleType\TrackIdentifierType(SimpleType\TrackIdentifierType::_TRACKING_NUMBER_OR_DOORTAG));

$trackRequest->setPackageIdentifier($packageIdentifier);


var_dump($trackRequest->toArray());

echo "<hr />";

$trackClient = new TrackService\Request();
var_dump($trackClient->getTrackReply($trackRequest));

var_dump($trackClient->getSoapClient()->__getFunctions());

