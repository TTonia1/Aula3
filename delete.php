<?php
include 'db.php';
$id = $_GET['id'];
$sql = "DELETE FROM usuario WHERE id_crud ='$id'";
if($conn -> query($sql) === true){
    echo"Registro excluido";
}else{
    echo"Erro". $slq ."<br>".$conn -> error;
}
$conn ->close();
header("Location read.php");
exit();
?>