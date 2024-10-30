<!-- 5. Date and Time

	•	Task: Write a function daysUntilNewYear() that returns the number of days remaining until New Year’s Day (January 1st of the next year). Use the current date to calculate this.
	•	Test Cases:
	•	If today’s date is December 30, the function should return 2.
	•	If today’s date is January 1, it should return 365 (or 366 in leap years).
	•	If today’s date is July 1, it should return 184 (or 185 in leap years).

These tests cover basic skills like conditionals, string manipulation, arrays, associative arrays, and date calculations, all of which are important for a junior developer to master. -->

<?php 
    function daysUntilNewYear() {
        $today = date_create("now");
        $nyd = date_create("2025/01/01");
		$diff = date_diff($nyd,$today);
		var_dump($diff->days);
    }

	daysUntilNewYear();