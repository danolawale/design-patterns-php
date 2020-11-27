<?php
namespace DesignPatterns\StrategyPattern;

interface QueryInterface
{
  public function query(string $api, string $query): array;
}
 ?>
