<?php
#numueros
$numero = 2525.1;
#string
$string = "Ya sabiamos que asi se hace pero lo tiene el curso =(";
#string con caracteres reservados
$stringReservado ="Decir \" Hola \" es una buena forma de comenzar una conversacion \$\$\$\$"


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo "mi numero es: $numero"; ?></p>
    <p><?php echo $string; ?></p>
    <p><?php echo $stringReservado; ?></p>

</body>
</html>