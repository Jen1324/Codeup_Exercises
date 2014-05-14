<?php

// for ($i = 0; $i <= 100; $i += 2) {
//     echo $i . "\n";
//         continue; //exit the (for) loop
//     }
// echo "DONE!\n";

for ($i = 0; $i <= 100; $i++) {
	echo $i . "\n";
    if ($i % 10 == 10) { //evenly divided by two
        break; //exit the (for) loop
    	
	}
}
echo "DONE!\n";