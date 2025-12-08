<?php
$libraryname = "City Library";
$books = array("math", "science", "history", "art", "literature");
echo "<h1>Welcome to $libraryName</h1>";
echo "<h2>Available Books:</h2>";
foreach ($books as $book) {
    echo "<p><strong>$book</strong>: ";

    if (strlen($book) % 2 == 0) {
        echo "Even length</p>";
    } else {
        echo "Odd length</p>";
    }
}



?>