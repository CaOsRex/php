<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="if_case_loop_arrays.php" method = "POST">
            <label>Digite el limite del contador</label>
            <input type="number" name="counter">
            <input type="submit" value="Generar">
        </form>
    </body>
</html>
<?php
/* 3.   FOR CICLO REPETITIVO (repite codigo un numero determinado de veces)*/
if ($_POST){
    $counter = $_POST["counter"];
    for($i=1; $i<= $counter;$i++){ 
        echo $i . "<br>";
    }
}
?>