<?php
namespace DesignPatterns\StrategyPattern;

class Create implements CreateInterface
{
  public function create(string $api, array $data = []): array
  {
    echo "\nNew $api successfuly created\n";

    print_r($data);

    return [
      'message' => "New $api successfuly created"
    ];

  }
}
 ?>
