<?php 

fwrite(STDOUT, "Please place a starting number.\n");
$start = trim(fgets(STDIN));

fwrite(STDOUT, "Please place an ending number.\n");
$end = trim(fgets(STDIN));

echo "Here are the numbers between $start and $end.\n";

for ($num = $start; $num <= $end; $num++) {
	echo "$num\n";
}



