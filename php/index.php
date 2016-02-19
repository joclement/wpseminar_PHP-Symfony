<html>
<head>
<title>
PHP-Dateien
</title>
</head>
<body>
Liste fuer alle PHP-Dateien, beim Druecken der Links werden die jeweiligen PHP-Dateien geladen und die Ausgabe gezeigt:
<br/>
<?php
foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator('.')) as $filename)
{
	//filter out "." and ".."
	if ($filename->isDir()) continue;

	echo "Show <a href=\"$filename\"> $filename </a> <br/>";
}
?>
</body>
</html>
