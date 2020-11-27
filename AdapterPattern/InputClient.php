<?php
require_once('InputInterface.php');
class InputClient
  implements InputInterface
{
  public function request()
  {
    echo "Original request from InputInterface\n";
  }
}
 ?>
