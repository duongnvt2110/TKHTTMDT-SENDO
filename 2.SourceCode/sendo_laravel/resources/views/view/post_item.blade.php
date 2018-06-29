@extends('menu')
@section('content')
{!!Form::open(array('class'=>'modal-content animate','method'=>'post'))!!}
<div class="Sort">
  <select class="Select" id="option_post" name="option" >
    <option value="0" selected=""></option>
    @foreach ($shop as $value)
    <option value='{{$value->sellerId}}'>{{$value->shopName}}</option>
    @endforeach
  </select>
</div>
{!!Form::close()!!}
{!!Form::open(array('class'=>'modal-content animate','method'=>'post','action'=>'PostController@post_product'))!!}
{{-- <form action="class/post_item.php" method="post" enctype="multipart/form-data" class="form-product"> --}}
  <div class='shopid'>
    <label class="col-lg-2 col-md-3 col-xs-2">IDSHOP *</label>
    <div class="shopId form-info col-lg-10 col-md-8 col-xs-9">
      <input type="text" name="shopid" placeholder="IDSHOP">
    </div>
  </div>
  <div class='name'>
    <label class="col-lg-2 col-md-3 col-xs-2">Name *</label>
    <div class="form-info col-lg-10 col-md-8 col-xs-9">
      <input type="text" name="name" placeholder="Tên Sản Phẩm">
    </div>
  </div>
  <div class='sku'>
    <label class="col-lg-2 col-md-3 col-xs-2">Mã Sản Phẩm *</label>
    <div class="form-info col-lg-10 col-md-8 col-xs-9">
      <input type="text" name="sku" placeholder="SKU">
    </div>
  </div>
  <div class='prices'>
    <label class="col-lg-2 col-md-3 col-xs-2">Giá *</label>
    <div class="form-info col-lg-10 col-md-8 col-xs-9">
      <input type="text" name="prices" placeholder="VND">
    </div>
  </div>
  <div class='volume'>
    <label class="col-lg-2 col-md-3 col-xs-2">Khối Lượng *</label>
    <div class="form-info col-lg-10 col-md-8 col-xs-9">
      <input type="text" name="volume" placeholder="g">
    </div>
  </div>
  <div class='Amount '>
    <label class="col-lg-2 col-md-3 col-xs-2">Số lượng hàng *</label>
    <div class="form-info col-lg-10 col-md-8 col-xs-9">
      <input type="text" name="amount">
    </div>
  </div>
  <div class='Descrice '>
    <label class="col-lg-2 col-md-3 col-xs-2">Mô Tả *</label>
    <div class="form-info col-lg-10 col-md-8 col-xs-9">
      <textarea name="contact_list"></textarea>
    </div>
  </div>
  <div class='button '>
    <input type="submit" name="save" value="save">
  </div>
  {!!Form::close()!!}
  @endsection