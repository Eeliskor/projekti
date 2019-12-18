<!DOCTYPE html>
<html>
<style>



</style>
<body>

<h1>Projektin lisääminen</h1>

<?php

$mysqli = new mysqli("localhost", "root", "", "tyoajat");

?>

<form action="lisaa2.php" method="post">
Anna projektin id: <input type="text" name="proid" /><br><br>
Anna projektin nimi: <input type="text" name="pronimi" /><br><br>
Anna työntekijän nimi: <input type="text" name="tyonimi" /><br><br>
Anna pvm milloin työ tehty: <input type="text" name="pvm" /><br><br>
Anna työtunnit (h): <input type="text" name="tunnit" /><br><br>
<input type="submit" value="Lisää"/>
</form>

</body>
</html>
