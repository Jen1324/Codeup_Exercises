<?php

for ($num = 1; $num <= 100; $num++) {

	if ($num % 15 == 0) {
		echo "FizzBuzz\n";
    }

	elseif ($num % 3 == 0) {
		echo "Fizz\n";
	}
	
	elseif ($num % 5 == 0) {
		echo "Buzz\n";

	}

	else {
		echo "$num\n";
		} 

}