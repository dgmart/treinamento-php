<?php

$nota1 = rand(0, 10);
$status1 = $nota1 >= 6 ? 'blue' : 'red';
$nota2 = rand(0, 10);
$status2 = $nota2 >= 6 ? 'blue' : 'red';
$media = ($nota1 + $nota2) / 2;
$statusMedia = $media >= 6 ? 'blue' : 'red';

echo 'Nota 1 (' . $status1 . '): ' . $nota1 . PHP_EOL;
echo 'Nota 2 (' . $status2 . '): ' . $nota2 . PHP_EOL;
echo 'Média (' . $statusMedia . '): ' . $media . PHP_EOL;

if ($media >= 6) {
    echo '(' . $statusMedia . ')Você foi aprovado' . PHP_EOL;
} else {
    echo '(' . $statusMedia . ')Você foi reprovado.' . PHP_EOL;
}

echo 'Versão 2 com recurso extra' . PHP_EOL;
