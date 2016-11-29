<html>
  <head>
    <title>Lets traverse some XML now...</title>
  </head>  
  <body>
    
    
  <?php  
    
    // this IS PHP
    $xmlDoc = new DOMDocument();
    
    $xmlDoc->load("books.xml");
    
    $x = $xmlDoc->documentElement;
    
    print "hello";
    
    foreach ($x->childNodes as $item){
       // do this for every emement
      print $item->nodeName . " = " . $item->nodeValue . "<br/>"; 
    }  
  ?>  
    
  </body>  
</html>