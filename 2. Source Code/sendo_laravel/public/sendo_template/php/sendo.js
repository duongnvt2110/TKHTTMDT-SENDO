$(document).ready(function(){

	// var request_Code;
	// var text;
	// get();
	// function getCode()
	// {
	// 	var xhttp = new XMLHttpRequest();
	// 	xhttp.onreadystatechange = function() {
	// 		if (this.readyState == 4 && this.status == 200) 
	// 		{
	// 			text=  xhttp.responseText;
	// 			text=text.split('value="');
	// 			text=text[2].split('"');
	// 			return callback(text[0]);
	// 		}
	// 		xhttp.open("GET", "https://ban.sendo.vn/mo-shop", false);
	// 		xhttp.send("");
	// 	};

	// }
	$("#option").change(function()
	{
		var txt=$(this).val();
		if(txt=='')
		{
			$(".content_items").css('display','none');
		}
		else
		{
			$.ajax({
				url:"class/view_item.php",
				type:"get",
				data:{search:txt},
				dataType:"text",
				success:function(data){
					$(".content_items").html(data);
				},
				async:false
			});

		}
	});
	$("#option_post").change(function()
	{
		var txt=$(this).val();
		if(txt=='')
		{
			$(".content_items").css('display','none');
		}
		else
		{
			$.ajax({
				url:"class/get_shopId.php",
				type:"get",
				data:{search:txt},
				dataType:"text",
				success:function(data){
					$(".shopId").html(data);
				},
				async:false
			});

		}
	});
});