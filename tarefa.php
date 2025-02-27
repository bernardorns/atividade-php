<?php
$usuario = [
    "nome" => "Bernardo",
    "idade" => 21,
    "hobbies" => ["Correr", "Leitura", "Video Game"]
];

function verificarIdade($idade) {
    return $idade < 18 ? "Menor de idade" : "Maior de idade";
}

echo verificarIdade($usuario["idade"]) . "\n";

function listarHobbies($hobbies) {
    echo "Hobbies:\n";
    if (!empty($hobbies)) {
        foreach ($hobbies as $hobby) {
            echo "- $hobby\n";
        }
    } else {
        echo "- Nenhum hobby cadastrado.\n";
    }
}

listarHobbies($usuario["hobbies"]);

function exibirMensagem($usuario) {
    return "Olá, " . $usuario["nome"] . "! Você tem " . $usuario["idade"] . " anos.\n";
}

echo exibirMensagem($usuario);
?>
