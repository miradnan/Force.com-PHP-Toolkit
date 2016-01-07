Force.com Toolkit for PHP
=========================

This package is originally forked from [developerforce/Force.com-Toolkit-for-PHP](https://github.com/developerforce/Force.com-Toolkit-for-PHP).

It's just a refactored version of the above package to support PHP version > 5.4. It uses composers default PSR-4 Autoloading. All the class are separated into dedicated files to take advantage of namespaces and autoloading functionality in PHP frameworks. All the test cases are same as in the above package.


## Installation
```
composer require "miradnan/force.com-php-toolkit"
```
Or append to require in your composer.json
```
 "miradnan/force.com-php-toolkit": "dev-master"
```


## Usage
```php
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$SfClient = new Salesforce\PartnerClient();

$wsdlPath = $SfClient->getWsdlPath();

$wsdlFile = $wsdlPath . 'partner.wsdl.xml';

$SfConnection = $SfClient->createConnection($wsdlFile);

// write some cool code here...

```
