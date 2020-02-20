<?php

$nota1 = rand(0, 10);
$nota2 = rand(0, 10);
$media = ($nota1 + $nota2) / 2;

echo 'Nota 1: ' . $nota1 . PHP_EOL;
echo 'Nota 2: ' . $nota2 . PHP_EOL;
echo 'Média: ' . $media . PHP_EOL;

if ($media >= 6) {
    echo 'Você foi aprovado' . PHP_EOL;
} else {
    echo 'Você foi reprovado.' . PHP_EOL;
}

echo 'Versão 2 com recurso extra' . PHP_EOL;
