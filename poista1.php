<!DOCTYPE html>
<html>
<style>



</style>
<body>

<h1>My first PHP page</h1>

<?php

$mysqli = new mysqli("localhost", "root", "", "tyoajat");

?>

<?php

echo "Hello World!";

?>

<form action="poista2.php" method="post">
Anna poistettavan projektin id: <input type="text" name="proid" /><br><br>
<input type="submit" name="submit"/>
</form>

</body>
</html>
