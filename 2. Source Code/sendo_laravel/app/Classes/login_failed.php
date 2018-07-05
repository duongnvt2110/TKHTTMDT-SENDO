<?php
	include '../php/sendo_lib.php';
	$http=new sendo();
	$http->deleteCookie();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>Login Falied</div>
	<script type="text/javascript">
		var delayInMilliseconds = 5000; //1 second

		setTimeout(function() {
			window.location.href='http://localhost/Sendo/account.php';
		  //your code to be executed after 1 second
		}, delayInMilliseconds);
		

	</script>
</body>
</html>