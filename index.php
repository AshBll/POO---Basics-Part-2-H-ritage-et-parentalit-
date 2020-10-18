<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
<?php
    require_once 'libraries/models/Vehicle.php';

    $bicycle = new Bicycle('blue', 1);
    $bicycle->forward();
    var_dump($bicycle);


    $car = new Car('green', 4, 'electric');
    $car->forward();
    var_dump($car);

    $truk = new Truk('red', 4, 'fuel', 10000);
    $truk->setCurrentSpeed(95);
    $truk->setLoading(3000);
    echo $truk->usedCapacity();
    echo "<br>" . "</br>";
    echo $truk->forward();
    echo '<br> Vitesse du camion : ' . $truk->getCurrentSpeed() . ' km/h' . '<br>';
    echo $truk->brake();
    echo '<br> Vitesse du camion : ' . $truk->getCurrentSpeed() . ' km/h' . '<br>';
    echo $truk->brake();

    $newTruk = new Truk('green', 1, 'fuel', 3000);
    $newTruk->setCurrentSpeed(2);
    $newTruk->setLoading(3000);
    echo $newTruk->usedCapacity();
    echo "<br>" . "</br>";
    echo $newTruk->forward();
    echo '<br> Vitesse du camion : ' . $newTruk->getCurrentSpeed() . ' km/h' . '<br>';
    echo $newTruk->brake();
    echo '<br> Vitesse du camion : ' . $newTruk->getCurrentSpeed() . ' km/h' . '<br>';
    echo $newTruk->brake();
    var_dump($newTruk)

?>
</body>
</html>