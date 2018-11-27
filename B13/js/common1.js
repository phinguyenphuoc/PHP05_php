
$('#price1').click(function(){
	var price1=$('#amount1').val();
	var price2=$('#amount2').val();
	price1=price1*20;
	price2=price2*33;
	$('#price1').html(price1+"$");
	$('#price2').html(price2+"$");
});
