<?php

// namespace App\Wcs\Hello;
// namespace App;
require '../vendor/autoload.php';

use App\Wcs\Hello;


$Hello = new Hello();
echo $Hello->talk();

$SayHello = new \HelloWorld\SayHello();
echo $SayHello->world();



