<?php 
	// // $arr = array();
	// // var_dump($arr); //= console.log(arr)
	// // $arr = array(1, 2, 3, 4);
	// // var_dump($arr);
	// $arr = array('a'=>1,'b'=>2,'c'=>3);
	// var_dump($arr);
	// $arr2 =array(
	// 			array('name'=>'Trung'),
	// 			array('name'=>'Nam'),
	// 			array('name'=>'Thuy')
	// );
	// var_dump($arr2);
	$arr = array(
			'Nam'=>	array('name'=>'Nam','year'=>1997,'email'=>'nam@gmail.com'),
			'Nga'=>	array('name'=>'Nga','year'=>1998,'email'=>'nga@gmail.com'),
			'Huong'=>	array('name'=>'Huong','year'=>1997,'email'=>'huong@gmail.com')
		);
	$arr2 = array('Nam','Nga','Huong');
	function printArr($arr, $arr2){
		for ($i=0; $i < 3; $i++) {
				$x=$arr2[$i]  
				echo $arr['$x']['name'];
				echo " . ";
		}
	}
	printArr($arr,$arr2);
?>