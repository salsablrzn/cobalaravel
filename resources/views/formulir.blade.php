<!DOCTYPE html>
<head>
	<title>
		Belajar Laravel
	</title>
</head>
<body>
	@extends('admin/admin')
@section('konten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Formulir</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
   
          <!-- form start -->
              <h3> &nbsp;&nbsp;Form User</h3>
                <form class="form-horizontal form-label-left" action="UserStore" method="post">
                   {{ @csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputUserID">User ID<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputUserID"type="text" placeholder="Enter User ID" name="userid">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFirstName">First Name<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputFirstName"type="text" placeholder="Enter First Name" name="firstname">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputLastName">Last Name<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputLastName"type="text" placeholder="Enter Last Name" name="lastname">
                  </div>

				          <div class="form-group">
                    <label for="exampleInputEmail">Email<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputEmail"type="text" placeholder="Enter Email" name="email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPhone">Phone<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputPhone"type="text" placeholder="Enter Phone" name="phone">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword">Password<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputPassword"type="password" placeholder="Enter Password" name="password">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputJobStatus">Job Status<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputJobStatus"type="text" placeholder="Enter Job Status" name="jobstatus">
                  </div>

                  <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree</a>.</label>
                    </div>
                    <br>

                 


                    <!-- /.card-body -->

                <div class="card-footer">
                  <submit <a href="UserIndex" type="submit" class="btn btn-primary"</a>Add User</submit>
                  <submit type="submit" class="btn btn-primary">Cancel</submit>
                </div>
              </form>

  </div>
</form>
</div>
  @endsection
</body>
</html>