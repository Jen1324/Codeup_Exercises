<?php

// This is our starting hand
$hand = array('A-H', '5-D', 'A-C', 'K-S', '4-S');

// This is the function that we're going to be calling. Even though it has $hand in its definition, it's not necessarily
// the same $hand as line 4; its value will be whatever we pass to it when we actually call the function later, which will just happen to be
// the $hand defined on line 4.
function gettotal($hand) {
	$aces = 0; // We're going to want to keep track of how many aces we have, in case counting them as 11 makes us go over
	$total = 0; // This is our total that we will be increasing

	echo "\nLooping over our hand...\n";
	// We're now going to loop over our $hand array. Each element in it will be a card's VALUE-SUIT.
	foreach($hand as $card) {

		// Since $card is VALUE-SUIT, we want to explode (split) it at the dash (-). It will return: array('value', 'suit');
		$split = explode("-", $card);

		// We really don't care about the suit, so we'll just take the element from our $split array that we know is our card value, and
		// store that in another variable
		$value = $split[0];
		echo "- Our card is {$value}\n";


		// First we'll check if our card value is already a number. If so, we can just add it right to our $total!
		if(is_numeric($value)) 
		{
			echo "-- Our card is numeric; adding {$value} to our total: {$total} + {$value} = " . ($total + $value) . "\n";
			$total += $value;
		} 
		elseif($value == 'A') 
		{
			// If our card value is an A, for Ace, then we'll treat it as 11 and add that to $total.
			// We'll also increase our $aces variable by 1, to signify that we've hit an Ace
			echo "-- Our card is an Ace; adding 11 to our total: {$total} + 11 = " . ($total + 11) . "\n";
			$total += 11;
			$aces++;
			echo "--- We've now had {$aces} aces\n";
		} 
		else 
		{
			// If it's not a number and it's not an A(ce), then it must be a King/Queen/Jack, which is always a 10.
			// So add 10 to our total.
			echo "-- Our card is a face card (K/Q/J); adding 10 to our total: {$total} + 10 = " . ($total + 10) . "\n";
			$total += 10;
		}

	}

	print "\nOur total is now {$total}; we'll now check if that's over 21. We also have {$aces} aces.\n";
	// Now that we're done counting our $hand and we have our $total, we will have this loop check if:
	// 1. $total is currently greater than 21
	// 2. we have any $aces
	while($total > 21 && $aces > 0) {
		print "\n- Total is greater than 21 and we have at least one ace ({$ace}); subtracting 10 from total: {$total} - 10 = " . ($total - 10) . "\n";
		// If our $total is over 21 and we have at least 1 ace, we'll subtract 11 from our total (the original value of the ace)
		// and then add 1 to the total, our new ace value. We could also just subtract 10 from $total, but this way you understand better
		$total -= 11;
		$total += 1;

		// Since we now converted one of our aces from 11 to 1, we'll subtract 1 from our $aces. This way if we're STILL over 21
		// and we still have at least one ace left, our while loop can do this process all over again.
		$aces --;
	}

	// Now, return our $total so that it can be used by whatever called this function
	return $total;
}

// We're going to call our function, passing it our $hand array, and then echo the response out
echo "\nOur final total is: " . gettotal($hand) . PHP_EOL;









