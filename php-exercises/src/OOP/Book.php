<?php

require_once 'Person.php';
require_once 'PublicationInterface.php';

/**
 *
 */
class Book implements PublicationInterface {
  // Place your code here:
  private $author;
  private $title;
  private $totalPages;
  private $page;
  private $open;
  private $reader;

  /**
   *
   */
  public function __construct($author, $title, $totalPages, $page, $open, $reader) {
    // Place your code here:
    $this->author = $author;
    $this->title = $title;
    $this->totalPages = $totalPages;
    $this->page = $page;
    $this->$open = $open;
    $this->reader = $reader;
  }

  /**
   *
   */
  public function details() {
    // Place your code here:
    echo $this->author;
    echo $this->title;
    echo $this->totalPages;
    echo $this->page;
    echo $this->open;
    echo $this->reader;
  }

  /**
     * Gets the value of title.
     *
     * @return mixed
     */
  public function getTitle() {
    // Place your code here:
    return $this->title;
  }

  /**
     * Gets the value of author.
     *
     * @return mixed
     */
  public function getAuthor() {
    // Place your code here:
    return $this->author;
  }

  /**
     * Gets the value of totalPages.
     *
     * @return mixed
     */
  public function getTotalPages() {
   // Place your code here:
   return $this->totalPages;
  }

  /**
     * Gets the value of page.
     *
     * @return mixed
     */
  public function getPage() {
    // Place your code here:
    return $this->page;
  }

  /**
     * Gets the value of reader.
     *
     * @return mixed
     */
  public function getReader() {
    // Place your code here:
    return $this->reader;
  }

  /**
     * Sets the value of author.
     *
     * @param mixed $author the author
     *
     * @return self
     */
  public function setAuthor($author) {
    // Place your code here:
    $this->author = $author;

    return $this;
  }

  /**
     * Sets the value of title.
     *
     * @param mixed $title the title
     *
     * @return self
     */
  public function setTitle($title) {
    // Place your code here:
    $this->title = $title;

    return $this;
  }

  /**
     * Sets the value of totalPages.
     *
     * @param mixed $totalPages the totalPages
     *
     * @return self
     */
  public function setTotalPages($totalPages) {
    // Place your code here:
    $this->totalPages = $totalPages;

    return $this;
  }

  /**
  * Sets the value of page.
  *
  * @param mixed $page the page
  *
  * @return self
  */
  public function setPage($page) {
    // Place your code here:
    $this->page = $page;

    return $this;
  }

  /**
   *
   */
  public function open() {
    // Place your code here:
    $this->open = true;
    return $this->open;
  }

  /**
   *
   */
  public function close() {
    // Place your code here:
    $this->open = false;
    return $this->open;
  }

  /**
   *
   */
  public function browse($page) {
    // Place your code here:
    $this->page = $page;

    return $this;
  }

  /**
   *
   */
  public function jumpToPageFoward() {
    // Place your code here:
    return ++$this->page;
  }

  /**
   *
   */
  public function jumpToPageBack() {
    // Place your code here:
    return --$this->page;
  }

}
