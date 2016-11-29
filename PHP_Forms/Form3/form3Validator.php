<?php

  //Retrieve string from post submission
  $author = $_POST['author'];
  $title = $_POST['title'];
  $genre = $_POST['genre'];
  $price = $_POST['price'];
  $publish_date = $_POST['publish_date'];
  $publisher = $_POST['publisher'];
  $desc = $_POST['desc'];

  // built XML elements
  $xml = new SimpleXMLElement('<catalog/>');
  $book = $xml->addChild('book');
  $book->addChild('author', $author);
  $book->addChild('title', $title);
  $book->addChild('genre', $genre);
  $book->addChild('price', $price);
  $publish = $book->addChild('publish');
  $publish->addChild('publisher', $publisher);
  $publish->addChild('publish_date', $publish_date);
  $book->addChild('description', $desc);

  // optional out-of-stock info
  if (!empty($_POST['out'])){
    if ($_POST['out'] == true){
      $book->addChild('outOfStock', 'true');
    }  
  }

  Header('Content-type: text/xml');
  print($xml->asXML());

?>