<?php
/*
Magic constants are the predefined constants in PHP which get changed on the basis of their use. 
They start with double underscore (__) and ends with double underscore.

They are similar to other predefined constants but as they change their values with the context, 
they are called magic constants.

There are eight magical constants defined in the below table. T
hey are case-insensitive.
*/

// get Line number 
echo __Line__;


// Get File Path
echo __FILE__;


// full directory path of the file.
echo __DIR__;


// Get Class Name in which they belongs.
echo __CLASS__;


// Get Function Name
echo __FUNCTION__;


// Get Trait in which they used.
echo __TRAIT__;


// the name of the class method where it is used. The method name is returned as it was declared.
echo __Method__;

// he name of the current namespace.
echo __NAMESPACE__;
?>