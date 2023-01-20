<?php

include("../../conexion/conexion.php");

$user = $_POST['usuario'];
$pssword = $_POST['password'];

$sql = "SELECT id FROM users where login='$usuario' and clave='$pssword' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  #while($row = mysqli_fetch_assoc($result)) {
  #  echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  #}
  echo "<script>alert('Usuario Correcto ....!!!')</script>";
} else {
  echo "<script>alert('Usuario/Clave incorrecta....!!!')</script>";
}

mysqli_close($conn);



?>