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
              <h3> &nbsp;&nbsp;Edit User</h3>
                <form class="form-horizontal form-label-left" action="UserUpdate" method="post">
                   <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputUserID">User ID<span class="required"> * </span></label>
                    <input class="form-control" type="text" placeholder="Auto User ID" id="userid" name="userid" value=" {{ $user[0]->User_ID }}" readonly>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFirstName">First Name<span class="required"> * </span></label>
                    <input class="form-control" type="text" placeholder="Enter First Name" id="userid" name="firstname" value=" {{ $user[0]->First_Name }}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputLastName">Last Name<span class="required"> * </span></label>
                    <input class="form-control" type="text" placeholder="Enter Last Name" id="userid" name="lastname" value=" {{ $user[0]->Last_Name }}">
                  </div>

				<div class="form-group">
                    <label for="exampleInputEmail">Email<span class="required"> * </span></label>
                    <input class="form-control" type="text" placeholder="Enter Email @gmail.com" id="userid" name="email" value=" {{ $user[0]->Email }}" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPhone">Phone<span class="required"> * </span></label>
                    <input class="form-control" type="text" placeholder="Enter Phone" id="userid" name="phone" value=" {{ $user[0]->Phone }}" >
                  </div>

                  
                  <div class="form-group">
                    <label for="exampleInputPassword">Password<span class="required"> * </span></label>
                    <input class="form-control" type="password" placeholder="Enter Password" id="userid" name="password" id="pass" value=" {{ $user[0]->Password }}">
                  </div>

                  <div class="form-group">  
                    <label for="exampleInputCoPassword">Confirm Password<span class="required"> * </span></label>
                    <input class="form-control" type="password" placeholder="Enter Confirm Password" name="password" id="copass" onkeyup="cekPass()">
                    <p id="error" style="color:red"></p>
                  </div>

                    <div class="form-group">
                     <label for="exampleInputJobStatus">Job Status<span class="required"> * </span></label>
                     <br>
    <select name='jobstatus' class="form-control mb-3 mb-3">
    @if($user[0]->Job_Status==0)
    <option selected value="0">Non Aktif</option>
    <option value='1'>Aktif</option>
    @else
    <option value="0">Non Aktif</option>
    <option selected value='1'>Aktif</option>
    @endif
    </select>
                  </div>

                  <div class="form-group">
                     <label for="exampleInputJobStatus">Jabatan<span class="required"> * </span></label>
                     <br>
    <select name='jabatan' class="form-control mb-3 mb-3">
    @if($user[0]->Jabatan==0)
    <option selected value="0">Kasir</option>
    <option value='1'>Admin</option>
    @else
    <option value="0">Kasir</option>
    <option selected value='1'>Admin</option>
    @endif
    </select>
                  </div>                  
                  <!-- /.card-body -->

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