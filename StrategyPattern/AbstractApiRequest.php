<?php
namespace DesignPatterns\StrategyPattern;

require_once("QueryInterface.php");
require_once("CreateInterface.php");

abstract class AbstractApiRequest
{
  abstract function getQueryString(): string;

  public function query(): bool
  {}

  abstract function validateQueryResponse(array $result): bool;

  abstract function create(array $data): array;

  abstract function validateCreateResponse(array $result);

}
 ?>
