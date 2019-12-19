<html>
<body>
<?php

$con = new mysqli("localhost","root","", "tyoajat");

if (!$con)

  {
    die('Could not connect: ' . mysql_error());
  }

if(isset($_POST["submit"]))
    {
        $iidee = $_POST["proid"];
   
        $sql = "DELETE FROM projekti WHERE id='$iidee'";
        $stmt = $con->prepare($sql);
        $stmt->execute();
    }

function redirect($url)
{
	header('Location: '.$url);
	exit();
}

redirect('poista1.php'); //Palauttaa takaisin aloitussivulle

?>

</body>
</html>