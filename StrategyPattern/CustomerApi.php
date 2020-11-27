<?php
namespace DesignPatterns\StrategyPattern;

require_once('AbstractApiRequest.php');

class CustomerApi extends AbstractApiRequest
{
  public $_query;

  public function __construct(
      QueryInterface $query,
      CreateInterface $create)
  {
    $this->_query = $query;
    $this->_create = $create;
  }
  public function getQueryString(): string
  {
    return "\nSELECT ALL LADIES IN LOVE\n";
  }

  public function validateQueryResponse(array $result):bool
  {
    return true;
  }

  public function query(): bool
  {
    $result = $this->_query->query('Customer', $this->getQueryString());

    return $this->validateQueryResponse($result);
  }

  public function create(array $data = []): array
  {
    return $this->_create->create('Customer', $data);
  }

  public function validateCreateResponse(array $result)
  {
    return $result;
  }


}
 ?>
