<?php

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$partnerClient = new Salesforce\PartnerClient();

print_r($partnerClient);
