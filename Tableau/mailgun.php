<?php 

# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-5yg6y2jl6q1hsuja8y8lbm--aquqnwc1');
$domain = 'e.adorama.com';
$queryString = array(
    'begin'        => 'Fri, 22 June 2018 09:00:00 -0000',
    'ascending'    => 'yes',
    'limit'        =>  25,
    'pretty'       => 'yes',
    'subject'      => 'test'
);

# Make the call to the client.
$result = $mgClient->get("$domain/events", $queryString);

var_dump($result);

?>