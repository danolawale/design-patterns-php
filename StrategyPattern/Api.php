<?php

namespace DesignPatterns\StrategyPattern;

require_once("CustomerApi.php");
require_once("Query.php");
require_once("Create.php");

$query = new Query;
$create = new Create;

$cust = new CustomerApi($query, $create);

var_dump($cust->query());

$data = [
  'item' => 'Money Item',
  'buyer' => 'James Maestro',
  'Amount' => 15
];

var_dump($cust->create($data));
