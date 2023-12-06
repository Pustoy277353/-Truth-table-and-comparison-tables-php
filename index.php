<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица истинности PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h2>Таблица истинности PHP</h2>
    <table id="comparisonTable">
        <tr>
            <td>A</td>
            <td>B</td>
            <td>!A</td>
            <td>A || B</td>
            <td>A && B</td>
            <td>A xor B</td>
        </tr>
        <tr>
            <td><?php echo $A = 0; ?></td>
            <td><?php echo $B = 0; ?></td>
            <td><?php echo var_export(!$A); ?></td>
            <td><?php echo var_export($A || $B); ?></td>
            <td><?php echo var_export($A && $B); ?></td>
            <td><?php echo var_export($A xor $B); ?></td>
        </tr>
        <tr>
            <td><?php echo $A = 0; ?></td>
            <td><?php echo $B = 1; ?></td>
            <td><?php echo var_export(!$A); ?></td>
            <td><?php echo var_export($A || $B); ?></td>
            <td><?php echo var_export($A && $B); ?></td>
            <td><?php echo var_export($A xor $B); ?></td>
        </tr>
        <tr>
            <td><?php echo $A = 1; ?></td>
            <td><?php echo $B = 0; ?></td>
            <td><?php echo var_export(!$A); ?></td>
            <td><?php echo var_export($A || $B); ?></td>
            <td><?php echo var_export($A && $B); ?></td>
            <td><?php echo var_export($A xor $B); ?></td>
        </tr>
        <tr>
            <td><?php echo $A = 1; ?></td>
            <td><?php echo $B = 1; ?></td>
            <td><?php echo var_export(!$A); ?></td>
            <td><?php echo var_export($A || $B); ?></td>
            <td><?php echo var_export($A && $B); ?></td>
            <td><?php echo var_export($A xor $B); ?></td>
        </tr>
    </table>
    <a href="table.php">Таблица жёсткого сравнения</a>
</body>

<script type="text/javascript" src="script.js" defer></script>

</html>