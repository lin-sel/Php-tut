<?php 

$var = 10;

// While loop Sample
while($var > 0){
    print $var;
    $var--;
}

$var = 10;
// Nested-While loop Sample
echo "------------------------------------------------- Nested For Loop-------------------------------------------------------\n";
while($var > 0){
    while($var > 4){
        print $var;
        // it will enter in infinite loop.
    }
    $var--;
}

?>