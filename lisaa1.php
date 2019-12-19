<!DOCTYPE html>
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
  padding: 8px 16px;
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
}
h1{
    font-family: verdana;
    font-size: 35px;
}
.button {
  background-color: #30a6cf;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

</style>
<body>

<?php

$mysqli = new mysqli("localhost", "root", "", "tyoajat");

?>

<ul>
  <li><a href="aloitus.php">Aloitus</a></li>
  <li><a class="active" href="lisaa1.php">Lisää projekti</a></li>
  <li><a href="poista1.php">Poista projekti</a></li>
  <li><a href="hae1.php">Hae projektia</a></li>
</ul>

<div style="margin-left:20%; padding:1px 16px; height:1000px;">

<h1>Projektin lisääminen</h1>

<form action="lisaa2.php" method="post">
Anna projektin id: <input type="text" name="proid" /><br><br>
Anna projektin nimi: <input type="text" name="pronimi" /><br><br>
Anna työntekijän nimi: <input type="text" name="tyonimi" /><br><br>
Anna pvm milloin työ tehty: <input type="text" name="pvm" /><br><br>
Anna työtunnit (h): <input type="text" name="tunnit" /><br><br>
<input type="submit" value="Lisää" class="button"/>
</form>

<br></br>
<form action="aloitus.php">
<input type="submit" value="Takaisin" class="button"/>
</form>

</div>
</body>
</html>
