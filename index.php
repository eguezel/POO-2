<?php

require_once 'Truck.php';

// Instantiation of trucks
$littleTruck = new Truck('red', 2, 'electric', 150);
$classicTruck = new Truck('blue', 3, 'fuel', 300);

// Move trucks
echo $classicTruck->forward();
echo $classicTruck->brake();
echo $classicTruck->checkStorage();

echo $littleTruck->forward();
echo $littleTruck->brake();
echo $littleTruck->checkStorage();