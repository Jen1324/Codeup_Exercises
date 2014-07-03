<?php

// function adder($number_1, $number_2) {
// 	echo $number_1 + $number_2 . PHP_EOL;
// }

// adder (38,4);

// echo $number_1;

// function adder($a, $b) {
// 	echo $a + $b . PHP_EOL;
// }

// adder (38,4);
// adder (1,2);
// adder (2, -16);
// adder (4,4);
// adder (38,38);



// adder (1, true);
// adder (3, false);
// adder ('Omar', 'Panda');

// function subtract($a, $b) {
//     echo $a - $b . PHP_EOL;
// }

// function multiply($a, $b) {
//     echo $a * $b . PHP_EOL;
// }

// function divide($a, $b) {
//     echo $a / $b . PHP_EOL;
// }

// adder (5, 5);
// subtract (5, 5);
// multiply (5, 5);
// divide (5, 5); 

// function compare($a, $b, $strict) {
// 	// echo $a == $b ?  'TRUE' : 'FALSE';
// 	// echo PHP_EOL;


// if ($strict === true) {
// 	echo $a === $b ? 'TRUE' : 'FALSE';
// } else {
// 	echo $a == $b ? 'TRUE' : 'FALSE';
// }
// echo PHP_EOL;
// }

// compare ('42', 42, false);

//if nothing is past the strict, php will pass it true as default


// function inspect($variable = null, $dump = true) {
// 	if ($dump === true) {
// 		var_dump($variable);
// 	}	else {
// 			print_r($variable);
// 	}
// }

// $heroes = ['batman', 'superman', 'bart'];
// inspect($heroes); 

function adder($a, $b) 
{
	if (is_numeric($a) && is_numeric($b)) 
	{
		echo $a + $b;
	} 
	else 
	{
		echo 'ERROR: Both $a and $b should be numbers.';
	}
		PHP_EOL;
}

adder("2 + 3", 1);




