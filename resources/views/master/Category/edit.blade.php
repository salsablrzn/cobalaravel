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
              <h3> &nbsp;&nbsp;Edit Category</h3>
                <form class="form-horizontal form-label-left" action="CategoriesUpdate" method="post">
                   {{ @csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputNama">Category ID<span class="required"> * </span></label>
                    <input class="form-control" type="text" placeholder="Enter Category ID" id="categoriesid" name="categoriesid" value=" {{ $category->Category_ID }}" readonly>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputCategoryName">Category Name<span class="required"> * </span></label>
                    <input class="form-control" type="text" placeholder="Enter Category Name" required="required" name="categoriesname" value=" {{ $category->Category_Name }}">
                  </div>

                  <div class="form-group">
                     <label for="exampleInputStatus">Status<span class="required"> * </span></label>
                     <br>
    <select name='status' class="form-control mb-3 mb-3">
    @if($category->Status==0)
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
                      <label class="custom-control-label" for="exampleCheck1">I agree</a>.</label>
                    </div>
                    <br>
                     <!-- /.card-body -->
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
              
  </div>
</div>
@endsection