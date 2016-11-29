<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">

  <head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>Simple Response - Favorite City</title>
  </head>

  <body>
  
    <h2>Catalog Entry Validator</h2>

    <?php
    
    //Retrieve string from post submission
    $author = $_POST['author'];
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $price = $_POST['price'];
    $publish_date = $_POST['publish_date'];
    $publisher = $_POST['publisher'];
    $desc = $_POST['desc'];
    
    echo "The book <b><i>$title</b></i>, written by <b><i>$author</b></i>, belongs to the the category of <b><i>$genre</b></i> 
    and costs <b><i>$price</b></i>. It was published by <b><i>$publisher</b></i> in <b><i>$publish_date</b></i>. 
    Here a short description:The book is described as: <b><i>$desc</b></i>";
    
    // Optional out-of-stock message
    if (!empty($_POST['out'])){
      if ($_POST['out'] == true){
        echo "<b><i>Note: The book is current out of stock!</b></i>";
      }  
    }
        
    ?>

  </body>
</html>