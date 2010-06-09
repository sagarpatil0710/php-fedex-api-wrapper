<?php
require_once '../tests/bootstrap.php';

use     FedEx\CourierDispatchService,
        FedEx\CourierDispatchService\ComplexType,
        FedEx\CourierDispatchService\SimpleType;


$courierDispatchRequest = new ComplexType\CourierDispatchRequest();

$userCredential = new ComplexType\WebAuthenticationCredential();
$userCredential
    ->setKey(FEDEX_ACCOUNT_NUMBER)
    ->setPassword(FEDEX_PASSWORD);

$webAuthenticationDetail = new ComplexType\WebAuthenticationDetail();
$webAuthenticationDetail->setUserCredential($userCredential);

$courierDispatchRequest->setWebAuthenticationDetail($webAuthenticationDetail);

$courierDispatchRequest->setWebAuthenticationDetail($webAuthenticationDetail);

$courierDispatchService = new CourierDispatchService\Request();
var_dump($courierDispatchService->getSoapClient()->__getFunctions());