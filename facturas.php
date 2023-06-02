<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="facturas.php" method="POST">
            <label for="">Criptomoneda</label>
            <select name="opt" id="">
                <option value="BTC">Bitcoin</option>
                <option value="ETH">Ethereum</option>
                <option value="DOGE">Dodgecoin</option>
                <option value="BNB">BNB</option>
            </select>

            <label for="">Cantidad</label>
            <input type="number" name="cantidad">

            <label for="">Precio</label>
            <input type="number" name="precio">

            <input type="submit">
        </form>
    </body>
</html>

<?php
$bit = $_POST['opt'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

$math = $cantidad * $precio;

echo "Nombre de la Moneda {$bit}, haz comprado: {$cantidad} monedas y el total de la compra es de: {$math}$";

?>