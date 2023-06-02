<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /* 1.   String serie de caracteres */
    $customer = "Falcao";
    echo "the costumer {$customer} bougth <br>";

    $favorite_food = "Panzerotti y Pizza";
    echo "a {$favorite_food} <br>";

    /* 2.   Integrer es un numero  */

    $price = 5000;
    echo "that cost {$price}";

    /* 3.   Floating point number - floats - doubles - real number */

    $goal_rate_per_game = 4.5;
    echo "<br> and now he is celebrating his goal rate per futbol game of {$goal_rate_per_game}";

    /* 5.   Boolean tiene 2 valortes true or false */

    $state = true;
    echo "<br> Is Falcao a champion? that is {$state}";

    /* 4.   Obtener tipos de datos */

    $type_data= gettype($state);
    echo "<br> Tipo de dato es: $type_data";
    
     
    
    
    ?>
</body>
</html>