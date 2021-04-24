<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
$_SESSION["name"] = "Aditya";
$_SESSION["email"] = "banstola.aditya1@gmail.com";
echo $_SESSION["name"];
?>
</body>
</html>