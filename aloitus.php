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
p {
    font-family: verdana;
    font-size: 20px;
}
h1{
    font-family: verdana;
    font-size: 35px;
}

</style>
<body>

<ul>
  <li><a class="active" href="aloitus.php">Aloitus</a></li>
  <li><a href="lisaa1.php">Lisää projekti</a></li>
  <li><a href="poista1.php">Poista projekti</a></li>
  <li><a href="hae1.php">Hae projektia</a></li>
</ul>

<div style="margin-left:20%;padding:1px 16px;height:1000px;">

<h1>Aloitussivu</h1>

<br>
<p>Tämä on nettisivu, jossa käyttäjä voi hallita työaikoja. Käyttäjä voi lisätä, poistaa, tai hakea projekteja.<p>
<p>Vasemmassa laidassa on navigation bar, josta voi valita eri sivuja.</p>

</div>

<?php



?>

</body>
</html>