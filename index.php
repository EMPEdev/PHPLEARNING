<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>php</title>
</head>
<body>

<?php
echo "PHP";
echo "</br>";
$myname= "Patryk";
$age = "20";

$agereq = 18;

if($agereq >= 18){
	echo "Jesteś pełnoletni";
}
	else {
		echo "Nie jesteś pełnoletni";
	}

echo "</br> $myname </br>";


for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}

// Wyświetli: 1 2 3 4 5 6 7 8 9 10

echo "</br>";
function powitanie($name) {
    echo "Witaj, " . $name . "!";
}

powitanie("Patryk"); 

// Wyświetli: Witaj, Patryk !

?>

</body>
</html>