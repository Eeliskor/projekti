<html>
<body>
<?php

$con = new mysqli("localhost","root","", "tyoajat");

if (!$con)

  {
    die('Could not connect: ' . mysql_error());
  }

$sql = ("INSERT INTO projekti (id, projekti_nimi, tyontekija, pvm, tunnit) VALUES ('$_POST[proid]','$_POST[pronimi]','$_POST[tyonimi]','$_POST[pvm]','$_POST[tunnit]')");

$stmt = $con->prepare($sql);
$stmt->execute();

function redirect($url)
{
	header('Location: '.$url);
	exit();
}

redirect('lisaa1.php'); //Palauttaa takaisin aloitussivulle

?>

</body>
</html>