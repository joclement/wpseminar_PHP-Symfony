<html>
  <head>
    <title>PHP arrays and dictionaries</title>
  </head>
  <body>

    <?php

      $ary1 = array(1,2,3,4,5,6);
      echo 'Ausgabe des Inhalts von ary1 mit print_r, Stelle => Wert: ';
      print_r($ary1);
      echo '<br/>';
      echo 'Ausgabe des Inhalts von ary1 mit var_dump, Stelle => Wert: ';
      var_dump($ary1);
      echo '<br/>';

      $ary2 = array(
        1 => "a",
        "1" => "b",
        6 => "c",
        6.5 => "d",
        true => "e",
        "f",
      );
      echo 'Ausgabe des Inhalts von ary2 mit var_dump, Schluessel => Wert: ';
      var_dump($ary2);
      echo '<br/>';

      echo 'Ausgabe des Inhalts von ary2 mit print_r, Schluessel => Wert: ';
      print_r($ary2);
      echo '<br/>';

    ?>

  </body>
</html>
