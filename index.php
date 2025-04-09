<?php


require_once 'vendor/ autoload.php';

use kubinskiy\project\PizzaStore;
use kubinskiy\project\PizzaStoreOrders;

$premiumFabrik = new PizzaStoreOrders();
$premiumFabrik->orderPizza("Пицца цезарь");