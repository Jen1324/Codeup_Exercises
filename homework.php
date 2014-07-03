<?php

// 1. Create an array of fruits. 
// Write a loop that prints the fruits. (for and foreach)

// 2. Modify the fruit array so that you have fruit name => color. 
// 	Print using a foreach loop with something like "apples are red."


// Three or more fruits is fine for examples.

// $todos = array('A,B,C');

// for($i = 0, $i < count(todos); $i++) {
// 	$todo = $todos[$i];
// 	echo $todo . php_EOL
// }


// foreach ($todos as $todos)
// 	echo $todos . PHP_EOL
// }

 $fruits = array('Strawberry', 'Banana', 'Grape'); 
 
 	for($fruit = 0; $fruit < count($fruits); $fruit++) 
 	{
 		echo "$fruits[$fruit]\n";
 	}

 	foreach ($fruits as $fruit) 
 	{
 		echo $fruit . PHP_EOL;
 	}


$fruits = array('Strawberry' => 'Red', 'Banana' => 'Yellow', 'Grape' => 'Green'); 
 
	foreach($fruits as $key => $color) 
	{
 		echo "This is a $key and its color is $color!\n";
 	}
 

// v same as this ^


$fruits = [
 	'apples' => 'red',
 	'oranges' => 'orange',
 	'bananas' => 'yellow',
 	'donuts' => 'purple'
 	];

	foreach ($fruits as $fruit => $color) 
	{
		echo "{$fruit} are {$color}\n";
	}