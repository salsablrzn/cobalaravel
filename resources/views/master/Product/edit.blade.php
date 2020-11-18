@extends('admin/admin')
@section('konten')

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        
           <!-- form start -->
              <h3> &nbsp;&nbsp;Edit Product</h3>
                <form class="form-horizontal form-label-left" action="ProductUpdate" method="post">
                   {{ @csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputProductID">Product ID<span class="required"> * </span></label>
                    <input class="form-control" type="text" placeholder="Auto Product ID" id="productid" name="productid" value=" {{ $product[0]->Product_ID }}" readonly>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputCategoryID">Category ID<span class="required"> * </span></label>
                    <br>
                    <select name="categoriesid" class="form-control mb-3 mb-3">
                      @foreach($Category as $C)
                       @if($C->Category_ID == $product[0]->Category_ID) 
                      <option value=" {{ $C->Category_ID}}" selected>
                        {{ $C->Category_Name}}
                      </option>
                      @else
                      <option value=" {{ $C->Category_ID}}">
                        {{ $C->Category_Name}}
                      </option>
                      @endif
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputProductName">Product Name<span class="required"> * </span></label>
                    <input class="form-control" type="text" placeholder="Enter Product Name" id="productid" name="productname" value=" {{ $product[0]->Product_Name }}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputProductPrice">Product Price<span class="required"> * </span></label>
                    <input class="form-control" type="text" placeholder="Enter Product Price" id="productid" name="productprice" value=" {{ $product[0]->Product_Price }}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputProductStock">Product Stock<span class="required"> * </span></label>
                    <input class="form-control" type="text" placeholder="Enter Product Stock" id="productid" name="productstock" value=" {{ $product[0]->Product_Stock }}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputExplanation">Explanation<span class="required"> * </span></label>
                    <input class="form-control" type="text" placeholder="Enter Explanation" id="productid" name="explanation" value=" {{ $product[0]->Explanation }}">
                  </div>

                  <div class="form-group">
                     <label for="exampleInputStatus">Status<span class="required"> * </span></label>
                     <br>
    <select name='status' class="form-control mb-3 mb-3">
    @if($product[0]->Status==0)
    <option selected value="0">Non Aktif</option>
    <option value='1'>Aktif</option>
    @else
    <option value="0">Non Aktif</option>
    <option selected value='1'>Aktif</option>
    @endif
    </select>
                  </div>
                  <!-- /.card-body -->
                </div>
                <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree.</label>
                    </div>
                    <br>
                  <!-- /.card-body -->
                </div>
                <center>
                <div class="card-footer">
                  <button type="submit" class="btn btn-danger">Cancel</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  
                </div>
                </center>
              </form>

  </div>
</div>
</div>
</div>
@endsection