@extends('menu')
@section('content')

  <!-- Page Content -->
  <div id="page-wrapper">
        <div class="col-lg-12">
        <h1 class="page-header">Add Product</h1>
        </div>
    <div class="container-fluid" style="height: 810px;">
      <!-- <div class="row"> -->
      
        <!-- /.col-lg-12 -->
        <!-- <div class="col-lg-12"> -->
          <div class="BodyProductList01" >
            <!-- <div class="ResultSort"> -->
                {!!Form::open(array('class'=>'modal-content animate', 'style'=>'padding-left: 20px;','method'=>'post'))!!}
                <div class="Sort"">
                  <select class="Select" id="option_post" name="option" style="padding: auto;">
                    <option value="0" selected="">Chọn</option>
                    @foreach ($shop as $value)
                    <option value='{{$value->sellerId}}'>{{$value->shopName}}</option>
                    @endforeach
                  </select>
                {!!Form::close()!!}

                {!!Form::open(array('class'=>'modal-content animate', 'style'=>'margin-top: -1px;margin-left:0px;margin-right: 100px; margin-bottom:0px; border-radius:0px;height: 640px;width:600px;', 'method'=>'post','action'=>'PostController@post_product'))!!}
                {{-- <form action="class/post_item.php" method="post" enctype="multipart/form-data" >  --}}

                <div class="container01" style="margin-left: 0px;border-radius: 1px;padding-right: 150px; background-color: #Ffffffff;padding: 35px;margin-top: 0px;">
                      <div class="form-group">
                        <label>IDSHOP *</label>
                        <input class="form-control" type="text" name="shopid" placeholder="IDSHOP">
                      </div>

                      <div class="form-group">
                        <label>Name *</label>
                        <input class="form-control" type="text" name="name" placeholder="Tên Sản Phẩm">
                      </div>

                      <div class="form-group">
                        <label>Mã Sản Phẩm *</label>
                        <input class="form-control" type="text" name="sku" placeholder="SKU">
                      </div>

                      <div class="form-group">
                          <label>Giá *</label>
                          <input class="form-control" type="text" name="prices" placeholder="VND">
                      </div>

                      <div class="form-group">
                          <label>Khối Lượng *</label>
                          <input class="form-control" type="text" name="volume" placeholder="Gam">
                      </div>

                      <div class="form-group">
                          <label>Số Lượng Hàng *</label>
                          <input class="form-control" type="text" name="amount">
                      </div>

                      <div class="form-group">
                          <label>Mô Tả *</label>
                          <textarea class="form-control" name="contact_list"></textarea>
                      </div>

                      <input class="btn btn-default" style="background: #9FDAF6" type="submit" name="save" value="Save">
                      <input class="btn btn-default" style="background: #875D62; color: white;" type="reset" name="cancel" value="Cancel">
                </div>
                {!!Form::close()!!}

<!-- </div> -->
<!-- </div> -->
        <!-- </div> -->
          <!-- </div> -->
          <!-- /.row -->
    </div>
        <!-- /.container-fluid -->
      </div>
    <!-- /#page-wrapper -->

@endsection