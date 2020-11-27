<?php

require_once('DependentClasses/AbstractView.php');
require_once('DependentClasses/LongView.php');
require_once('DependentClasses/ShortView.php');
require_once('NotPartOfThePattern/Artist.php');
require_once('NotPartOfThePattern/Book.php');
require_once('NonDependentClasses/ResourceInterface.php');
require_once('NonDependentClasses/ArtistResource.php');
require_once('NonDependentClasses/BookResource.php');

$view = new \BridgePattern\DependentClasses\LongView(
    new \BridgePattern\NonDependentClasses\ArtistResource(new \NotPartOfThePattern\Artist())
);

echo $view->show();

$view = new \BridgePattern\DependentClasses\ShortView(
    new \BridgePattern\NonDependentClasses\BookResource(new \NotPartOfThePattern\Book())
);

echo $view->show();