<?php
//remember to update /tests/credentials.php
require_once '../tests/bootstrap.php';

use     FedEx\TrackService,
        FedEx\TrackService\ComplexType,
        FedEx\TrackService\SimpleType;

$trackNotificationRequest = new ComplexType\TrackNotificationRequest();


$userCredential = new ComplexType\WebAuthenticationCredential();
$userCredential
    ->setKey(FEDEX_KEY)
    ->setPassword(FEDEX_PASSWORD);

$webAuthenticationDetail = new ComplexType\WebAuthenticationDetail();
$webAuthenticationDetail->setUserCredential($userCredential);

$trackNotificationRequest->setWebAuthenticationDetail($webAuthenticationDetail);

$clientDetail = new ComplexType\ClientDetail();
$clientDetail
    ->setAccountNumber(FEDEX_ACCOUNT_NUMBER)
    ->setMeterNumber(FEDEX_METER_NUMBER);

$trackNotificationRequest->setClientDetail($clientDetail);

$version = new ComplexType\VersionId();
$version
    ->setServiceId('trck')
    ->setMajor(4)
    ->setIntermediate(0)
    ->setMinor(0);

$trackNotificationRequest->setVersion($version);

$trackNotificationRequest->setTrackingNumber('407198113592');

$trackNotificationRequest->setSenderContactName('Jeremy Dunn');
$trackNotificationRequest->setSenderEMailAddress('jeremy@memoryportraits.com');

$notificationDetail = new ComplexType\EMailNotificationDetail();

$emailRecipientLocalization1 = new ComplexType\Localization();
$emailRecipientLocalization1->setLanguageCode('EN');

$emailRecipient1 = new ComplexType\EMailNotificationRecipient();
$emailRecipient1->setEMailAddress('jeremy@memoryportraits.com');
$emailRecipient1->setNotifyOnShipment(true);
$emailRecipient1->setLocalization($emailRecipientLocalization1);
$emailRecipient1->setFormat(new SimpleType\EMailNotificationFormatType(SimpleType\EMailNotificationFormatType::_TEXT));

$notificationDetail->setRecipients(array($emailRecipient1));

$trackNotificationRequest->setNotificationDetail($notificationDetail);

var_dump($trackNotificationRequest->toArray());
echo "<hr />";

$trackClient = new TrackService\Request();
var_dump($trackClient->getSoapClient()->__getFunctions());
var_dump($trackClient->getSoapClient()->getTrackNotification($trackNotificationRequest->toArray()));

echo $trackClient->getSoapClient()->__getLastRequest();
