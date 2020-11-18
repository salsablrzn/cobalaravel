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
              <h3> &nbsp;&nbsp;Form User</h3>
                <form class="form-horizontal form-label-left" action="UserStore" method="post">
                  {{ @csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputUserID">User ID<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputUserID"type="text" placeholder="Auto User ID" name="userid" disabled value="" required>
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
                    <label for="exampleInputEmail">Email<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputEmail"type="text" placeholder="Enter Email @gmail.com" name="email" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPhone">Phone<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputPhone"type="text" placeholder="Enter Phone" name="phone" required>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword">Password<span class="required"> * </span></label>
                    <input class="form-control" type="password" placeholder="Enter Password" name="password" id="pass">
                  </div>

                  <div class="form-group">  
                    <label for="exampleInputCoPassword">Confirm Password<span class="required"> * </span></label>
                    <input class="form-control" type="password" placeholder="Enter Confirm Password" name="password" id="copass" onkeyup="cekPass()">
                    <p id="error" style="color:red"></p>
                  </div>

                   <div class="form-group">
                     <label for="exampleInpuJobStatus">Job Status<span class="required"> * </span></label>
                     <br>
    <select name='jobstatus' class="form-control mb-3 mb-3">
    <option disabled selected style="padding: 10px">Pilih Job Status  </option>
    <option value='0'>Non Aktif</option>
    <option value='1'>Aktif</option>
    </select>
                  </div>

                  <div class="form-group">
                     <label for="exampleInpuJobStatus">Jabatan<span class="required"> * </span></label>
                     <br>
    <select name='jabatan' class="form-control mb-3 mb-3">
    <option disabled selected style="padding: 10px">Pilih Jabatan  </option>
    <option value='0'>Admin</option>
    <option value='1'>Kasir</option>
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

<script>
  function cekPass()
  {
    var pass = document.getElementById('pass').value;
    var copass = document.getElementById('copass').value;
    var text = document.getElementById('error');
    if(pass != copass)
    {
      text.style.color = 'red';
      text.innerHTML='Password Salah';
    }
    else
    {
      text.style.color = 'green';
      text.innerHTML='Password Benar';
    }
  }
</script>
@endsection