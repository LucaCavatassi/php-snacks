<?php
class Book {
    public $title;
    public $author;
    public $price;
    public $year;

    public function __construct($title, $author, $price, $year){
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        $this->year = $year;
    }

    public function getDetails() {
        return "Title: {$this->title}, Author: {$this->author}, Year: {$this->year}, Price: {$this->price}";
    }
}

class Library {
    private $books = [];

    public function addBook($book) {
        $this->books[] = $book;
    }

    public function removeBook($title) {
        $index = -1;
        
        // Cerca il libro nel array
        foreach ($this->books as $key => $book) {
            if ($book->title === $title) {
                $index = $key;
                break;
            }
        }

        // Se trovato e quindi non è -1, rimuovi il libro
        if ($index !== -1) {
            array_splice($this->books, $index, 1);
            echo "Book '{$title}' removed.";
        } else {
            echo "Book '{$title}' not found.";
        }
    }

    public function listBooks() {
        foreach ($this->books as $book) {
            echo $book->getDetails() . " ";
        }
    }
}
