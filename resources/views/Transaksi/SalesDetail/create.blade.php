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
              <form role="form">
                <h3>&nbsp;&nbsp;Form Sales Detail</h3>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputNotaID">Nota ID<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputNotaID"type="text" placeholder="Enter Nota ID">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputProductID">Product ID<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputProductID"type="text" placeholder="Enter Product ID">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputQuantity">Quantity<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputQuantity"type="text" placeholder="Enter Quantity">
                  </div>

				<div class="form-group">
                    <label for="exampleInputSellingPrice">Selling Price<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputSellingPrice"type="text" placeholder="Enter Selling Price">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputDiscount">Discount<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputDiscount"type="text" placeholder="Enter Discount">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputTotalPrice">Total Price<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputTotalPrice"type="text" placeholder="Enter Total Price">
                  </div>

                  <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree</a>.</label>
                    </div>
                    <br>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Cancel</button>
                  <button type="submit" class="btn btn-primary">Submit Data</button>
                  
                </div>
              </form>

            </div>
          </div>
        </div>
        </div>
        </div>
@endsection