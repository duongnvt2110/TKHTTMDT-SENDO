<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<base href="{{asset('')}}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	{{-- css library --}}
	
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<!-- <link type="text/css" rel="stylesheet" href="../public/sendo_template/sendo.css"> -->

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
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">	
	<link rel="stylesheet"  href="css/sb-admin-2.css">
	<link rel="stylesheet"  href="css/custom.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
	ul#side-menu{
		padding-left: 10px;
		margin-right: 10px;
	}
	li.menu a.menu-sub{
		cursor: pointer;
	}
	li.menu a.menu-sub:hover{
		background-color: #FF754F;
	}

	li.menu ul a.menu-sub1{
		padding: 10px;
		text-align: center;
		cursor: pointer;
	}

	li.menu ul i.fa{
		margin-right: 15px;
	}

	li.menu ul a.menu-sub1:hover{
		background-color: #FF754F;
	}

	</style>
</head>


<body>
	<div class="wrapper">
		<!-- Navbar -->

		<nav class="navbar navbar-default navbar-static-top" role="navigation" style="background-color: #FF754F; margin-bottom: 0 ">
            
            <!-- /.navbar-header -->
			<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand">
                	<b style="color: white">SENDO MANAGEMENT</b>
                </div>

            </div>
            <!-- /.navbar-top-links -->

           <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <br>
                            <!-- /input-group -->
                        </li>

                       <!--  <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                        	<ul class="nav navbar-nav">
                        		<li class="dropdown">
                        			<a href="#" class="fa fa-users fa-fw" class="dropdown-toggle" data-toggle="dropdown">User<b class="caret"></b></a>
                        			<ul class="dropdown-menu multi-column " style="width: 170px;"> 
                        				<ul class="nav nav-second-level">
                        					<li>
                        						<a href="{{route('view-account')}}">List User</a>
                        					</li>
                        					<li>
                        						<a href="#">Login</a>
                        					</li>
                        				</ul>
                        			</ul>
                        		</li>

                        	</ul>
                        </div> -->

                        <!-- <li class="main-menu"> -->
                        	<!-- <li>
                            	<a href="index" class="menusub1"><i class="fa fa-users fa-fw"></i>User<span class="fa arrow"></span></a>
                            	<ul class="product-treeview nav nav-second-level">
                                	<li>
                                   	 	<a href="{{route('view-account')}}">List User</a>
                                	</li>
                                	<li>
                                   	 	<a href="#">Login</a>
                               		 </li>
                            	</ul>
                        	</li> -->
                        <li class="menu">
                        	<a class="menu-sub" href="{{route('view-account')}}">
                        		<i class="fa fa-users fa-fw"></i>Account</a>           
                            	<!-- <ul class="nav nav-treeview product-treeview" style="display:none">
                            		<a class="" href="{{route('view-account')}}">List User</a>
                            	</ul> -->
                        </li>

                        <li class="menu">
                            <a class="menu-sub nav-link product"><i class="fa fa-cube fa-fw"></i>Product
                            	<span class="fa arrow"></span></a>           
                            <ul class="nav nav-treeview product-treeview" style="display:none">
                            	<li class="nav-item">
                            		<a class=" menu-sub1" href="{{route('view-item')}}">
                            			<i class="fa fa-angle-right"></i>Xem Sản Phẩm</a>
                            	</li>
                            	<li class="nav-item">
                            		<a class=" menu-sub1" href="{{route('post-item')}}">
                            		<i class="fa fa-angle-right"></i>Đăng Sản Phẩm</a>
                            	</li>
                            </ul>
                        </li>

							<!-- <li>
                            	<a href="index" class="menusub1"><i class="fa fa-cube fa-fw"></i>Product<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level menusub4">
                                <li>
                                    <a href="{{route('view-item')}}">List Product</a>
                                </li>
                                <li>
                                    <a href="{{route('post-item')}}">Add Product</a>
                                </li>
                            </ul>
                        </li> -->

                        
                        <li class="menu">
                            <a class="menu-sub nav-link order"><i class="fa fa-file"></i> Bill
                            	<span class="fa arrow"></span></a>           
                            <ul class="nav nav-treeview order-treeview" style="display:none">
                            	<li class="nav-item">
                            		<a class=" menu-sub1" href="index">
                            			<i class="fa fa-angle-right"></i>Xem Đơn Hàng</a>
                            	</li>
                            	<li class="nav-item">
                            		<a class=" menu-sub1" href="index">
                            		<i class="fa fa-angle-right"></i>Tạo Đơn Hàng</a>
                            	</li>
                            </ul>
                        </li>

                        <li class="menu">
                        	<a href="index" class="menu-sub"><i class="fa fa-truck"></i> Shipping </a>
                        	<ul class="nav nav-second-level">
                               <!--  <li>
                                    <a href=""></a>
                                </li> -->
                            </ul>
                        </li>

                        <li class="menu">
                        	<a href="index" class="menu-sub"><i class="fa fa-close"></i> Disabled </a>
                        	<ul class="nav nav-second-level">
                               <!--  <li>
                                    <a href=""></a>
                                </li> -->
                            </ul>
                         <li>
                        <!-- </li> -->
                        

                            <!-- /.nav-second-level -->
                        <!-- </li> -->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
        </nav>
        
        @yield('content')
		
	</div>
</body>
</html>