"#projekti" 
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

<form action="sivu2.php" method="post">
Anna projektin id: <input type="text" name="proid" /><br><br>
Anna projektin nimi: <input type="text" name="pronimi" /><br><br>
Anna työntekijän nimi: <input type="text" name="tyonimi" /><br><br>
Anna pvm milloin työ tehty: <input type="text" name="pvm" /><br><br>
Anna työtunnit (h): <input type="text" name="tunnit" /><br><br>
<input type="submit"/>
</form>

</body>
</html>
