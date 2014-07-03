<?php 

$guess = 44;

// Write the output
// Notice the space after the ?
fwrite(STDOUT, 'Guess a number?');

// Get the input from user
$number = (int) fgets(STDIN);

if ($number === $guess) 
{

// Output the user's name
fwrite(STDOUT, "Winning\n");
fwrite(STDOUT, "Noooooo\n");
}
