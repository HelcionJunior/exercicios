<?php

//informações do banco de dados
$servidor = "cursophp_db_1";
$usuario = "root";
$senha = "phprs";
$banco = "curso_php";

//conexão com o banco de dados
$conn = new mysqli($servidor, $usuario, $senha, $banco);
if ($conn->connect_error) {
    die ("erro ao tentar conectar:" . $conn->connect_error);
}

//listar as tabelas do banco de dados
$sql = "SELECT * FROM `tarefas`";
$result = $conn->query($sql);

// verificar retorno da listagem do banco de dados
if($result->num_rows > 0){
    echo $result->num_rows . "registro(s) listado(s)<br>" ;
    //listar linhas retornadas
    while ($row=$result->fetch_assoc()) {
        echo "id " . $row["id"]. "<br>";
        echo "email " . $row["email"]. "<br>";
        echo "senha " . $row["senha"]. "<br>";
    }

}else{
    echo "Não retornou nenhum registro<br>";
}

$conn->close();



