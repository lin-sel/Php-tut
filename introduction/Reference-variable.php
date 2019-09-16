<?php

/*
The $var (single dollar) is a normal variable with the name var that stores any value like string, integer, float, etc.
The $$var (double dollar) is a reference variable that stores the value of the $variable inside it.
To understand the difference better, let's see some examples.
*/

$var = "Lin_sel";

$$var = "Program";

echo $Lin_sel;

/*
output: 
    Program
*/


// Actually it is working on Reference Concept.
// Simple Explation: ${$var}. here value of $var is Lin_sel. now value of $val become variable name.


// More Example:

$x="U.P";  
$$x="Lucknow";  
echo $x;  
echo $$x;  
echo "Capital of $x is " . $$x;  

?>