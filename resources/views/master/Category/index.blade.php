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
            <a href="../CategoriesCreate" class="btn btn-success" ><i class="material-icons"></i> <span>Add New Category</span></a>    
          </div>
    <br>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Category</h3>

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
                        <th>Category ID</th>
                        <th>Category Name</th>  
                        <th>Status</th>
                        <th>Action</th>
                       </tr>
                    </thead>

                  <tbody>
                      <!--
                      <tr>
                        <th scope="row">1</th>
                        <td>001</td>
                        <td>Makanan</td>
                        <td class="btn btn-info" style="padding: 5px"><a href="CategoriesEdit"style="color: white;">Edit</td>
                        <td class="btn btn-danger" type="submit" style="padding: 5px"><a href="CategoriesDestroy" style="color: white;">Delete</td>
                      </tr>
                      
                      <tr>
                        <th scope="row">2</th>
                        <td>002</td>
                        <td>Minuman</td>
                        <td class="btn btn-info" style="padding: 5px"><a href="CategoriesEdit"style="color: white;">Edit</td>
                        <td class="btn btn-danger" type="submit" style="padding: 5px"><a href="CategoriesDestroy" style="color: white;">Delete</td>
                      </tr>

                      <tr>
                        <th scope="row">3</th>
                        <td>003</td>
                        <td>Sayur-Sayuran</td>
                        <td class="btn btn-info" style="padding: 5px"><a href="CategoriesEdit"style="color: white;">Edit</td>
                        <td class="btn btn-danger" type="submit" style="padding: 5px"><a href="CategoriesDestroy" style="color: white;">Delete</td>
                      </tr>

                      <tr>
                        <th scope="row">4</th>
                        <td>004</td>
                        <td>Buah-Buahan</td>
                        <td class="btn btn-info" style="padding: 5px"><a href="CategoriesEdit"style="color: white;">Edit</td>
                        <td class="btn btn-danger" type="submit" style="padding: 5px"><a href="CategoriesDestroy" style="color: white;">Delete</td>
                      </tr>

                      <tr>
                        <th scope="row">5</th>
                        <td>005</td>
                        <td>Pakaian</td>
                        <td class="btn btn-info" style="padding: 5px"><a href="CategoriesEdit"style="color: white;">Edit</td>
                        <td class="btn btn-danger" type="submit" style="padding: 5px"><a href="CategoriesDestroy" style="color: white;">Delete</td>
                      </tr>
                      //-->

                      @foreach($category as $CAT)
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $CAT -> Category_ID }}</td>
                        <td>{{ $CAT -> Category_Name }}</td> 
                        @if($CAT->Status == 1)
                        <td><span class="badge badge-success">Aktif</span></td>
                        @else
                        <td><span class="badge badge-danger">Non Aktif</span></td>
                        @endif
                        <td class="btn btn-info" style="padding: 5px"><a href="CategoriesEdit{{ $CAT -> Category_ID }}"style="color: white;">Edit</td>
                        <!-- <td class="btn btn-danger" type="submit" style="padding: 5px" data-toggle="modal" data-target="#myModaldel"><a style="color: white;">Delete</td> -->
                      </tr>


<!-- Modal -->
  <div class="modal fade" id="myModaldel" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">          
          <h4 class="modal-title">Delete Data</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>Apakah Anda Yakin Akan Menghapus Data?</p>
        </div>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-info">Tidak</button>
          <a href="CategoriesDestroy/{{ $CAT -> Category_ID }}"><button type="submit" class="btn btn-danger">Yakin</button></a>    
        </div>
      </div>
    <!-- end of modal content -->                     
          </div>
        </div>
      </div>
</div>
                      @endforeach                    

                  </tbody>
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