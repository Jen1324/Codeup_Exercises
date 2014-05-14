<?php

for ($i = 2; $i <= 100; $i += 2) {
    echo $i . "\n";
        continue; //exit the (for) loop
    }
echo "DONE!\n";

for ($i = 1; $i <= 100; $i++) {
	echo $i . "\n";
    if ($i >= 10) { 
        break; 
    	
	}
}
echo "DONE!\n";