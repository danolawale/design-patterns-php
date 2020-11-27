<?php
namespace DesignPatterns\StrategyPattern;

interface CreateInterface
{
  public function create(string $api, array $data): array;
}
 ?>
