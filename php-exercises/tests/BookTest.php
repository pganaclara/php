<?php

use PHPUnit\Framework\TestCase;

/**
 * Functional test for the class book.
 */
class BookTest extends TestCase {

  /**
   * {@inheritDoc}
   */
  public function setUp(): void {
    $this->Person = new Person("John Doe", 37, "Male");
    $this->book = new Book("O Hobbit", "J.R.R Tolkien", 300, $this->Person->getName());
    $this->book2 = new Book("O Senhor dos Aneis - O Retorno do Rei", "J.R.R Tolkien", 527, $this->Person->getName());
  }

  /**
   * Test of the constructor, verify if has the expected 4 parameters.
   */
  public function testConstructor() {
    $this->assertEquals("O Hobbit", $this->book->getTitle());
    $this->assertEquals("J.R.R Tolkien", $this->book->getAuthor());
    $this->assertEquals(300, $this->book->getTotalPages());
    $this->assertEquals("John Doe", $this->Person->getName());
  }

  /**
   * Test if the open method returns the book as open.
   */
  public function testOpen() {
    $this->assertEquals(TRUE, $this->book->open());
  }

  /**
   * Test if the close method returns the book as closed.
   */
  public function testClose() {
    $this->assertEquals(FALSE, $this->book->close());
  }

  /**
   * Test if the browse method returns the page expected.
   */
  public function testBrowse() {
    $this->assertEquals(0, $this->book->browse(301));
    $this->assertEquals(100, $this->book->browse(100));
    $this->assertEquals(0, $this->book->browse(-1));
  }

  /**
   * Test if the JumpForward method returns the book page ahead.
   */
  public function testJumpForward() {
    $this->book->setPage(300);
    $this->assertEquals("You reached the end of the book!", $this->book->jumpForward());
    $this->book2->setPage($this->book2->getTotalPages() - 5);
    $this->assertEquals(($this->book2->getPage() + 1), $this->book2->jumpForward());
  }

  /**
   * Test if the JumpBackward method returns the book page behind.
   */
  public function testJumpBackward() {
    $this->book->setPage(1);
    $this->assertEquals("You are in the first page of the book!", $this->book->jumpBackward());
    $this->book2->setPage(200);
    $this->assertEquals(($this->book2->getPage() - 1), $this->book2->jumpBackward());
  }

}
