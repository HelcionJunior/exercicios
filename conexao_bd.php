<?php

$servidor = "cursophp_db_1";
$usuario = "root";
$senha = "phprs";

$conn = new mysqli($servidor, $usuario, $senha);

if ($conn->connect_error) {
    die ("erro ao tentar conectar");
}
echo "conexão efetuada com sucesso";