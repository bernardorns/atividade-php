<?php
$dadosUsuario = array(
    "nome" => "João",
    "idade" => 20,
    "hobbies" => array("")
);

$mensagemIdade = ($dadosUsuario["idade"] < 18) ? "Menor de idade" : "Maior de idade";
echo "$mensagemIdade\n";

echo "Lista de Hobbies:\n";
foreach ($dadosUsuario["hobbies"] as $interesse) {
    echo "- $interesse\n";
}

function mostrarSaudacao($nome, $anos) {
    return "Olá, $nome! Você tem $anos anos.\n";
}

echo mostrarSaudacao($dadosUsuario["nome"], $dadosUsuario["idade"]);
?>