<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletim</title>
</head>

<body>
    <p>Notas:</p>
    <?php
    $nota1 = rand(0, 10);
    if ($nota1 < 6) {
        $status1 = 'red';
    } elseif ($nota1 < 9) {
        $status1 = 'green';
    } else {
        $status1 = 'blue';
    }

    $nota2 = rand(0, 10);
    if ($nota2 >= 9) {
        $status2 = 'blue';
    } elseif ($nota2 < 9 && $nota2 >= 6) {
        $status2 = 'green';
    } elseif ($nota2 < 6) {
        $status2 = 'red';
    }

    $nota3 = rand(0, 10);
    $status3 = $nota3 >= 9 ? 'blue' : ($nota3 >= 6 ? 'green' : 'red');

    $nota4 = rand(0, 10);
    $status4 = $nota4 >= 9 ? 'blue' : ($nota4 >= 6 ? 'green' : 'red');

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    $statusMedia = $media >= 9 ? 'blue' : ($media >= 6 ? 'green' : 'red');
    ?>

    <table>
        <thead>
            <tr>
                <td>Bimestre</td>
                <td>Nota</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td style="color: <?= $status1 ?>">
                    <?= $nota1 ?>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td style="color: <?= $status2 ?>">
                    <?= $nota2 ?>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td style="color: <?= $status3 ?>">
                    <?= $nota3 ?>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td style="color: <?= $status4 ?>">
                    <?= $nota4 ?>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Média</th>
                <th style="color: <?= $statusMedia ?>">
                    <?= $media ?>
                </th>
            </tr>
        </tfoot>
    </table>
    <span style="color: <?= $statusMedia ?>">
        <?php
        if ($media < 6) {
            echo 'Você foi reprovado';
        } elseif ($media < 9) {
            echo 'Você foi aprovado';
        } else {
            echo 'Você foi aprovado com excelencia.';
        }
        ?>
    </span>
</body>

</html>
