<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletim</title>
</head>

<body>
    <?php
    $nota1 = rand(0, 10);
    $status1 = $nota1 >= 6 ? 'blue' : 'red';

    $nota2 = rand(0, 10);
    $status2 = $nota2 >= 6 ? 'blue' : 'red';

    $nota3 = rand(0, 10);
    $status3 = $nota3 >= 6 ? 'blue' : 'red';

    $nota4 = rand(0, 10);
    $status4 = $nota4 >= 6 ? 'blue' : 'red';

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    $statusMedia = $media >= 6 ? 'blue' : 'red';
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
</body>

</html>