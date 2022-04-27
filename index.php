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

/*
 * Task 2
 */

function reformat($text){
	$vowels = array('a','e','i','o','u','A','E','I','O','U');
	$cleaned = str_replace($vowels,"",$text);
	$cleaned = strtolower($cleaned);
	echo ucfirst($cleaned);
}

reformat("liMeSHArp DeveLoper TEST");

echo '<br><br>';


/*
 * Task 3
 */

function next_binary_number(array $numArr){
	
		$num = implode("", $numArr);	
	    $l = strlen($num);
 

    for ($i = $l - 1; $i >= 0; $i--){
        if ($num[$i] == '0'){
            $num[$i] = '1';
            break;
        }
 
        else
            $num[$i] = '0';
    }
 

    if ($i < 0)
        $num = "1" . $num;
 
	$splitted = str_split($num);
	$comma_separated = implode(",", $splitted);
    echo $comma_separated;
	
}

next_binary_number([1,0]);

?>