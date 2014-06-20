<?php

function error($a, $b) {
	return "ERROR: Both $a and $b should be numbers.";
}

function adder($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return $a + $b . PHP_EOL;
  	} else {
		echo error($a, $b);
	}
		echo PHP_EOL;
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return $a - $b . PHP_EOL;
  	} else {
		echo error($a, $b);
	}
		echo PHP_EOL;
}

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return $a * $b . PHP_EOL;
  	} else {
		echo error($a, $b);
	}
		echo PHP_EOL;
}

function divide($a, $b) {
if ($a == 0 || $b == 0) {
return false; 
  } elseif (is_numeric($a) && is_numeric($b)) {
return $a / $b . PHP_EOL; 
  } else {
echo error($a, $b);
  }
echo PHP_EOL;
}

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return $a % $b;
  	} else {
		echo error($a, $b);
	}
		echo PHP_EOL;
}


echo adder (7, 9);
echo subtract ("hi", "hi");
echo multiply (hi, hi);
echo divide (5, 10); 
echo modulus ('hi', 'hi');