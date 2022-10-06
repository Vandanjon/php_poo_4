<?php

require_once 'Vehicle.php';
require_once 'Car.php';

$homerCar = new Car('yellow', 2, 15);
$homerCar->setHasParkBrake(true);

try {
    echo $homerCar->start();
} catch (Exception $e) {
    echo $e->getMessage() . ', Turn off park brake';
    $homerCar->setHasParkBrake(false);
} finally {
    echo PHP_EOL . 'Ma voiture roule comme un donut';
}
?>

<br/>

<?php
try {
    echo $homerCar->start();
} catch (Exception $e) {
    echo $e->getMessage() . ', Turn off park brake';
    $homerCar->setHasParkBrake(false);
} finally {
    echo PHP_EOL . 'Ma voiture roule comme un donut';
}