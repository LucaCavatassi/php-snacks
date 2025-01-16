<?php
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

function filterBooks($books, $filters) {
    $filteredBooks = [];

    foreach ($books as $book) {
        // Controlla se il libro soddisfa i filtri
        $matches = true;

        // Filtra per autore
        if (isset($filters["author"]) && strtolower($filters["author"]) !== strtolower($book["author"])) {
            $matches = false;
        }
        
        // Filtra per anno minimo
        if (isset($filters["year_min"]) && $book["year"] < $filters["year_min"]) {
            $matches = false;
        }
        
        // Filtra per anno massimo
        if (isset($filters["year_max"]) && $book["year"] > $filters["year_max"]) {
            $matches = false;
        }
        
        // Filtra per numero massimo di pagine
        if (isset($filters["pages_max"]) && $book["pages"] > $filters["pages_max"]) {
            $matches = false;
        }
        
        // Filtra per genere
        if (isset($filters["genre"]) && strtolower($filters["genre"]) !== strtolower($book["genre"])) {
            $matches = false;
        }

        // Se il libro passa tutti i filtri, aggiungilo all'array
        if ($matches) {
            $filteredBooks[] = $book;
        }
    }

    return $filteredBooks;
}
var_dump(filterBooks($books, $filters));