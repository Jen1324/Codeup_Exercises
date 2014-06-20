<?php

$hand = array ('A-H', '5-D', 'K-C', 'A-S', '4-H');

// This is the function that we're going to be calling. Even though it has $hand in its definition, it's not necessarily
// the same $hand as line 4; its value will be whatever we pass to it when we actually call the function later, which will just happen to be
// the $hand defined on line 4.




	// We're going to want to keep track of how many aces we have, in case counting them as 11 makes us go over
	// This is our total that we will be increasing

	
// We're now going to loop over our $hand array. Each element in it will be a card's VALUE-SUIT.
	

		// Since $card is VALUE-SUIT, we want to explode (split) it at the dash (-). It will return: array('value', 'suit');
		

		// We really don't care about the suit, so we'll just take the element from our $split array that we know is our card value, and
		// store that in another variable
	


		 // First we'll check if our card value is already a number. If so, we can just add it right to our $total!
	
			// If our card value is an A, for Ace, then we'll treat it as 11 and add that to $total.
			// We'll also increase our $aces variable by 1, to signify that we've hit an Ace
		 // If it's not a number and it's not an A(ce), then it must be a King/Queen/Jack, which is always a 10.
				// So add 10 to our total.
	

	// Now that we're done counting our $hand and we have our $total, we will have this loop check if:
	// 1. $total is currently greater than 21
	// 2. we have any $aces

	
		 // If our $total is over 21 and we have at least 1 ace, we'll subtract 11 from our total (the original value of the ace)
		// and then add 1 to the total, our new ace value. We could also just subtract 10 from $total, but this way you understand better
	
	// Since we now converted one of our aces from 11 to 1, we'll subtract 1 from our $aces. This way if we're STILL over 21
		// and we still have at least one ace left, our while loop can do this process all over again.


	 // Now, return our $total so that it can be used by whatever called this function



echo gettotal($hand) . PHP_EOL; // We're going to call our function, passing it our $hand array, and then echo the response out

	//loop through hand and calculate total value
	//use "explode" function to seperate card suit and value
	//aces count as 11 unless you are over 21 and then they count as 1
	//K, Q, and J count as 10
	//numeric cards count as their value