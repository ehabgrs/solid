<?php
namespace SOLID\SRP;

require_once('../autoload.php');



$bus = new Bus();

$driver = new Driver('Ehab', 34, 4545454,'Egypt' );
$route = new Route('ALEX','CAIRO',200);
$route2 = new Route('CAIRO','ALEX',200);

$bus->setNumberOfPassenegr('5');
$bus->setColor('blue');
$bus->setMaximumSpeed('120');
$bus->setDoors('4');

$bus->addRoute($route);
$bus->addRoute($route2);
$bus->setDriver($driver);

echo $bus->move();

//var_dump($bus);