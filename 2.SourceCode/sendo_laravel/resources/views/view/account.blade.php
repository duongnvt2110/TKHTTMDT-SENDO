@extends('menu')
@section('content')
<button onclick="document.getElementById('id01').style.display='block'">Login</button>

<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" 
  class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  {!!Form::open(array('action' =>'AccountController@login','class'=>'modal-content animate','method'=>'post'))!!}
  {{-- <form method='post' class="modal-content animate" action="{{route('login-account')}}"> --}}
    <div class="imgcontainer">
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit">Add User</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
{!!Form::close()!!}
</div>
<br>
<!-- infomation account -->
<table class="table dataTable" id="tb-product-list" role="grid">
  <thead>
    <!-- ko if: Template()==1-->
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
@endsection