<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблицы сравнения</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h2>Таблица гибкого сравнения</h2>
    <table id="comparisonTable">
        <tr>
            <th></th>
            <th><?php echo var_export($varTrue = true) ?></th>
            <th><?php echo var_export($varFalse = false) ?></th>
            <th><?php echo var_export($var1 = 1) ?></th>
            <th><?php echo var_export($var0 = 0) ?></th>
            <th><?php echo var_export($varNegative1 = -1) ?></th>
            <th><?php echo var_export($varString1 = "1") ?></th>
            <th><?php echo var_export($varNull = null) ?></th>
            <th><?php echo var_export($varPhp = "php") ?></th>
        </tr>
        <tr>
            <th><?php echo var_export($varTrue = true) ?></th>
            <td><?php echo var_export($varTrue == $varTrue) ?></td>
            <td><?php echo var_export($varTrue == $varFalse); ?></td>
            <td><?php echo var_export($varTrue == $var1); ?></td>
            <td><?php echo var_export($varTrue == $var0); ?></td>
            <td><?php echo var_export($varTrue == $varNegative1); ?></td>
            <td><?php echo var_export($varTrue == $varString1); ?></td>
            <td><?php echo var_export($varTrue == $varNull); ?></td>
            <td><?php echo var_export($varTrue == $varPhp); ?></td>
        </tr>
        <tr>
            <th><?php echo var_export($varFalse = false) ?></th>
            <td><?php echo var_export($varFalse == $varTrue) ?></td>
            <td><?php echo var_export($varFalse == $varFalse) ?></td>
            <td><?php echo var_export($varFalse == $var1) ?></td>
            <td><?php echo var_export($varFalse == $var0) ?></td>
            <td><?php echo var_export($varFalse == $varNegative1) ?></td>
            <td><?php echo var_export($varFalse == $varString1) ?></td>
            <td><?php echo var_export($varFalse == $varNull) ?></td>
            <td><?php echo var_export($varFalse == $varPhp) ?></td>
        </tr>
        <tr>
            <th><?php echo var_export($var1 = 1) ?></th>
            <td><?php echo var_export($var1 == $varTrue) ?></td>
            <td><?php echo var_export($var1 == $varFalse) ?></td>
            <td><?php echo var_export($var1 == $var1) ?></td>
            <td><?php echo var_export($var1 == $var0) ?></td>
            <td><?php echo var_export($var1 == $varNegative1) ?></td>
            <td><?php echo var_export($var1 == $varString1) ?></td>
            <td><?php echo var_export($var1 == $varNull) ?></td>
            <td><?php echo var_export($var1 == $varPhp) ?></td>
        </tr>
        <tr>
            <th><?php echo var_export($var0 = 0) ?></th>
            <td><?php echo var_export($var0 == $varTrue) ?></td>
            <td><?php echo var_export($var0 == $varFalse) ?></td>
            <td><?php echo var_export($var0 == $var1) ?></td>
            <td><?php echo var_export($var0 == $var0) ?></td>
            <td><?php echo var_export($var0 == $varNegative1) ?></td>
            <td><?php echo var_export($var0 == $varString1) ?></td>
            <td><?php echo var_export($var0 == $varNull) ?></td>
            <td><?php echo var_export($var0 == $varPhp) ?></td>
        </tr>
        <tr>
            <th><?php echo var_export($varNegative1 = -1) ?></th>
            <td><?php echo var_export($varNegative1 == $varTrue) ?></td>
            <td><?php echo var_export($varNegative1 == $varFalse) ?></td>
            <td><?php echo var_export($varNegative1 == $var1) ?></td>
            <td><?php echo var_export($varNegative1 == $var0) ?></td>
            <td><?php echo var_export($varNegative1 == $varNegative1) ?></td>
            <td><?php echo var_export($varNegative1 == $varString1) ?></td>
            <td><?php echo var_export($varNegative1 == $varNull) ?></td>
            <td><?php echo var_export($varNegative1 == $varPhp) ?></td>
        </tr>
        <tr>
            <th><?php echo var_export($varString1 = "1") ?></th>
            <td><?php echo var_export($varString1 == $varTrue) ?></td>
            <td><?php echo var_export($varString1 == $varFalse) ?></td>
            <td><?php echo var_export($varString1 == $var1) ?></td>
            <td><?php echo var_export($varString1 == $var0) ?></td>
            <td><?php echo var_export($varString1 == $varNegative1) ?></td>
            <td><?php echo var_export($varString1 == $varString1) ?></td>
            <td><?php echo var_export($varString1 == $varNull) ?></td>
            <td><?php echo var_export($varString1 == $varPhp) ?></td>
        </tr>
        <tr>
            <th><?php echo var_export($varNull = null) ?></th>
            <td><?php echo var_export($varNull == $varTrue) ?></td>
            <td><?php echo var_export($varNull == $varFalse) ?></td>
            <td><?php echo var_export($varNull == $var1) ?></td>
            <td><?php echo var_export($varNull == $var0) ?></td>
            <td><?php echo var_export($varNull == $varNegative1) ?></td>
            <td><?php echo var_export($varNull == $varString1) ?></td>
            <td><?php echo var_export($varNull == $varNull) ?></td>
            <td><?php echo var_export($varNull == $varPhp) ?></td>
        </tr>
        <tr>
            <th><?php echo var_export($varPhp = "php") ?></th>
            <td><?php echo var_export($varPhp == $varTrue) ?></td>
            <td><?php echo var_export($varPhp == $varFalse) ?></td>
            <td><?php echo var_export($varPhp == $var1) ?></td>
            <td><?php echo var_export($varPhp == $var0) ?></td>
            <td><?php echo var_export($varPhp == $varNegative1) ?></td>
            <td><?php echo var_export($varPhp == $varString1) ?></td>
            <td><?php echo var_export($varPhp == $varNull) ?></td>
            <td><?php echo var_export($varPhp == $varPhp) ?></td>
        </tr>
    </table>
    <h2>Таблица жёсткого сравнения</h2>
    <table id="comparisonTable">
        <tr>
            <th></th>
            <th><?php echo var_export($varTrue = true) ?></th>
            <th><?php echo var_export($varFalse = false) ?></th>
            <th><?php echo var_export($var1 = 1) ?></th>
            <th><?php echo var_export($var0 = 0) ?></th>
            <th><?php echo var_export($varNegative1 = -1) ?></th>
            <th><?php echo var_export($varString1 = "1") ?></th>
            <th><?php echo var_export($varNull = null) ?></th>
            <th><?php echo var_export($varPhp = "php") ?></th>
        </tr>
        <tr>
            <th><?php echo var_export($varTrue = true) ?></th>
            <td><?php echo var_export($varTrue === $varTrue) ?></td>
            <td><?php echo var_export($varTrue === $varFalse); ?></td>
            <td><?php echo var_export($varTrue === $var1); ?></td>
            <td><?php echo var_export($varTrue === $var0); ?></td>
            <td><?php echo var_export($varTrue === $varNegative1); ?></td>
            <td><?php echo var_export($varTrue === $varString1); ?></td>
            <td><?php echo var_export($varTrue === $varNull); ?></td>
            <td><?php echo var_export($varTrue === $varPhp); ?></td>
        </tr>
        <tr>
            <th><?php echo var_export($varFalse = false) ?></th>
            <td><?php echo var_export($varFalse === $varTrue) ?></td>
            <td><?php echo var_export($varFalse === $varFalse) ?></td>
            <td><?php echo var_export($varFalse === $var1) ?></td>
            <td><?php echo var_export($varFalse === $var0) ?></td>
            <td><?php echo var_export($varFalse === $varNegative1) ?></td>
            <td><?php echo var_export($varFalse === $varString1) ?></td>
            <td><?php echo var_export($varFalse === $varNull) ?></td>
            <td><?php echo var_export($varFalse === $varPhp) ?></td>
        </tr>
        <tr>
            <th><?php echo var_export($var1 = 1) ?></th>
            <td><?php echo var_export($var1 === $varTrue) ?></td>
            <td><?php echo var_export($var1 === $varFalse) ?></td>
            <td><?php echo var_export($var1 === $var1) ?></td>
            <td><?php echo var_export($var1 === $var0) ?></td>
            <td><?php echo var_export($var1 === $varNegative1) ?></td>
            <td><?php echo var_export($var1 === $varString1) ?></td>
            <td><?php echo var_export($var1 === $varNull) ?></td>
            <td><?php echo var_export($var1 === $varPhp) ?></td>
        </tr>
        <tr>
            <th><?php echo var_export($var0 = 0) ?></th>
            <td><?php echo var_export($var0 === $varTrue) ?></td>
            <td><?php echo var_export($var0 === $varFalse) ?></td>
            <td><?php echo var_export($var0 === $var1) ?></td>
            <td><?php echo var_export($var0 === $var0) ?></td>
            <td><?php echo var_export($var0 === $varNegative1) ?></td>
            <td><?php echo var_export($var0 === $varString1) ?></td>
            <td><?php echo var_export($var0 === $varNull) ?></td>
            <td><?php echo var_export($var0 === $varPhp) ?></td>
        </tr>
        <tr>
            <th><?php echo var_export($varNegative1 = -1) ?></th>
            <td><?php echo var_export($varNegative1 === $varTrue) ?></td>
            <td><?php echo var_export($varNegative1 === $varFalse) ?></td>
            <td><?php echo var_export($varNegative1 === $var1) ?></td>
            <td><?php echo var_export($varNegative1 === $var0) ?></td>
            <td><?php echo var_export($varNegative1 === $varNegative1) ?></td>
            <td><?php echo var_export($varNegative1 === $varString1) ?></td>
            <td><?php echo var_export($varNegative1 === $varNull) ?></td>
            <td><?php echo var_export($varNegative1 === $varPhp) ?></td>
        </tr>
        <tr>
            <th><?php echo var_export($varString1 = "1") ?></th>
            <td><?php echo var_export($varString1 === $varTrue) ?></td>
            <td><?php echo var_export($varString1 === $varFalse) ?></td>
            <td><?php echo var_export($varString1 === $var1) ?></td>
            <td><?php echo var_export($varString1 === $var0) ?></td>
            <td><?php echo var_export($varString1 === $varNegative1) ?></td>
            <td><?php echo var_export($varString1 === $varString1) ?></td>
            <td><?php echo var_export($varString1 === $varNull) ?></td>
            <td><?php echo var_export($varString1 === $varPhp) ?></td>
        </tr>
        <tr>
            <th><?php echo var_export($varNull = null) ?></th>
            <td><?php echo var_export($varNull === $varTrue) ?></td>
            <td><?php echo var_export($varNull === $varFalse) ?></td>
            <td><?php echo var_export($varNull === $var1) ?></td>
            <td><?php echo var_export($varNull === $var0) ?></td>
            <td><?php echo var_export($varNull === $varNegative1) ?></td>
            <td><?php echo var_export($varNull === $varString1) ?></td>
            <td><?php echo var_export($varNull === $varNull) ?></td>
            <td><?php echo var_export($varNull === $varPhp) ?></td>
        </tr>
        <tr>
            <th><?php echo var_export($varPhp = "php") ?></th>
            <td><?php echo var_export($varPhp === $varTrue) ?></td>
            <td><?php echo var_export($varPhp === $varFalse) ?></td>
            <td><?php echo var_export($varPhp === $var1) ?></td>
            <td><?php echo var_export($varPhp === $var0) ?></td>
            <td><?php echo var_export($varPhp === $varNegative1) ?></td>
            <td><?php echo var_export($varPhp === $varString1) ?></td>
            <td><?php echo var_export($varPhp === $varNull) ?></td>
            <td><?php echo var_export($varPhp === $varPhp) ?></td>
        </tr>
    </table>
    <a href="index.php">Таблица истинности PHP</a>
</body>

<script type="text/javascript" src="script.js" defer></script>

</html>