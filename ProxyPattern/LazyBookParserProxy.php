<?php

require_once('BookParserInterface.php');
require_once('BookParser.php');

class LazyBookParserProxy
    implements BookParserInterface
{
  /**
  * @var BookParser
  **/
  private $_bookParser = null;

  /**
  * @var String
  **/
  private $_book = null;

  public function __construct(string $book)
  {
    //could have injected an instance of the BookParser but we want
    // to instantiate it lazily (i.e when it's needed) because it's an
    //expensive operation - in this hypothertical example
    $this->_book = $book;
  }

  public function getNumPages(): int
  {
    if(!$this->_bookParser)
    {
      $this->_bookParser = new BookParser($this->_book);
      return $this->_bookParser->getNumPages();
    }
  }

  public function getBookName()
  {
    return $this->_book;
  }
}

 ?>
