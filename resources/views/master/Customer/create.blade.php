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
              <h3> &nbsp;&nbsp;Form Customer</h3>
                <form class="form-horizontal form-label-left" action="CustomerStore" method="post">
                   {{ @csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputCustomerID">Customer ID<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputCustomerID"type="text" placeholder="Auto Customer ID" name="customerid" disabled value="" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFirstName">First Name<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputFirstName"type="text" placeholder="Enter First Name" name="firstname" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputLastName">Last Name<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputLastName"type="text" placeholder="Enter Last Name" name="lastname" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPhone">Phone<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputPhone"type="text" placeholder="Enter Phone" name="phone" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail">Email<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputEmail"type="text" placeholder="Enter Email @gmail.com" name="email" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputStreet">Street<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputStreet"type="text" placeholder="Enter Street" name="street" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputCity">City<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputCity"type="text" placeholder="Enter City" name="city" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputState">State<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputState"type="text" placeholder="Enter State" name="state" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputZipCode">Zip Code<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputZip Code"type="text" placeholder="Enter Zip Code" name="zipcode" required>
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