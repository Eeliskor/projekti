<html>
<body>

<h1>Haetun projektin tiedot</h1>

<?php

$con = new mysqli("localhost","root","", "tyoajat");

if (!$con)

  {
    die('Could not connect: ' . mysql_error());
  }

if(isset($_POST["submit"]))
    {
        $iidee = $_POST["proid"];
   
        $sql = "SELECT * FROM projekti WHERE id='$iidee'";
        $result = $con->query($sql);
        //$stmt = $con->prepare($sql);
        //$stmt->execute();

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "ID: " . $row["id"]. "<br>" . "Projektin nimi: " . $row["projekti_nimi"]. "<br>" . "Tyontekijän nimi: " . $row["tyontekija"]. "<br>" . "Päivämäärä: " . $row["pvm"]. "<br>" . "Tehdyt työtunnit: " . $row["tunnit"]. "<br>";
            }
        } else {
            echo "0 results";
        }
    }

    function redirect($url)
{
	header('Location: '.$url);
	exit();
}

//redirect('aloitus.php'); //Palauttaa takaisin aloitussivulle

?>
<br></br>
<form action="aloitus.php">
<input type="submit" value="Takaisin"/>
</form>

</body>
</html>