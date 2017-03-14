<?php

require '../../vendor/autoload.php';
require '../../sdk/autoload.php';

use Sdk\Auth\Token;
use Sdk\Soap\Offer\Response\SubmitOfferPackageResponse;

// Récupération du token après avoir renseignés les champs username et password
if ( (isset($_POST["username"])) && (strlen(trim($_POST["username"])))) {
	//echo $_POST['token'];
	$token = Token::getInstance()->getTokenWithUsername($_POST['username'], $_POST['password']);
} else {
	echo "Veuillez renseigner le username et le password";
}

if ( (isset($_POST["zipfile"]))) {
	//echo $_POST['zipfile'];
	$zipfile;
} else {
	echo "Veuillez renseigner le zipfile";
}

$client = new \Sdk\ApiClient\CDSApiClient();
$offerPoint = $client->getOfferPoint();

$submitOfferPackageResponse = $offerPoint->submitOfferPackage("");

echo '<p>'.nl2br(htmlentities($submitOfferPackageResponse->getRawResponse() , ENT_QUOTES | ENT_IGNORE, "UTF-8")).'</p>';