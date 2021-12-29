<?php
	$time = time();
	print $time ."<br>";
	$lastmonth = $time - 2629743;
	print $lastmonth ."<br>";

	$test =  strtotime($lastmonth);
	$test2 =  strtotime($time);

	$test3 = strtotime("November 30, 2021");

	print $test;
	print "<br>". $test2;
	print "<br>". $test3;