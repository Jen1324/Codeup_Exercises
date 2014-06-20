<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

function check($variable){
	if(isset($variable)) {
		echo "variable is set\n";
	} elseif(empty($variable)) {
		echo "variable is empty\n";
	}
	
}

check ($nothing);
check ($something);

echo "$array\n";
$serial = serialize($array);
echo "\$array serialized: $serial\n";

$clone = unserialize($serial);
echo "My clone\n";
var_dump($clone);


// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results





// function check($variable, $type) {
//      if($type == ‘set’ && isset($variable)) {
//           echo “variable is SET”;
//      } elseif($type == ‘empty’ && empty($variable)) {
//           echo “variable is EMPTY”;
//      }
// }

// check($nothing, ‘set’);
// check($nothing, ‘empty’);
// check($something, ‘set’);