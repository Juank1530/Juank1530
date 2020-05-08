<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>

<?php
require_once './biblioteca.php';
?>

<body>

    <h1>Operaciones Básicas</h1>

    <div class="text">
        <p>Por favor selecione la operación que desea realizar:</p>

    </div>

    <div class="Form">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="">
            <select name="myselect" id="myselect">
                <option value="default">Seleccione un valor</option>
                <option value="Suma">Suma</option>
                <option value="Resta">Resta</option>
                <option value="Multiplacion">Multiplicación</option>
                <option value="Division">División</option>
            </select>
            <br>
            <label for="N1">Ingrese el primer digito</label>
            <input name="n1" type="number" placeholder="Ingrese solo números">
            <br>
            <label for="N2">Ingrese el primer digito</label>
            <input name="n2" type="number" placeholder="Ingrese solo números">
            <br>
            <input name="submit" type="submit" value="Calcular">
        </form>
    </div>

    <div class="resulset">

        <?php

        if ($_GET['submit']) {
            operacion($_GET['n1'], $_GET['n2'], $_GET['myselect']);
        } 

















        ?>



    </div>










</body>

</html>