<?php
require_once '../tests/bootstrap.php';

use     FedEx\ReturnTagService,
        FedEx\ReturnTagService\ComplexType,
        FedEx\ReturnTagService\SimpleType;

$expressTagAvailabilityRequest = new ComplexType\ExpressTagAvailabilityRequest();

$webAuthenticationDetail = new ComplexType\WebAuthenticationDetail();

$userCredential = new ComplexType\WebAuthenticationCredential();


$webAuthenticationDetail->setUserCredential($userCredential);

$expressTagAvailabilityRequest->setWebAuthenticationDetail($webAuthenticationDetail);

var_dump($expressTagAvailabilityRequest->toArray());

$returnTagService = new ReturnTagService\Request();

var_dump($returnTagService->getSoapClient()->__getFunctions());
//var_dump($returnTagService->getExpressTagAvailabilityReply($expressTagAvailabilityRequest));