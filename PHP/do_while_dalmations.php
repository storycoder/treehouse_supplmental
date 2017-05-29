<?php
$dalmations = 101;
do {
	if ($dalmations >= 2) {
		echo "There are now " . $dalmations . " Dalmations. (woof woof)\n";
	} else {
		echo "There is now " . $dalmations . " Dalmation. (woof)\n";
	}

} while (--$dalmations > 0);

//The "--" decrementing operator as placed above (--$dalmations) subtracts/decrements $dalmations by 1. It's called a pre-decrement.//

//When I run this code the last value $dalmations returns in the do/while loop is 101 ala "There is now 1 Dalmation. (woof)"

//When I post-decrement the varible ( ala $dalmations--), the last value returned by the do/while loop is 0 ala "There is now 0 Dalmation. (woof)"

//The logical result for the sentence structure comes from the pre-decrement, --$dalmation as one would not correctly say "There is now 0 Dalmation."

//The reason the loop stops at 1 when pre-decrementing is due to how it returns back to to the top of the loop only after first subtracting 1 from the total value of $dalmations. The final loop stops at 1 because once 1 as the value for $dalmations passes through the while statement, 1 is subtracted immediately from $dalamtions causing the value to now = 0. Accordingly, the while statement stipulates that do/while loop will only continue as long as $dalmations > 0. 

//Post-dercementing (ala $dalamations--) does not subract until after the $dalamtions is first returned to be compared to > 0 and then 1 is subtracted from the value. Thus it will return a 1 value $dalmations which is still greater than zero. Once this comparison in the while statement is confirmed, one is subtracted and $dalamation now = 0 as it makes its final pass through the do statement. 

?>