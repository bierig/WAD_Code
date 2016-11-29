<?php

// xml string
$xml_string = "
<users>
  <user id='398'>
     <name>Foo</name>
     <email>foo@bar.com</email>
  </user>
  <user id='867'>
     <name>Foobar</name>
     <email>foobar@bar.com</email>
  </user>
</users>";

$xml = simplexml_load_string($xml_string);
foreach ($xml->user as $user){
  // access attribute
  echo $user['id'], '  ';
  // subnodes are accessed by -> operator
  echo $user->name, ' ';
  echo $user->email, '<br />';
}
  
?>