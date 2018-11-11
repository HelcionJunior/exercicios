<?php

echo "aluno e turno enviados<br><br>";
echo "aluno: " . $_POST["nome"]. "<br>";
echo "turno: " . $_POST["turno"]. "<br>";
if ($_POST["turno"]== "manhã" ){
    echo "Aluno escolheu o turno manhã";
}elseif($_POST["turno"]=="tarde") {
    echo "Aluno escolheu o turno da tarde";
}elseif ($_POST["turno"]=="noite") {
    echo "Aluno escolheu o turno da noite";
}else{
    echo "Aluno não informou o turno";
}

echo "<br><br>";
var_dump($_POST);