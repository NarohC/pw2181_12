
<?php
	$p1 = $_GET["parametro1"];
	for ($i=0; $i < 10; $i++) { 
		# code...
		print("Hola Prros PHP ".$i."<br>");
	}
?>
<html>
<head>
	<title>Document</title>
</head>
<body>
	<?php print($p1) ?>
</body>
</html>