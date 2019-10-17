<?php

// If-else statement used when different sequence of intruction to be executed depending on the logical value evaluated.

$integer = 90;
$double = 30.40;
$float = 10.000001;

if (gettype($integer) == "float"){
    echo "23 is less than 50.";
}
elseif(gettype($double) == "double"){
    echo "Double value inserted";
}
else {
    echo "Float value inserted";
}

// Nested if-else

if(true){
    if(!false){
        echo "Condition Satisfied";
    }
    else{
        echo "Not Satisfied";
    }
}
else {
    echo "Bravo!!";
}
?>