<?php  
$cart = array(
		1 => array('id' => 1, 'quantity' => 2),
		5 => array('id' => 5, 'quantity' => 3),
		8 => array('id' => 8, 'quantity' => 1),
		9 => array('id' => 9, 'quantity' => 7)
);
	$arr = array_keys($cart);
	$count = count($arr);
	$text='';
	for($i=0; $i<$count; $i++){
		if($i == ($count-1)){
			$text = $text.$arr[$i];
			continue;
		}
		$text = $text.$arr[$i].", ";
	}
	$text = "(".$text.")";
	echo $text;
	echo "<br>";
	function swap(&$a, &$b){
		$temp = $a;
		$a = $b;
		$b = $temp;
	}
	$arr1 = array(9,6,7,3,4,7,1,2);
	$count1 = count($arr1);
	for($m = 0; $m < $count1; $m++){
		for($n = 0; $n < ($count1 - 1); $n++){
			if($arr1[$n]>$arr1[$n+1]){
				swap($arr1[$n],$arr1[$n+1]);
			}
		}
	}
	for($k = 0; $k < $count1; $k++){
		echo $arr1[$k];
	}
?>
