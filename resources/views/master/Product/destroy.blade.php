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
    </div>
</div>
</div>
</div>

<!-- trigger modal-->
	<div class="container">
  <!-- Trigger the modal with a button -->
  <h1 align="center">Apakah Anda Yakin Akan Menghapus Data?</h1>
  <br>
  <br>
  <center>
  <a href="ProductIndex" class="btn btn-danger">Cancel</a>
  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Yakin</center></button>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">          
          <h4 class="modal-title">Delete Data</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>Data telah berhasil dihapus</p>
        </div>
        <div class="modal-footer">
          <td type="button" class="btn btn-default" data-dismiss="modal"><a href="ProductIndex">Ok</td>
        </div>
      </div>
		<!-- end of modal content -->
      
    </div>
  </div>
<!-- end of modal -->
</div>
<!-- end of trigger Modal -->
  </section>
</div>
</section>
@endsection