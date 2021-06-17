<!DOCTYPE html>
<html>
  <?php
    session_start();
    if( isset($_SESSION['id'])==false ){
      header("location: index.php");
    }
  ?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Está logueado</title>
</head>
<body>
llegó
<?php 
echo $_SESSION['nombre'];
?>
</body>
</html>
