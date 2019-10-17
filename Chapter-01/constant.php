<?php

/*
PHP constants are name or identifier that can't be changed during the execution of the script. PHP constants can be defined by 2 ways:

Using define() function
Using const keyword
PHP constants follow the same PHP variable rules. For example, it can be started with letter or underscore only.

//-------------------------------------------------------------------
Conventionally, PHP constants should be defined in uppercase letters.
//-------------------------------------------------------------------

*/

// Define() function
// Syntax: Define(name, value, case-insensitive)

/*
name: specifies the constant name
value: specifies the constant value
case-insensitive: Default value is false. It means it is case sensitive by default.
*/

// when case-insensitive is true then.
define("Cons",123,true);
echo Cons,cons;


// Case-insensitive is by default is false. example
define("Cons1",123);
echo Cons1;


/// Using Keyword const
const Message = 1234;
echo Message;
?>