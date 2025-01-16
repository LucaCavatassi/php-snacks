<!-- An infinite number of shelves are arranged one above the other in a staggered fashion.
The cat can jump either one or three shelves at a time: 
from shelf i to shelf i+1 or i+3 (the cat cannot climb on the shelf directly above its head), according to the illustration:


Input
Start and finish shelf numbers (always positive integers, finish no smaller than start)

Task
Find the minimum number of jumps to go from start to finish

Example
Start 1, finish 5, then answer is 2 (1 => 4 => 5 or 1 => 2 => 5) -->

<?php 
function cats(int $start, int $finish) {
    // Initialize the number of jumps
    $jumps = 0;
    
    // While start < finish go on
    while ($start < $finish) {
        // If we can jump 3 shelves and still be below the finish
        if ($start + 3 <= $finish) {
            // 1 + 3 < 5 ? Yes --> jumps++ = 1 --> 4 < 5 (while condition) ? Yes --> 4+3 < 5 ? No --> 4+1 = 5 (else) --> jumps++ = 2 --> 5 < 5 ? No --> return
            $start += 3;
        } else {
            // Otherwise, jump 1 shelf
            $start += 1;
        }
        // Increment the jump count
        $jumps++;
    }
    
    return $jumps;
}