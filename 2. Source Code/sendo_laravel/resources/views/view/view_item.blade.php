@extends('menu')
@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
               <h1 class="page-header">Product List</h1>
           </div>


    <!-- /.col-lg-12 -->
    <table class="table table-striped table-bordered table-hover" id="dataTables-example" role="grid">
      <!--   <div class="col-lg-12">
        </div> -->

<div class="BodyProductList" >
            <div class="ResultSort">
             {!!Form::open(array('class'=>'modal-content animate','method'=>'post'))!!}
             <select class="Select" id="option" name="option" >
                <option value="0" selected="">Chọn 1 lựa chọn</option>
                <option value="1" >Tất cả sản phẩm</option>
                @foreach ($shop as $value)
                <option value='{{$value->sellerId}}'>{{$value->shopName}}</option>
                @endforeach
            </select>
            {!!Form::close()!!}
        </div>
    </div>


    <thead>
        <!-- ko if: Template()==1-->
        <tr>
            <th class="col-ck">
                <div class="checkbox-nice">
                    <input type="checkbox" id="checkbox-all" data-bind="checked: SelectedAll">
                    <label for="checkbox-all">&nbsp;</label>
                </div>
            </th>

            <th class="text-center col-prod-code" aria-controls="tb-product-list">Mã sp</th>
            <th class="col-prod-inf"><span>Tên SP</span></th>
            <th class="text-center col-price"><span>Giá (VNĐ)</span></th>
            <th class="text-center col-condition"><span>Tình trạng</span></th>
            <th class="text-center"><span>Số lượng</span></th>
            {{-- <th class="text-center col-prod-code" aria-controls="tb-product-list">ID SHOP</th> --}}
            <th class="text-center col-prod-code" aria-controls="tb-product-list">Tên Shop</th>
        </tr>
    </thead>

    <tbody class='content_items' >
    </tbody>
</table>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>

@endsection
