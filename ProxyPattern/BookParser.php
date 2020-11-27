<?php
class BookParser
    implements BookParserInterface
{
  private $_book = null;
  private $_totalPages = null;

  public function __construct(string $book)
  {
    //expensive parsing - hypothetically

    $this->_book = $book;

    $this->_totalPages = $this->getIntroPages() + $this->getContentPages() + $this->getGlossaryPages();
  }

  public function getNumPages(): int
  {
    return $this->_totalPages;
  }

  private function getIntroPages(): int
  {
    return 20;
  }

  private function getContentPages(): int
  {
    return 500;
  }

  private function getGlossaryPages(): int
  {
    return 15;
  }
}
 ?>
