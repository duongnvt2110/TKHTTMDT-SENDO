
@extends('menu')
@section('content')
<!-- infomation account -->
<div id="page-wrapper">
  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Account List</h1>
      </div>
      <!-- /.col-lg-12 -->
    <button style="border: 2px; border-radius:4px ; color: #0B0C0C; padding-top: 8px; padding-bottom: 8px; padding-left: 15px; padding-right: 15px; background-color: #9FDAF6; font-size: 18px;"
      onclick="document.getElementById('id01').style.display='block'">
      <b>Login</b>
    </button>
    <br>
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
          <br>
          <tr>
            <th class="col-ck">
              <div class="checkbox-nice">
                <input type="checkbox" id="checkbox-all" data-bind="checked: SelectedAll">
                <label for="checkbox-all">&nbsp;</label>
              </div>
            </th>
            <th class="text-center col-prod-code" aria-controls="tb-product-list">Shop ID</th>
            <th class="text-center col-prod-code" aria-controls="tb-product-list">Tên Shop</th>
          </tr>
        </thead>

        <tbody >
          @foreach ($account as $value)
          <tr>
            <td class="col-ck">
              <div class="checkbox-nice">
                <input type="checkbox" id="checkbox-all" data-bind="checked: SelectedAll">
                <label for="checkbox-all">&nbsp;</label>
              </div>
            </td>
            <td class="col-prod-inf"><span>{{$value->shopId}}</span></td>
            <td class="text-center col-prod-code" aria-controls="tb-product-list">{{$value->shopName}}</td>
          </tr>
          @endforeach
        </tbody>

      </table>
    </div>
    <!-- /.row -->
    

<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
 <!-- <div id="page-wrapper"> -->
            <!-- <div class="container-fluid"> -->
                <!-- <div class="row" style="margin-top: 20px;"> -->
                   <!--  <div class="col-lg-12">
                        <h1 class="page-header" style="float: center;"></h1>
                    </div> -->
                    <!-- /.col-lg-12 -->
                    <!-- <div class="col-lg-6" style="padding-bottom:120px"> -->
                        
                       <!--  <form action="" method="POST"> 

                        <form> -->

                        <!-- Modal Content -->
  {!!Form::open(array('action' =>'AccountController@login','class'=>'modal-content animate','method'=>'post'))!!}
  {{-- <form method='post' class="modal-content animate" action="{{route('login-account')}}"> --}}

    <div class="container" style="border-radius: 1px;">
      <b><h3> Login</h3></b>
      <label for="uname"><b>Username (*)</b></label>
      <input class="form-control" type="text" placeholder="Enter Username" name="uname" required>
      <br>

      <label for="psw"><b>Password (*)</b></label>
      <input class="form-control" type="password" placeholder="Enter Password" name="psw" required>
      <br>

      <button type="submit"><b>Add User</b></button>

      <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      <br>

      <button style="padding-left: 14px; padding-right: 14px;" type="button" onclick="document.getElementById('id01').style.display='none'" ><b>Cancel</b></button>
      <span class="psw"><b>Forgot <a href="#">password?</a></b></span>
    </div>
    {!!Form::close()!!}

                    <!-- </div> -->
                <!-- </div> -->
                <!-- /.row -->
  </div>
            <!-- /.container-fluid -->
</div>


  </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

@endsection