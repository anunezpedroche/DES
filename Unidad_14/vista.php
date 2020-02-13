<html>

<head>
    <title>Lista de Sillas</title>
</head>

<body>
    <h1>Tienda de cervezas</h1>
    <table style="border: 1px black solid">
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Imagen</th>
        </tr>

        <?php

        while ($fila = devolverArray($query)) {

            echo "<tr>
            <td style='border: 1px black solid'>{$fila['nombre']}</td>
            <td style='border: 1px black solid'>{$fila['precio']}</td>
            <td style='border: 1px black solid'><img style ='width: 60px' src=imgs/{$fila['imagen']}></td>
            <td style='border: 1px black solid'><input type='button' value='Buy'></td>
            </tr>";
        
        }
        ?>
    </table>
</body>

</html>