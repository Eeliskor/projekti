<!DOCTYPE html>
<html>
<style>



</style>
<body>

<h1>Projektin hakeminen</h1>

<?php

$mysqli = new mysqli("localhost", "root", "", "tyoajat");

?>

<form action="hae2.php" method="post">
Anna haettavan projektin id: <input type="text" name="proid" /><br><br>
<input type="submit" name="submit" value="Hae"/>
</form>

</body>
</html>
