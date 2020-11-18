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
              <h3> &nbsp;&nbsp;Edit Customer</h3>
                <form class="form-horizontal form-label-left" action="CustomerUpdate" method="post">
                   {{ @csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputCustomerID">Customer ID<span class="required"> * </span></label>
                    <input class="form-control" type="text" placeholder="Auto Customer ID" id="customerid" name="customerid" value=" {{ $customer->Customer_ID }}" readonly>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFirstName">First Name<span class="required"> * </span></label>
                    <input class="form-control" type="text" placeholder="Enter First Name" id="customerid" name="firstname" value=" {{ $customer->First_Name }}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputLastName">Last Name<span class="required"> * </span></label>
                    <input class="form-control" type="text" placeholder="Enter Last Name" id="customerid" name="lastname" value=" {{ $customer->Last_Name }}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPhone">Phone<span class="required"> * </span></label>
                    <input class="form-control" type="text" placeholder="Enter Phone" id="customerid" name="phone" value=" {{ $customer->Phone }}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail">Email<span class="required"> * </span></label>
                    <input class="form-control" type="text" placeholder="Enter Email @gmail.com" id="customerid" name="email" value=" {{ $customer->Email }}" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputStreet">Street<span class="required"> * </span></label>
                    <input class="form-control" type="text" placeholder="Enter Street" id="customerid" name="street" value=" {{ $customer->Street }}" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputCity">City<span class="required"> * </span></label>
                    <input class="form-control" type="text" placeholder="Enter City" id="customerid" name="city" value=" {{ $customer->City }}" d>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputState">State<span class="required"> * </span></label>
                    <input class="form-control" type="text" placeholder="Enter State" id="customerid" name="state" value=" {{ $customer->State }}" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputZipCode">Zip Code<span class="required"> * </span></label>
                    <input class="form-control" type="text" placeholder="Enter Zip Code" id="customerid" name="zipcode" value=" {{ $customer->Zip_Code }}">
                  </div>

                   <div class="form-group">
                     <label for="exampleInputStatus">Status<span class="required"> * </span></label>
                     <br>
    <select name='status' class="form-control mb-3 mb-3">
    @if($customer->Status==0)
    <option selected value="0">Non Aktif</option>
    <option value='1'>Aktif</option>
    @else
    <option value="0">Non Aktif</option>
    <option selected value='1'>Aktif</option>
    @endif
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