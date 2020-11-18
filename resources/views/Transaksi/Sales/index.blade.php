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
              <li class="breadcrumb-item active">Tabel</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
<div class="float-sm-right">   
<label>Show<select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label>
</div> 
      </div><!-- /.container-fluid -->
    </div>

    <div class="col-sm-6">
            &nbsp;
            <a href="../PosCreate" class="btn btn-success" ><i class="material-icons"></i> <span>Add New Sales</span></a>     
          </div>
    <br>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Sales</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>  
                    <tr>
                        <th scope="row">No.</th>
                        <th>Nota ID</th>
                        <th>Customer ID</th>
                        <th>User ID</th>  
                        <th>Nota Date</th>
                        <th>Total Payment</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                      
                      @foreach($sales as $SAL)
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $SAL -> Nota_ID }}</td>
                        <td>{{ $SAL -> Customer_ID }}</td>
                        <td>{{ $SAL -> User_ID }}</td>
                        <td>{{ $SAL -> Nota_Date }}</td>
                        <td>{{ $SAL -> Total_Payment}}</td>
                        <td class="btn btn-info" style="padding: 5px"><a href="PosEdit{{$SAL->Nota_ID}}" style="color: white;">Edit</td>
                        <td class="btn btn-secondary" style="padding: 5px"><a href="invoicePDF/{{$SAL->Nota_ID}}" style="color: white;">Invoice Print</td>
                      </tr>
                      @endforeach

                  </tbody>
                </table>
</div>
</div>
                <br>
                <div class="float-sm-right">
                <ul class="pagination"><li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul>
                </div>
              <!-- /.card-body -->
            </div> 
            </div>                    
          </div>
        </div>
      </div>
  </section>
</div>
</section>
@endsection