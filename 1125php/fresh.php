<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>ASCII</title>
    <link rel="stylesheet" href="ascii.css">
</head>
<body>
    
<table>
    <caption>Characters</caption>

    <tr>
        <th>Character</th>
        <th>Decimal</th>
        <th>Hexa</th>
    </tr>

    <?php
        for ($i = 32; $i < 127; $i++):
    ?>

    <tr>
        <td><?= chr($i) ?></td>
        <td><?= $i ?> </td>
        <td><?= strtoupper(dechex($i)) ?></td>
    </tr>
    <?php endfor; ?>

</table>

<?php

/** Jelenítsük meg böngészőben az ASCII tábla 32 és 127 közötti
 *  karaktereit, decimális és hecadecimális értéket!
*/


?>


</body>
</html>