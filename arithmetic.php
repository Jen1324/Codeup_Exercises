<?php

function error($a, $b) {
	echo "ERROR: Both $a and $b should be numbers.";
}

function adder($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a + $b . PHP_EOL;
  } else {
		error($a, $b);
}
		echo PHP_EOL;
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a - $b . PHP_EOL;
  } else {
		error($a, $b);
}
		echo PHP_EOL;
}

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a * $b . PHP_EOL;
  } else {
		error($a, $b);
}
		echo PHP_EOL;
}

function divide($a, $b) {
	if ($a == 0 || $b == 0) {
		echo 'Error: Can not divide by zero.';
  }	elseif (is_numeric($a) && is_numeric($b)) {
		echo $a / $b . PHP_EOL; 
  } else {
		error($a, $b);
  }
		echo PHP_EOL;
}

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a % $b;
  } else {
		error($a, $b);
}
		echo PHP_EOL;
}


adder ('hi', 'hi');
subtract ("hi", "hi");
multiply (hi, hi);
divide (5, 0); 
modulus ('hi', 'hi');