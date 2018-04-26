<?php
/**
 * Display a table of books read.
 *
 * @package jhalabi
 */

class BooksRead {
  public $date;
  public $title;
  public $author;
  public $notes;
  public $recommended;
}

function jhalabi_get_books_read( $year ) {
  $row = 'books_read_in_' . $year;

  // If there are no books listed for this year, return nothing.
  if ( ! have_rows( $row ) ) { return false; }

  // Otherwise, collect the information for each book.
  $books = array();

  // Iterate over the rows of books read.
  while ( have_rows( $row ) ) {
    the_row();

    $book = new BooksRead;

    $book->date = get_sub_field('date');
    $book->title = get_sub_field('title');
    $book->author = get_sub_field('author');
    $book->notes = get_sub_field('notes');
    $book->recommended = get_sub_field('recommended');

    $books[] = $book;
  }

  return $books;
}
