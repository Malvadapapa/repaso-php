<?php
$a = 5;
$b = 6;
$day = 4;
$day2 = 2;

if ($a > $b) {
    echo "la primera variable es mayor";
}else {
    echo "la segunda variable es mayor <br>";
};


if($day == 1){
    echo "Lunes <br>";
}elseif($day == 2){
    echo "Martes <br>";
}elseif($day == 3){
    echo "Miércoles <br>";
}elseif($day == 4){
    echo "Jueves <br>";
}elseif($day == 5){
    echo "Viernes <br>";
}elseif($day == 6){
    echo "Sábado <br>";
}elseif($day == 7){
    echo "Domingo <br><br>";
};

switch($day2){
    case 1:
        echo "Lunes <br>";
        break;
    case 2:
        echo "Martes <br>";
        break;
    case 3:
        echo "Miércoles <br>";
        break;
    case 4:
        echo "Jueves <br>";
        break;
    case 5:
        echo "Viernes <br>";
        break;
    case 6:
        echo "Sábado <br>";
        break;
    case 7:
        echo "Domingo <br>";
        break;
    default:
        echo "Valor inválido <br>";
        break;
};

?>