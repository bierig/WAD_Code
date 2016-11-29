<?php

/*
 * PHP SimpleXML
 * Loading a XML from a file, adding new elements and editing elements
 */

//get details from form
$author = $_POST["author"];
$title = $_POST["title"];
$genre = $_POST["genre"];
$price = $_POST["price"];


//check for file
if (file_exists('books.xml')) {
    //loads the xml and returns a simplexml object
    $xml = simplexml_load_file('books.xml');
    $newChild = $xml->addChild('book');
    $newChild->addChild('author', $author);
    $newChild->addChild('title', $title);
    $newChild->addChild('genre', $genre);
    $newChild->addChild('price',$price);

    //transforming the object in xml format
    $output = $xml->asXML();

    //save changes to xml file
    file_put_contents('/home/cabox/workspace/PHPXSL/books.xml', $xml->asXML());

} else {
    exit('Failed to open books.xml.');
}

 //prevent form redirect
 if(isset($_SERVER['HTTP_REFERER'])){
   header("Location: " . $_SERVER['HTTP_REFERER']);
 } else {
   echo "An Error";
 }

?>
