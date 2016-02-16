<?php
  
  $hello = 'Hello World!';
  $boolean_var = True;

  echo 'drucke den Wert der Variable hello: ';
  echo $hello;
  echo '</br>';
  echo 'drucke den Wert der boolean Variable: ';
  echo $boolean_var;
  echo '</br>';

  $hello = 4;

  echo 'Typ kann einfach so geaendert werden. Der Wert der variable hello ist jetzt: ';
  echo $hello;
  echo '</br>';
  echo 'Der Typ von hello ist jetzt: ';
  echo gettype($hello);
