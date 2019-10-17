<?php

// Normal For Loop 

for($in = 0; $in < 10; $in++){
    echo $in."\n";
}

// Nested For Loop.
for($in = 0; $in < 10; $in++){
    $var = 0;
    for($is = 0; $is < $in ; $is++){
        $var += $is;
    }
    echo $var."\n";
}
?>