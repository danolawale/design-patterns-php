<?php
namespace DesignPatterns\ObserverPattern;

Interface ObservableInterface
{
  public function add(ObserverInterface $observer);
  public function remove(ObserverInterface $observer);
  public function notify();
}
 ?>
