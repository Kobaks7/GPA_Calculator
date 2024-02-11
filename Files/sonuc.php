<?php

$ders1=(($_POST['vizeders1']*0.4) + ($_POST['finalders1'] * 0.6))/25 *$_POST['ders1kredi'];
$ders2=(($_POST['vizeders2']*0.4) + ($_POST['finalders2'] * 0.6))/25 *$_POST['ders2kredi'];
$ders3=(($_POST['vizeders3']*0.4) + ($_POST['finalders3'] * 0.6))/25 *$_POST['ders3kredi'];
$ders4=(($_POST['vizeders4']*0.4) + ($_POST['finalders4'] * 0.6))/25 *$_POST['ders4kredi'];
$ders5=(($_POST['vizeders5']*0.4) + ($_POST['finalders5'] * 0.6))/25 *$_POST['ders5kredi'];
$ders6=(($_POST['vizeders6']*0.4) + ($_POST['finalders6'] * 0.6))/25 *$_POST['ders6kredi'];
$ders7=(($_POST['vizeders7']*0.4) + ($_POST['finalders7'] * 0.6))/25 *$_POST['ders7kredi'];
$ders8=(($_POST['vizeders8']*0.4) + ($_POST['finalders8'] * 0.6))/25 *$_POST['ders8kredi'];
$ders9=(($_POST['vizeders9']*0.4) + ($_POST['finalders9'] * 0.6))/25 *$_POST['ders9kredi'];
$ders10=(($_POST['vizeders10']*0.4) + ($_POST['finalders10'] * 0.6))/25 *$_POST['ders10kredi'];

$toplamKredi=$_POST['ders1kredi']+$_POST['ders2kredi']+$_POST['ders3kredi']+$_POST['ders4kredi']+$_POST['ders5kredi']+$_POST['ders6kredi']+$_POST['ders7kredi']+$_POST['ders8kredi']+$_POST['ders9kredi']+$_POST['ders10kredi'];
$gano = ($ders1+$ders2+$ders3+$ders4+$ders5+$ders6+$ders7+$ders8+$ders9+$ders10)/$toplamKredi;
$ort = $gano*25;
echo "Ortalama(%):$ort";
echo "<br>Gano:$gano";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
		<a href="nothesaplama.php">Tekrar Hesaplamak İçin Tıklayınız</a>
</body>
</html>