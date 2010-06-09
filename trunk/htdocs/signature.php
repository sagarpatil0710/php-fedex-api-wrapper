<?php
require_once '../tests/bootstrap.php';

use     FedEx\TrackService,
        FedEx\TrackService\ComplexType,
        FedEx\TrackService\SimpleType;

$signatureProofRequest = new ComplexType\SignatureProofOfDeliveryLetterRequest();

$userCredential = new ComplexType\WebAuthenticationCredential();
$userCredential
    ->setKey(FEDEX_KEY)
    ->setPassword(FEDEX_PASSWORD);

$webAuthenticationDetail = new ComplexType\WebAuthenticationDetail();
$webAuthenticationDetail->setUserCredential($userCredential);

$signatureProofRequest->setWebAuthenticationDetail($webAuthenticationDetail);

$clientDetail = new ComplexType\ClientDetail();
$clientDetail
    ->setAccountNumber(FEDEX_ACCOUNT_NUMBER)
    ->setMeterNumber(FEDEX_METER_NUMBER);

$signatureProofRequest->setClientDetail($clientDetail);

$version = new ComplexType\VersionId();
$version
    ->setServiceId('trck')
    ->setMajor(4)
    ->setMinor(0)
    ->setIntermediate(0);

$signatureProofRequest->setVersion($version);

$letterFormat = new SimpleType\SignatureProofOfDeliveryImageType(SimpleType\SignatureProofOfDeliveryImageType::_PDF);

$signatureProofRequest->setLetterFormat($letterFormat);

$qualifiedTrackingNumber = new ComplexType\QualifiedTrackingNumber();

$signatureProofRequest->setQualifiedTrackingNumber($qualifiedTrackingNumber);


var_dump($signatureProofRequest->toArray());