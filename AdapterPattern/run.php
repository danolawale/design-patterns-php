<?php
require_once('InputClient.php');
require_once('AdapterClient.php');
require_once('OutputClient.php');

//What we had initially was OriginalClient and an InputInterface
//We were able to use the request method as defined in the InputInterface and implmented in OriginalClient;
$inputClient = new InputClient(); #no adapter
$inputClient->request();

//But now we want to use the specific request method but don't really want to change existing functionality
//So we introduced an adapter via the OutputInterface and the Adaptee class.
//Original client can now be modified (as in AdapterClient) whilst still calling the request method
//on the InputInterface which now calls the request method on the OutputInterface
$output = new AdapterClient(new OutputClient());
$output->request();
 ?>
