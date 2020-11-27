<?php
//same as OriginalClient but this uses a dependency injected OutputInterface to implement the adapter

//Instead of writing a new client, we could have just modified OriginalClient
class AdapterClient
    implements InputInterface
{
  private $_output;

  public function __construct(OutputInterface $output)
  {
    $this->_output = $output;
  }
  public function request()
  {
    $this->_output->request();
  }
}
 ?>
