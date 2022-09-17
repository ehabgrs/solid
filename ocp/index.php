<?php
namespace SOLID\OCP;

require_once('../autoload.php');



$bus = new Bus();

$driver = new Driver('Ehab', 34, 4545454,'Egypt' );
$route = new Route('ALEX','CAIRO',200);
$route2 = new Route('CAIRO','ALEX',200);

$bus->setBusNumber('552');
$bus->setNumberOfPassenegr('5');
$bus->setColor('blue');
$bus->setMaximumSpeed('120');
$bus->setDoors(4);
$bus->addRoute($route);
$bus->addRoute($route2);
$bus->setDriver($driver);
$bus->setMovement(new Move_on_the_roads());

$ship = new Ship();
$ship->setMovement(new Move_sailing());

$car = new Car();
$car->setMovement(new Move_on_the_roads());

$trip = new Trip($car,'h2258',200.50, 60);

echo $trip->move();

//var_dump($bus);