<!DOCTYPE html>
<html>
<body>

<?php
  $age = array("Peter"=>"35", "Ben"=>"37"); 
  //$names = array("Bob", "Sally");
  
  //echo "And the first name is " . $names[0];
  //echo "Age of Peter: " . $age["Peter"];  
  
  echo "Age as JSON: " . json_encode($age); 
?> 

</body>
</html>
