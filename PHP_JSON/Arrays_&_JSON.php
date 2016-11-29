<!DOCTYPE html>
<html>
<body>

  <?php
  $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
  echo "Peter is " . $age['Peter'] . " years old.";
  echo "<br>";
  echo "Age as JSON: " . json_encode($age);
  
  ?> 
 
</body>
</html>