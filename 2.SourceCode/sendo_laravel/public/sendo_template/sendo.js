'use strict'
$(document).ready(function(){

	var click=0;
	
	$('.product').click( function(){
		if(click===0)
		{
			$('.product-treeview').css('display','block');
			click=1;
		}
		else
		{
			$('.product-treeview').css('display','none');
			click=0;
		}
	});
	$('.order').click( function(){
		if(click===0)
		{
			$('.order-treeview').css('display','block');
			click=1;
		}
		else
		{
			$('.order-treeview').css('display','none');
			click=0;
		}
	});
	$('.ship').click( function(){
		if(click===0)
		{
			$('.ship-treeview').css('display','block');
			click=1;
		}
		else
		{
			$('.ship-treeview').css('display','none');
			click=0;
		}
	});

	// Option account
	$("#option").change(function()
	{
		var txt=$(this).val();
		if(txt=='')
		{
			$(".content_items").css('display','none');
		}
		else
		{	
			$.ajaxSetup({
			  headers: {
			    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			  }
			});
			$.ajax({
				type:'post',
				url:'show-item',
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
			$.ajaxSetup({
			  headers: {
			    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			  }
			});
			$.ajax({
				url:"get-shopid",
				type:"post",
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