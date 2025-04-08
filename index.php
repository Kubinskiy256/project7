<?php


require_once 'vendor/ autoload.php';

use Kubinskiy\project\PizzaStore;
use Kubinskiy\project\PizzaStoreOrders;

$premiumFabrik = new PizzaStoreOrders();
$premiumFabrik->orderPizza("Пицца с сыром");