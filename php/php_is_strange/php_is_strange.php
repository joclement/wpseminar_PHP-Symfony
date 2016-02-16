<html>
  <head>
    <title>PHP-Logik</title>
  </head>
  <body>

  <p>
  In PHP werden Variablen automatisch bei Benutzung deklariert.<br/>
  <?php
    $a += 0;
    echo 'nicht initialisiertes <code> $a += 0 </code> ist: ' , $a;
  ?>
  </p>
  
  <p>Eher intuitiv nicht zu erwartende Additionen<br/>
  Es liegt einerseits an verschiedenen Typen, 
  dass sich Operatoren teilweise merkwuerdig verhalten.<br/>
  <?php
    $a = 'e';
    $b = 2;
    $c = $a + $b;
    echo "<code> '$a' + $b = $c </code>";
  ?>
  <br/>
  <?php
    $a = 'a';
    $b = 'b';
    $c = $a + $b;
  echo "<code> '$a' + '$b' = $c </code>";
  ?>
  </p>
  
  <p>
  Fehlende Konsistenz bei == : <br/>
  <?php
    if (0 == Null && -1 > Null) {
      echo "<code> 0 == Null && -1 > Null </code> ist True";
    }
  ?>
  <br/>
  Fehlende Transitivitaet bei == : <br/>
  <?php
    if ("foo" == TRUE && "foo" == 0 && TRUE != 0) {
      echo " <code> \"foo\" == TRUE && \"foo\" == 0 && TRUE != 0 </code>";
    }
  ?>
  <br/>
  <code> == </code> prueft naemlich im Gegensatz zu <code> === </code> nicht auf Typ Gleichheit
  </p>
  
  <?php
    #schwachsinnige Variablenbelegung
    $x = Array(); 
    $y = array(); 
    $x == $y; # is true
    $x = 1; 
    $X = 1; 
    $x == $X; # is true
  ?>

  <p>
  # und // gelten beide als 1-Zeile Komma Zeichen, was so auch eher ungewoehnlich ist, weil die meisten Sprachen sich genau einsaussuchen
  <code style=display:block;white-space:pre-wrap>
  # erlaubtes Komma Zeichen
  // erlaubtes Komma Zeichen
  </code>
  </p>
  <?php
    # mehrere Zeichen fuer Komma
    // auch Komma Zeichen
  ?>
  
  <p> 
  Es ist moeglich Default Values von Parametern an den Anfang der Parameterliste zu setzen.
  Das hat keinen Nutzen und kann zu unerwarteten Effekten fuehren.<br/>
  Eine solche Funktion koennte so aussehen:
  <code style=display:block;white-space:pre-wrap>
  function withDefaultValue($defaultvalue= "somevalue", $nodefaultvalue)
  {
    return "return the | $defaultvalue | and the | $nodefaultvalue |.";
  }
  </code>
  <?php
    function withDefaultValue($defaultvalue= "somevalue", $nodefaultvalue)
    {
      return "return the | $defaultvalue | and the | $nodefaultvalue |.";
    };
    $re1 = withDefaultValue("first Value","second Value");
    $re2 = withDefaultValue("first Value");
    echo "<code> withDefaultValue(\"first Value\",\"second Value\"); </code> := $re1 <br/>";
    echo "<code> withDefaultValue(\"first Value\"); </code> := $re2 <br/>";
  ?>
  </p>
  
  <p>
  <?php
    $x = "a";
    gettype($x);
    get_class($x);
    echo "gettype() und get_class() aehnliche Funktion, UnderScore nicht einheitlich";
  ?>
  </p>
  
  <?php
  #TODO ein weiteres Beispiel zu Arrays bringen, Vermischung von Array und Dict
  ?>
  
  <p>Und viele Weitere ...</p>
  
  </body>
</html>
