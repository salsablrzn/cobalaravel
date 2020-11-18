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
              <h3> &nbsp;&nbsp;Form Product</h3>
                <form class="form-horizontal form-label-left" action="ProductStore" method="post">
                   <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputProductID">Product ID<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputProductID"type="text" placeholder="Auto Product ID" name="productid" disabled value="" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputCategoryID">Category ID<span class="required"> * </span></label>
                    <br>
                    <select name="categoriesid" class="form-control mb-3 mb-3">
                      @foreach($category as $C)
                      @if ($C->Status == 1)
                      <option value=" {{ $C->Category_ID}}">
                      {{ $C->Category_Name}}
                      @endif
                      </option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputProductName">Product Name<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputProductName"type="text" placeholder="Enter Product Name" name="productname" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputProductPrice">Product Price<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputProductPrice"type="text" placeholder="Enter Product Price" name="productprice" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputProductStock">Product Stock<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputProductStock"type="text" placeholder="Enter Product Stock" name="productstock" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputExplanation">Explanation<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputExplanation"type="text" placeholder="Enter Explanation" name="explanation" required>
                  </div>

                  <div class="form-group">
                     <label for="exampleInputStatus">Status<span class="required"> * </span></label>
                     <br>
    <select name='status' class="form-control mb-3 mb-3">
    <option disabled selected style="padding: 10px">Pilih Status  </option>
    <option value='0'>Non Aktif</option>
    <option value='1'>Aktif</option>
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