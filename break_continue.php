<?php

// for ($i = 2; $i <= 100; $i += 2) {
//     echo $i . "\n";
//         continue; //exit the (for) loop
//     }
// echo "DONE!\n";

// for ($i = 1; $i <= 100; $i++) {
// 	echo $i . "\n";
//     if ($i >= 10) { 
//         break; 
    	
// 	}
// }
// echo "DONE!\n";

// if ($fruit = 'apple') {
// 	echo 'Apples are red' . PHP_EOL;
// } elseif ($fruit == 'orange') {
// 	echo 'Oranges are orange' . PHP_EOL;
// } elseif ($fruit == 'banana') {
// 	echo 'bananas are for minions' . PHP_EOL;
// } elseif ($fruit == 'donut') {
// 	echo 'Donuts are good' . PHP_EOL;
// } else {
// 	echo '$fruit is unknown';
// }


$fruit = 'donut';

switch($fruit) {
	case 'apple':
		echo 'Apples are red' . PHP_EOL;
		break;
	case 'orange':
		echo 'Oranges are orange' . PHP_EOL;
		break;
	case 'banana':
		echo 'bananas are yellow' . PHP_EOL;
		break;
	case 'donut':
		echo 'donuts are good' . PHP_EOL;	
		break;	
	default:
		echo '$fruit is unknown' . PHP_EOL;
		break;
}