<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Formatação</title>

</head>

<style>
table{
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
th,td{
    border: 1px solid black;
    text-align: left;
    padding: 6px;
}
tr:nth-child(even){
    background-color: silver;
}
</style>
<body>
    
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
    echo "<table>";
    echo "<tr>
                <th>id</th>
                <th>email</th>
                <th>senha</th>
        </tr>";
    //listar linhas retornadas
    while ($row=$result->fetch_assoc()) {

        echo "<tr>";

        echo "<td>" . $row["id"]. "</td>";
        echo "<td>" . $row["email"]. "</td>";
        echo "<td>" . $row["senha"]. "</td>";

        echo "</tr>";
    }

}else{
    echo "Não retornou nenhum registro<br>";
}

$conn->close();

?>

</body>
</html>>