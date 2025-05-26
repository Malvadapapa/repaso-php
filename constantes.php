<?php
define("CURSO", "PHP 8 desde cero");
define("CURSOS", ["MySQL", "Javascript", "Angular"]);
define("RECURSANTE", true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Bienvenido al curso : <?php echo CURSO; ?></h1>
    <h2> También tenemos cursos de: 
        <?php echo CURSOS[0] . ", " . CURSOS[1] . ", " . CURSOS[2]; ?>
    </h2>

<p><?PHP if(defined("RECURSANTE")){
echo "cuando quieras puedes ver nuevamente nuestros cursos!";
};
?>
</p>
</body>
</html>