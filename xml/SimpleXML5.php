<?php 
/** getting the node value of specific element */
$xml = simplexml_load_file("../books.xml") or die("Error: Cannot create object.");

echo "Book 1: " . $xml->book[0]->title . "\r\n";
echo "Book 2: " . $xml->book[1]->title . "\r\n";

/** looping through the nodes of the xml file, and getting the title, author, year, and price */
foreach($xml->children() as $books) {
    echo "Book Title: " . $books->title . ", ";
    echo "Book Author: " . $books->author . ", ";
    echo "Book Year: " . $books->year . ", ";
    echo "Book Price: " . $books->price . "\r\n";
}
?>