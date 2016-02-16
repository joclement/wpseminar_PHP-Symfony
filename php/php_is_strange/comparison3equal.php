<html>
  <head>
    <title>PHP ===</title>
  </head>
  <body>
  
    <p>Keine Fehlende Konsistenz bei === : <br/>
    <?php
    if (0 === Null && -1 > Null) {
      echo "<code> 0 === Null && -1 > Null </code> ist True";
    } else {
      echo "<code> 0 === Null && -1 > Null </code> ist False";
    }
    ?>
    <br/> Keine Fehlende Transitivitaet bei === : <br/>
    <?php
    if ("foo" === TRUE && "foo" === 0 && TRUE !== 0) {
      echo " <code> \"foo\" === TRUE && \"foo\" === 0 && TRUE != 0 </code> ist True";
    } else {
      echo " <code> \"foo\" === TRUE && \"foo\" === 0 && TRUE != 0 </code> ist False";
    }
    ?>
  </body>
</html>

