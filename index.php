<?php


/*
 * Task 1
 */

function repeat(array $num){
	$newString = '';
	$count = 3;

	$comma_separated = implode(",", $num);
	for($i=0 ; $i<$count ; $i++){
		$newString .= $comma_separated;
		
		if($i == $count-1){
			$newString = '[ '.$newString.' ]';
		}else{
		    $newString .= ',';
		}
	}
	echo $newString; 
}

repeat([1,2,3]);

echo '<br><br>';