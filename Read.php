<?php
include 'db.php';
$sql= 'SELECT * FROM usuario' ;
$resultado = $conn-> query($sql);

if($resultado -> num_rows > 0){
    echo "<table border = '1'>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Data de Criação</th>
        <th>Ações</th>
    </tr>";
    while($row = $resultado -> fetch_assoc()){
    echo "<tr>
            <th>{$row['id_crud']}</th>
            <th>{$row['nome']}</th>
            <th>{$row['email']}</th>
            <th>{$row['criado_em']}</th>
            <th>Ações</th>
            <th>
                <a href='update_icaro.php?id={$row['id_crud']}'>Editar</a> |
                <a href='delete.php?id={$row['id_crud']}'>Excluir</a>
            </th>
        </tr>";
    }
    echo"</table>";
}else{
    echo"Nenhum registro encontrado";
}
?>