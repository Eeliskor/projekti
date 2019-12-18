<html>
<body>
<?php

//$mysqli = new mysqli("localhost", "root", "", "tyoajat");

$con = new mysqli("localhost","root","", "tyoajat");

if (!$con)

  {
    die('Could not connect: ' . mysql_error());
  }

$sql = ("INSERT INTO projekti (id, projekti_nimi, tyontekija, pvm, tunnit) VALUES ('$_POST[proid]','$_POST[pronimi]','$_POST[tyonimi]','$_POST[pvm]','$_POST[tunnit]')");

$stmt = $con->prepare($sql);
$stmt->execute();

echo "1 record added";
?>
</body>
</html>