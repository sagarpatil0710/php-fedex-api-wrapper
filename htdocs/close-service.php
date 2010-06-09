<?php
require_once '../tests/bootstrap.php';

use     FedEx\CloseService,
        FedEx\CloseService\ComplexType,
        FedEx\CloseService\SimpleType;


$groundCloseRequest = new ComplexType\GroundCloseRequest();

$userCredential = new ComplexType\WebAuthenticationCredential();
$userCredential
    ->setKey(FEDEX_KEY)
    ->setPassword(FEDEX_PASSWORD);

$webAuthenticationDetail = new ComplexType\WebAuthenticationDetail();
$webAuthenticationDetail->setUserCredential($userCredential);


$groundCloseRequest->setWebAuthenticationDetail($webAuthenticationDetail);



$closeService = new CloseService\Request();
var_dump($closeService->getSoapClient()->__getFunctions());

var_dump($groundCloseRequest->toArray());