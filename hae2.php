<html>
<style>

body {
  margin: 0;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 20%;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}
li a {
  display: block;
  color: #000;
  padding: 10px 20px;
  text-decoration: none;
  font-size: 20px;
  font-family: verdana;
}
li a.active {
  background-color: #30a6cf;
  color: white;
}
li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
form {
    font-family: verdana;
    font-size: 20px;
    background-color: #54c9f2;
    padding: 10px 10px;
}
h1{
    font-family: verdana;
    font-size: 35px;
    background-color: #54c9f2;
    padding: 10px 10px;
}
.button {
  background-color: white;
  border: 2px solid black;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  cursor: pointer;
}
.button:hover{
    background-color: #e2e2e3;
    border: 2px solid black;
    color: black;
}

</style>
<body>

<ul>
  <li><a href="aloitus.php">Aloitus</a></li>
  <li><a href="lisaa1.php">Lisää projekti</a></li>
  <li><a href="poista1.php">Poista projekti</a></li>
  <li><a class="active" href="hae1.php">Hae projektia</a></li>
</ul>

<div style="margin-left:20%; padding:1px 16px; height:1000px;">

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
                echo "<p style='font-family: verdana; font-size: 20px;'>" . "ID: " . $row["id"]. "<br>" . "Projektin nimi: " . $row["projekti_nimi"]. "<br>" . "Tyontekijän nimi: " . $row["tyontekija"]. "<br>" . "Päivämäärä: " . $row["pvm"]. "<br>" . "Tehdyt työtunnit: " . $row["tunnit"]. "<br>" . "</p>";
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
<form action="hae1.php">
<input type="submit" value="Takaisin" class="button"/>
</form>

</div>
</body>
</html>