<?php

require '../../vendor/autoload.php';
require '../../sdk/autoload.php';

use Sdk\Auth\Token;
//use Sdk\Offer\OfferFilter;
use Sdk\Soap\Offer\Response\SubmitOfferPackageResponse;

// Récupération du token après avoir renseignés les champs username et password
if ( (isset($_POST["username"])) && (strlen(trim($_POST["username"])))) {
	//echo $_POST['token'];
	$token = Token::getInstance()->getTokenWithUsername($_POST['username'], $_POST['password']);
} else {
	echo "Veuillez renseigner le username et le password";
}

//echo "packageid : " . $_POST['packageid'];
if ( (isset($_POST["packageid"]))) {
	//echo $_POST['packageid'];
	$packageid;
} else {
	echo "Veuillez renseigner le packageid";
	$packageid = "";
}

$client = new \Sdk\ApiClient\CDSApiClient();
$offerPoint = $client->getOfferPoint();

//$pckid = OfferFilter::getInstance()->getPackageID($_POST['packageId']);

$getOfferPackageSubmissionResultResponse = $offerPoint->getOfferPackageSubmissionResult(/*43015252*//*$offerFilter*/$_POST['packageid']/*$pckid*/);

echo '<p>'.nl2br(htmlentities($getOfferPackageSubmissionResultResponse->getRawResponse() , ENT_QUOTES | ENT_IGNORE, "UTF-8")).'</p>';
