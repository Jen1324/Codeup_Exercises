<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function getnames($names) {
	if (in_array('Tina', $names) !== FALSE) {
		echo "Name found!\n";
	}	else {
			echo "Name not found. Please try agian.\n";
		}

}
	
getnames($names);


