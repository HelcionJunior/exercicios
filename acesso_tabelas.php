<?php

$servidor = "cursophp_db_1";
$usuario = "root";
$senha = "phprs";
$banco = "curso_php";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die ("erro ao tentar conectar");
}
$sql = "SELECT * FROM `tarefas`";
$result = $conn->query($sql);
if($result->num_rows > 0){
    echo "número de registros: " . $result->num_rows;
}else{
    echo "sem registros";
}
$conn->close();

