<?php

$cidade = array(
    array(
        "cidade" => "são paulo",
        "habitantes" => "12.106.920",
    ),

    array(
        "cidade" => "rio de janeiro",
        "habitantes" => "6.520.266",
    ),

    array(
        "cidade" => "brasília",
        "habitantes" => "3.039.444",
    ),

    array(
        "cidade" => "salvador",
        "habitantes" => "2.953.986",
    ),

    array(
        "cidade" => "fortaleza",
        "habitantes" => "2.627.482",
    ),
);

foreach ($cidade as $cidades) {
    echo "Cidade:  " . $cidades["cidade"] . "<br>";
    echo "Habitantes:  " . $cidades["habitantes"] . "<br>";
    echo "<hr>";
}