<?php

class Book {
    // Properties as Private
    private $title;
    private $availableCopies;

    // Constructor to initialize properties
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Get title
    public function getTitle() {
        return $this->title;
    }

    // Get available copies
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Borrow a book
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        }
        return false;
    }

    // Return a book
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    // Properties as Private
    private $name;

    // Constructor to initialize properties
    public function __construct($name) {
        $this->name = $name;
    }

    // Get name
    public function getName() {
        return $this->name;
    }

    // Borrow a book
    public function borrowBook(Book $book) {
        if ($book->borrowBook()) {
            echo $this->name . " borrowed '" . $book->getTitle() . "'.\n";
        } else {
            echo $this->name . " could not borrow '" . $book->getTitle() . "' as no copies are available.\n";
        }
    }

    // Return a book
    public function returnBook(Book $book) {
        $book->returnBook();
        echo $this->name . " returned '" . $book->getTitle() . "'.\n";
    }
}

// Create 2 books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Apply Borrow book method to each member
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Print Available Copies
echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . "\n";
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() . "\n";

