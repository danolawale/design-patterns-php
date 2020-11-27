<?php
namespace DesignPatterns\StrategyPattern;

class Query implements QueryInterface
{
  public function query(string $api, string $query): array
  {
    echo "\n$api successfully queried as $query\n";
    return [
      'message' => "$api successfully queried as $query"
    ];
  }
}
 ?>
