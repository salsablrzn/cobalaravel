@extends('admin/admin')

@section('judul')
     <center><h2 class="h5 no-margin-bottom">POINT OF SALES</h2></center>
@endsection

@section('konten')

<div class="col-lg-12">
<div class="block margin-bottom-sm">
	<!-- <table width="100%">
		<thead> -->

			<!-- form start -->
              
                <h3>Point Of Sales</h3>
                <!-- <div class="card-body"> -->
     
                <table width="35%">
                  <tr>
                  	<td>
                  		User Name : {{ $sales->UFirst_Name }} {{ $sales->ULast_Name }}
                  	</td>
                  </tr>

                  <tr>
                  	<td>
                  	Customer Name : {{ $sales->First_Name }} {{ $sales->Last_Name }}
                  </td>
              </tr>
              <tr>
              	<td>
              <h6>
              	Nota Date : {{ $sales->Nota_Date }}
              </h6>
              </td>
              </tr>
              </table>
              <br>
	<table id="keranjang" width="100%" cellpadding="10px" bordercolorlight="#E8A7A8" border="2"> 
		<thead>
			<th width="228">ID</th>
			<th width="295">Product Name</th>
			<th width="45">Qty</th>
			<th width="45">Discount</th>
			<th width="212">Price</th>
			<th width="228">Sub Total</th>
			
		</thead>
		<tbody>
			 @foreach($sales_detail as $salesdetail)
                      <tr id="col{{ $loop->iteration }}">
        <td>{{ $salesdetail->Product_ID }}</td>    
        <td>{{ $salesdetail->Product_Name }}</td>
		<td>{{ $salesdetail->Quantity }}</td>
		<td>{{ $salesdetail->Discount }}</td>
		<td>{{ $salesdetail->Selling_Price }}</td>
		<td>{{ $salesdetail->Total_Price }}</td>
                      </tr>
                      @endforeach
		</tbody>
	</table>
	<br>

<h4>
              	Total Payment : {{ $sales->Total_Payment }}
              </h4>
</div>
</div>


          </div>
        </div>
      </div>
</div>
@endsection