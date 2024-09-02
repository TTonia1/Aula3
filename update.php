<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
     <form method="POST" action= "update.php">
        <label for="nome"> Nome:</label>
        <input type="text" name="nome" required>
        <label for="email">Email novo:</label>
        <input type="email" name="email" required>
        <label for="email">Email antigo:</label>
        <input type="email" name="email_antigo" required>
        <input type="submit" value="Enviar">
     </form>
</body>
</html>

<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = $_POST['nome'];
    $email= $_POST['email'];
    $email_antigo = $_POST['email_antigo'];
    $sql = "UPDATE usuario SET nome = '$name', email = '$email' WHERE email = '$email_antigo'";

    if($conn -> query($sql) === true){
        echo"Atualizado com sucesso!";
    }else{
        echo"Erro". $slq ."<br>".$conn -> error;
    }
}
$conn -> close();

?>