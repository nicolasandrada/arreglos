<?php

// int num[5];

//declarando un arreglo
$nombres = [];

$nombres[] = "Elias";
$nombres[] = "Leandro";
$nombres[] = "Gonzalo";
$nombres[] = "Mary";
$nombres[] = "Mary";
$nombres[] = "Mary";
$nombres[] = "Mary";
$nombres[] = "Mary";
$nombres[] = "Mary";
$nombres[] = "Mary";
$nombres[] = "Mary";
$nombres[] = "Mary";
$nombres[] = "Mary";
$nombres[] = "Mary";

//for($i= 0; $i< count($nombres) ; $i++){
//    echo "Bienvenido $nombres[$i] <br>";
//}
echo '<select name="" id="">';
foreach($nombres as $n){
    echo "Bienvenido $n <br>";
}
echo '</select>';
?>

<select name="" id="">
    <option value="">1</option>
    <option value="">2</option>
    <option value="">3</option>
    <option value="">4</option>
</select>
