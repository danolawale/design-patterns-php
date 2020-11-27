<?php
require_once('LazyBookParserProxy.php');

//A proxy pattern allows to create an object that acts as a proxy to the actual object
//needed to do a tast. This could be to add additional logic before the real object is called,
//or to delay or control how an object is called (as in this example), or security, caching etc.

$parser = new LazyBookParserProxy('Design Patterns in PHP');

$book = $parser->getBookName();

echo "Book Name is $book\n";

$totalPages = $parser->getNumPages();

echo "Total number of pages is $totalPages\n";

 ?>
