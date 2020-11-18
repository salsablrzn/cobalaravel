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
                <h3>&nbsp;&nbsp;Form Sales</h3>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputNotaID">Nota ID<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputNotaID"type="text" placeholder="Enter Nota ID">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputCustomerID">Customer ID<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputCustomerID"type="text" placeholder="Enter Customer ID">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputUserID">User ID<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputUserID"type="text" placeholder="Enter User ID">
                  </div>

				          <div class="form-group">
                    <label for="exampleInputNotaDate">Nota Date<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputNotaDate"type="text" placeholder="Enter Nota Date">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputTotalPayment">Total Payment<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputTotalPayment"type="text" placeholder="Enter Total Payment">
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