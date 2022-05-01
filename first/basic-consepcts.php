<?php
/*

//--------Variable Declararion

$string = "Hello World";

$number = 6;

$float = 6.6;

echo "<h1>".$string."</h1>";

//Array Declaration
$laptop_brands = array("HP","Lenovo","Asus","Dell");

//Print Arrays
echo var_dump($laptop_brands);

//Constants Declaration
define("laptops", "HP, Lenovo and Asus");

//Constats Array
define("consoles", ["Xbox", "PS Vita", "SNES"]);

//Print Constatns
echo "<h1>".laptops."</h1>";

echo "<h2>".var_dump(consoles)."</h2>";



/*

/*----------------------------------------------------------------*/

/*

//-------if else

$var = 9;

if($var > 9 && $var % 2 == 0){
    echo "More them 7 and divisible for 2.";
}

elseif($var > 7){
    echo "More them 7.";
}

elseif($var % 2 == 0){
    echo "Divisible for 2.";
}
else{
    echo "Less them 7 and not divisible for 2, either.";
}
*/

/*----------------------------------------------------------------*/

/*
//-------swith

$level = 3;

switch($level){

    case 1:
        echo "You choose the EASY level";
    break;
    case 2:
        echo "You choose the MEDIUM level";
    break;
    case 3:
        echo "You choose the HARD level";
    break;
    case 4:
        echo "You choose the EXTREME level";
    break;
    default:
        echo "Please choose a number between 1 and 4";
}
*/

/*----------------------------------------------------------------*/

/*

//------while loop

$var = 2;

while($var <=10){
    echo "Number: $var <br>";
    $var++;
}

*/

/*----------------------------------------------------------------*/

/*

//------ do while loop

$var = 11;

do {
    echo "Number: $var <br>";
    $var++;
} while ($var <= 10)

*/

/*----------------------------------------------------------------*/

/*

//------ for loop

for($var = 1; $var <= 6; $var++){

    echo "Number: $var <br>";
}

*/

//------ functions


// Declaration 
function name(){

    for($var = 1; $var <= 6; $var++){

        echo "Number: $var <br>";
    }

}

//Invocation

name();




?>