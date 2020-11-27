<?php
//this is the adaptee
require_once('OutputInterface.php');
class OutputClient
    implements OutputInterface
{
  public function request()
  {
    echo "Requesting from Output Interface - InputInterface->OutputInterface\n";
  }
}
 ?>
