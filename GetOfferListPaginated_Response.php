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

if ( (isset($_POST["offerpagenumber"]))) {
	//echo $_POST['offerpagenumber'];
	$offerpagenumber; 
	//$token = Token::getInstance()->getTokenWithUsername($_POST['username'], $_POST['password']);
} else {
	echo "Veuillez renseigner offerpagenumber";
	$offerpagenumber = "";
}

$client = new \Sdk\ApiClient\CDSApiClient();
$offerPoint = $client->getOfferPoint();

$offerFilter = new \Sdk\Offer\OfferFilter();
$offerFilter->setPageNumber(1);

$getOfferListPaginatedResponse = $offerPoint->getOfferListPaginated($offerFilter);

echo '<p>'.nl2br(htmlentities($getOfferListPaginatedResponse->getRawResponse() , ENT_QUOTES | ENT_IGNORE, "UTF-8")).'</p>';