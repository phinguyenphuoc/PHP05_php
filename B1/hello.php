<?php  
	echo "Hello World.<br>";
	function sumAb($a, $b){
		echo "$a+$b=";
		echo $a+$b."<br>";
	}
	function subAb($a, $b){
		echo "$a-$b=";
		echo $a-$b."<br>";
	}
	sumAb(2,3);
	subAb(3,2);
	for($i=0; $i<10; $i++){
		switch ($i) {
			case 2:
				echo "thu 2<br>";
				break;
			case 3:
				echo "thu 3<br>";
				break;
			case 4:
				echo "thu 4<br>";
				break;
			case 5:
				echo "thu 5<br>";
				break;
			case 6:
				echo "thu 6<br>";
				break;
			case 7:
				echo "thu 7<br>";
				break;
			case 8:
				echo "cn<br>";
				break;
			
			default:
				echo "khong phai ngay trong tuan<br>";
				break;
		}
	}
?>