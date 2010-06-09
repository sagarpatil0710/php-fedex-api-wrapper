<?php
require_once '../tests/bootstrap.php';

use     FedEx\UploadDocumentService,
        FedEx\UploadDocumentService\ComplexType,
        FedEx\UploadDocumentService\SimpleType;

$uploadDocumentsRequest = new ComplexType\UploadDocumentsRequest();

//WebAuthenticationDetail
$userCredential = new ComplexType\WebAuthenticationCredential();
$userCredential
    ->setKey(FEDEX_KEY)
    ->setPassword(FEDEX_PASSWORD);

$webAuthenticationDetail = new ComplexType\WebAuthenticationDetail();
$webAuthenticationDetail->setUserCredential($userCredential);

$uploadDocumentsRequest->setWebAuthenticationDetail($webAuthenticationDetail);

//ClientDetail
$clientDetail = new ComplexType\ClientDetail();
$clientDetail
    ->setAccountNumber(FEDEX_ACCOUNT_NUMBER)
    ->setMeterNumber(FEDEX_METER_NUMBER);

$uploadDocumentsRequest->setClientDetail($clientDetail);

//Version
$version = new ComplexType\VersionId();
$version
    ->setServiceId('cdus')
    ->setMajor(1)
    ->setIntermediate(1)
    ->setMinor(0);

$uploadDocumentsRequest->setVersion($version);

$uploadDocumentDetail = new ComplexType\UploadDocumentDetail();
$uploadDocumentDetail->setDocumentContent($content);

$uploadDocumentsRequest->setDocuments(array($uploadDocumentDetail));

var_dump($uploadDocumentsRequest->toArray());


$uploadDocumentRequest = new UploadDocumentService\Request();
var_dump($uploadDocumentRequest->getSoapClient()->__getFunctions());
var_dump($uploadDocumentRequest->getUploadDocumentsReply($uploadDocumentsRequest));

