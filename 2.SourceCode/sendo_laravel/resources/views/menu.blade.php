<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<base href="{{asset('')}}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	{{-- css library --}}
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="../public/sendo_template/sendo.css">

	{{-- JS library --}}
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<script
	src="https://code.jquery.com/jquery-3.3.1.js"
	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	crossorigin="anonymous"></script>
	
	<!-- jQuery UI 1.11.4 -->
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
	<script  src="../public/sendo_template/sendo.js"></script>
</head>
<body class=''>
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item ">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Features</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Pricing</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">Disabled</a>
					</li>
				</ul>
			</div>
		</nav>

		<!-- Main Sidebar Container -->
		<aside class="menu_left background-silde-bar ">
			<a href="" class='brand-link'>
				<img src="#" class='brand-img'>
				<span class='brand-text'>SenDo Management</span>
			</a>
			<ul class="nav">
				<li class="nav-item navar-treeview has-treeview">
					<a class="nav-link  account" href="{{route('view-account')}}">
						<p>Account</p>
					</a>                                              
				</li>
				<li class="nav-item navar-treeview has-treeview">
					<a class="nav-link  product">
						<p>Sản Phẩm</p>
					</a>                                              
					<ul class="nav nav-treeview product-treeview" style="display:none">
						<li class="nav-item">
							<a class="nav-link " href="{{route('view-item')}}">Xem Sản Phẩm</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="{{route('post-item')}}">Đăng Sản Phẩm</a>
						</li>
					</ul>
				</li>
				<li class="nav-item  has-treeview">
					<a class="nav-link  order">
						<p>Đơn Hàng</p>
					</a>                                              
					<ul class="nav nav-treeview order-treeview" style="display:none">
						<li class="nav-item">
							<a class="nav-link " href="{{route('view-order')}}">Xem Đơn Hàng</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#">Tạo Đon Hàng</a>
						</li>
					</ul>
				</li>
				<li class="nav-item has-treeview">
					<a class="nav-link  ship" href="#">
						<p>Vận Chuyển</p>
					</a>                                              
					<ul class="nav nav-treeview ship-treeview" style="display:none">
						<li class="ship-item">
							<a class="nav-link " href="#">Xem Sản Phẩm</a>
						</li>
						<li class="ship-item">
							<a class="nav-link " href="#">Đăng Sản Phẩm</a>
						</li>
					</ul>
				</li>
				<li class="nav-item has-treeview">
					<a class="nav-link disabled" href="#">Disabled</a>
				</li>
			</ul>
		</aside>
		<div class='content'>
		@yield('content')
		</div>
	</div>
</body>
</html>