<?php

require_once('car.php');
require_once('uberX.php');
require_once('uberPool.php');
require_once ('account.php');
require_once ('user.php');


$uberX = new UberX("AH424PM", new Account ("Edwin", "E123","ed@nose.com",456), "Chevrolet", "Spark");
$uberX->PrintDataCar();

echo "<br><br>";

$uberPool = new UberPool("AH4", new Account ("Alex","A456" ,"Alex@nose.com","123" ), "Dodge", "Attitude");
$uberPool-> PrintDataCar();

echo "<br><br>";

$user = new User ("Maria Peres","dasdasdas15", "Mperez@nose.com","123");
$user -> printDataUser();