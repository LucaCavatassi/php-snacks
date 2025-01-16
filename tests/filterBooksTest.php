<?php

use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/snack-23.php';
class FilterBooksTest extends TestCase
{
    public function testFilterBooksByYearMinAndGenre()
    {
        $books = [
            ["title" => "1984", "author" => "George Orwell", "year" => 1949, "genre" => "Dystopian", "pages" => 328],
            ["title" => "The Hobbit", "author" => "J.R.R. Tolkien", "year" => 1937, "genre" => "Fantasy", "pages" => 310],
            ["title" => "To Kill a Mockingbird", "author" => "Harper Lee", "year" => 1960, "genre" => "Classic", "pages" => 281],
            ["title" => "The Catcher in the Rye", "author" => "J.D. Salinger", "year" => 1951, "genre" => "Classic", "pages" => 277]
        ];
        
        $filters = [
            "year_min" => 1940,
            "genre" => "Classic"
        ];

        // La funzione da testare
        $filteredBooks = filterBooks($books, $filters);

        // Verifica che ci siano solo due libri con il genere 'Classic' e pubblicati dopo il 1940
        $this->assertCount(2, $filteredBooks);

        // Verifica che i titoli dei libri filtrati siano quelli attesi
        $this->assertEquals("To Kill a Mockingbird", $filteredBooks[0]["title"]);
        $this->assertEquals("The Catcher in the Rye", $filteredBooks[1]["title"]);
    }

    public function testFilterBooksByYearMax()
    {
        $books = [
            ["title" => "1984", "author" => "George Orwell", "year" => 1949, "genre" => "Dystopian", "pages" => 328],
            ["title" => "The Hobbit", "author" => "J.R.R. Tolkien", "year" => 1937, "genre" => "Fantasy", "pages" => 310],
            ["title" => "To Kill a Mockingbird", "author" => "Harper Lee", "year" => 1960, "genre" => "Classic", "pages" => 281],
            ["title" => "The Catcher in the Rye", "author" => "J.D. Salinger", "year" => 1951, "genre" => "Classic", "pages" => 277]
        ];

        $filters = [
            "year_max" => 1950
        ];

        // La funzione da testare
        $filteredBooks = filterBooks($books, $filters);

        // Verifica che ci siano solo 2 libri pubblicati prima del 1950
        $this->assertCount(2, $filteredBooks);

        // Verifica i titoli dei libri filtrati
        $this->assertEquals("The Hobbit", $filteredBooks[1]["title"]);
        $this->assertEquals("1984", $filteredBooks[0]["title"]);
    }

    public function testFilterBooksByPagesMax()
    {
        $books = [
            ["title" => "1984", "author" => "George Orwell", "year" => 1949, "genre" => "Dystopian", "pages" => 328],
            ["title" => "The Hobbit", "author" => "J.R.R. Tolkien", "year" => 1937, "genre" => "Fantasy", "pages" => 310],
            ["title" => "To Kill a Mockingbird", "author" => "Harper Lee", "year" => 1960, "genre" => "Classic", "pages" => 281],
            ["title" => "The Catcher in the Rye", "author" => "J.D. Salinger", "year" => 1951, "genre" => "Classic", "pages" => 277]
        ];

        $filters = [
            "pages_max" => 300
        ];

        // La funzione da testare
        $filteredBooks = filterBooks($books, $filters);

        // Verifica che ci siano 3 libri con meno di 300 pagine
        $this->assertCount(2, $filteredBooks);

        // Verifica i titoli dei libri filtrati
        $this->assertEquals("The Hobbit", $filteredBooks[1]["title"]);
        $this->assertEquals("To Kill a Mockingbird", $filteredBooks[2]["title"]);
        $this->assertEquals("The Catcher in the Rye", $filteredBooks[3]["title"]);
    }
}