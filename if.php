<?php

$a = 5;
$b = 10;
$c = '10';

// SAdd an else clause to the next two statements
if ($a < $b) 
{
    // output the appropriate result
    echo "$a is less than $b\n";
}
elseif ($b > $a) 
{
    echo "$b is greater than $a\n";
}

// Shorten the next 2 statements into an if/else
if ($b >= $c) 
{
    // output the appropriate result
    echo "$b is greater than or equal to $c\n";
} 
elseif ($b <= $c) 
{
    // output the appropriate result
    echo "$b is less than or equal to $c\n";
}

// combine the next 4 conditionals into 
// one if/else/elseif block that checks in order for:
// identical, equal, not identical, not equal
if ($b == $c) 
{
    // output the appropriate result
    echo "$b is equal to $c\n";
} 
elseif ($b === $c) 
{
    // output the appropriate result
    echo "$b is identical to $c\n";
} 
elseif ($b != $c) 
{
    // output the appropriate result
    echo "$b is not equal to $c\n";
} 
elseif ($b !== $c) 
{
    // output the appropriate result
    echo "$b is not identical to $c\n";
}

echo PHP_EOL;
// Switching the variables around now

// SAdd an else clause to the next two statements
if ($b < $c) 
{
    // output the appropriate result
    echo "$b is less than $c\n";
} 
elseif ($b > $a) 
{
    echo "$b is greater than $a\n";
}

// Shorten the next 2 statements into an if/else
if ($c >= $a) 
{
    // output the appropriate result
    echo "$c is greater than or equal to $a\n";
} 
elseif ($c <= $a) 
{
    // output the appropriate result
    echo "$c is less than or equal to $a\n";
}

// combine the next 4 conditionals into 
// one if/else/elseif block that checks in order for:
// identical, equal, not identical, not equal
if ($a == $c) 
{
    // output the appropriate result
    echo "$a is equal to $c\n";
} 
elseif ($a === $c) 
{
    // output the appropriate result
    echo "$a is identical to $c\n";
} 
elseif ($a != $c) 
{
    // output the appropriate result
    echo "$a is not equal to $c\n";
} 
elseif ($a !== $c) 
{
    // output the appropriate result
    echo "$a is not identical to $c\n";
}

?>