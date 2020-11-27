<?php

class Invokable
{
  public function __invoke(string $string)
  {
    echo "$string\n";
  }
}

class InvokableTest
{
  public $_inv = null;
  public function __construct(Invokable $inv)
  {
    $this->_inv = $inv;
  }

  public function invokeString(string $string)
  {
    //return $this->_inv($string);
    if(is_null($this->_inv))
    {
      die('property cannot be null');
    }
    //var_dump(is_callable($this->_inv));
    $test = $this->_inv;
    $test($string);
  }
}

$inv = new Invokable;
var_dump($inv("Interesting stuff\n"));

$invTest = new InvokableTest($inv);
$invTest->invokeString('God is Love');
