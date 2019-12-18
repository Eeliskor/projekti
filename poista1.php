<!DOCTYPE html>
<html>
<style>



</style>
<body>

<h1>Projektin poistaminen</h1>

<?php

$mysqli = new mysqli("localhost", "root", "", "tyoajat");

?>

<form action="poista2.php" method="post">
Anna poistettavan projektin id: <input type="text" name="proid" /><br><br>
<input type="submit" name="submit" value="Poista"/>
</form>

</body>
</html>
