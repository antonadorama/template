<?php 

include_once("Sailthru_Client.php");
include_once("Sailthru_Client_Exception.php");
include_once("Sailthru_Util.php");

$api_key = '9536bb6314b60e2a46c4da44a501e463';
$api_secret = 'bcc816cfad1f662f59b28a48a65f3b0f';
//$sailthruClient = new Sailthru_Client($apiKey, $apiSecret);

$id = '5cf98cdf20122e5073184aa6';

$client = new Sailthru_Client($api_key, $api_secret);
try {

    // get user by Sailthru ID
    $fields = array(
        'keys' => 1,
        'vars' => 1,
        'activity' => 1
    );
    $response = $client->getUseBySid("cf98cdf20122e5073184aa6", $fields);
    // get user by Custom key
    $response = $client->getUserByKey("antony@adorama.com", 'email', $fields);
    // get last rate limit info
    $rate_limit_info = $client->getLastRateLimitInfo("user", "GET");
} catch (Sail_Client_Exception $e) {
    // deal with exception
}

?>