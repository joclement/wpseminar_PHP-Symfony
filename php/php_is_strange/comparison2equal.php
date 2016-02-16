<html>
  <head>
    <title>PHP ==</title>
  </head>
  <body>
  
    <p>Fehlende Konsistenz bei == : <br/>
    <?php
    if (0 == Null && -1 > Null) {
      echo "<code> 0 == Null && -1 > Null </code> ist True";
    }
    ?>
    <br/> Fehlende Transitivitaet bei == : <br/>
    <?php
    if ("foo" == TRUE && "foo" == 0 && TRUE != 0) {
      echo " <code> \"foo\" == TRUE && \"foo\" == 0 && TRUE != 0 </code> ist True";
    }
    ?>
  </body>
</html>

