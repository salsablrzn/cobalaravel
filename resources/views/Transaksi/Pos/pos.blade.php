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
              <form method="Post" action="SalesStore">
                <h3>Point Of Sales</h3>
                <!-- <div class="card-body"> -->
                	@csrf <input class="form-control" type="hidden" name="notaid" value="{{ $Nota_ID }}">
                <table width="35%">
                  <tr style="margin-bottom: 10px">
                  <div class="form-group">
                    <td><label for="exampleInputCustomerID">Customer ID<span class="required"> * </span></label></td>
                    <td><select name="customerid" class="form-control mb-1">
                      @foreach($customer as $C)
                      <option value=" {{ $C->Customer_ID}}">
                        {{ $C->First_Name}} {{ $C->Last_Name}}
                      </option>
                      @endforeach
                    </select>
                    </td>
                  </div>
                  </tr>

                  <tr style="margin-bottom: 5px">
                  <div class="form-group">
                    <td><label for="exampleInputUserID">User ID<span class="required"> * </span></label></td>
                    <td><select name="userid" class="form-control mb-1">
                      @foreach($user as $U)
                      <option value=" {{ $U->User_ID}}">
                         {{ $U->First_Name}} {{ $U->Last_Name}}
                      </option>
                      @endforeach
                    </select>
                </td>
                  </div>
              </tr>

              	<tr style="margin-bottom: 5px">
				 <div class="form-group">
				 	<td>
				 	<!-- <div class="col-sm-1"> -->
                    <label for="exampleInputNotaDate">Nota Date<span class="required"> * </span></label>
                    <!-- </div> -->
                    </td>
                    <td>
                    <div class="col-sm-13" style="padding-left: 0px">
                    <input class="form-control" type="date" name="notadate">
                  </div> 
                  </td>                 	
              </div>
              </tr>
              </table>
              <br>

	  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" >Pilih Product</button>
	<br>
	<br>
	<table id="keranjang" width="100%" cellpadding="10px" bordercolorlight="#E8A7A8" border="2"> 
		<thead>
			<th width="295">Product Name</th>
			<th width="45">Qty</th>
			<th width="45">Discount</th>
			<th width="212">Price</th>
			<th width="228">Sub Total</th>
			<th width="228">Action</th>
		</thead>
		<tbody>
		</tbody>
	</table>
	

<div class="row justify-content-end mt-3" >
<div class="col-lg-2">
	<div class="block margin-bottom-sm">
		<label class="col-sm-form-control-label mb-1">Sub Total</label>
		<input id="subtotal-val" type="text" disabled="" class="mr-sm-3 form-control">
		<label class="col-sm-form-control-label mb-1 mt-1">Pajak</label>
		<input id="pajak" type="text" disabled="" placeholder="10%" class="mr-sm-3 form-control">
		<label class="col-sm-form-control-label mb-1 mt-1">Discount</label>
		<input id="discount" type="number" placeholder="0" class="mr-sm-3 form-control" oninput="total()">
	</div>
</div>

<div class="col-lg-2">
	<div class="block margin-bottom-sm">
		<label class="col-sm-form-control-label">Total Payment</label>
		<input id="total-val" type="text" class="mr-sm-3 form-control" name="totalpayment">
	</div>
</div>
</div>

		<div class="row justify-content-center" >
		<button class="btn btn-primary" type="submit">
			Submit
		</button>
	</div>
		</form>
</div>
</div>

<!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">          
          <h4 class="modal-title">Product</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         <table>
         	<table width="100%" cellpadding="10px" bordercolorlight="#E8A7A8" border="2"> 
		<thead>
			<th width="295">Product ID</th>
			<th width="45">Category ID</th>
			<th width="212">Product Name</th>
			<th width="228">Product Price</th>
			<th width="228">Product Stock</th>
			<th width="228">Explanation</th>
		</thead>
		<tbody>
			@foreach($product as $PRO)
                      <tr onclick="pilihBarang('{{ $PRO -> Product_ID }}')">
                      	<td>{{ $PRO -> Product_ID }} </td>
                        <td>{{ $PRO -> Category_ID }} </td>
                        <td>{{ $PRO -> Product_Name }} </td>
                        <td>{{ $PRO -> Product_Price }} </td>
                        <td>{{ $PRO -> Product_Stock }} </td>
                        <td>{{ $PRO -> Explanation }} </td>
                    </tr>
             @endforeach
		</tbody>
	</table>
         </table>
        </div>
        
      </div>
    <!-- end of modal content -->                     
          </div>
        </div>
      </div>
</div>

<script>
	var barang = <?php echo json_encode($product); ?>;
	console.log(barang[0]["Product_Name"]);
	var colnum=0;

	function getVal(event){
		if (event.keyCode === 13) {
			modal();
		}
	}
	function pilihBarang(id){
		var index;
		for(var i=0;i<barang.length;i++){
			if(barang[i]["Product_ID"]==id){
				console.log(barang[i]);
				index=i;
				break;
			}
		}
		$("#myModal").modal("hide");

		var table = document.getElementById("keranjang");
		var row = table.insertRow(table.rows.length);
		row.setAttribute('id','col'+colnum);
		var id = 'col'+colnum;
		colnum++;

		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);
		var cell4 = row.insertCell(3);
		var cell5 = row.insertCell(4);
		var cell6 = row.insertCell(5);
		console.log(index);
		cell1.innerHTML = '<input type="hidden" name="id['+barang[index]["Product_ID"]+']" value="'+barang[index]["Product_ID"]+'">'+barang[index]["Product_Name"];
		cell2.innerHTML = '<input type="number" name="qty['+barang[index]["Product_ID"]+']" value="1" oninput="recount(\''+barang[index]["Product_ID"]+'\')" id="qty'+barang[index]["Product_ID"]+'">';	
		cell3.innerHTML = '<input class="discount" type="number" name="discount['+barang[index]["Product_ID"]+']" value="0" oninput="recount(\''+barang[index]["Product_ID"]+'\')" id="discount'+barang[index]["Product_ID"]+'">';	
		cell4.innerHTML = '<input type="hidden" id="harga'+barang[index]["Product_ID"]+'" name="harga['+barang[index]["Product_ID"]+']" value="'+barang[index]["Product_Price"]+'">'+barang[index]["Product_Price"];
		cell5.innerHTML = '<input type="hidden" class="subtotal" name="subtotal['+barang[index]["Product_ID"]+']" value="'+barang[index]["Product_Price"]+'" id="subtotal'+barang[index]["Product_ID"]+'"><span id="subtotalval'+barang[index]["Product_ID"]+'">'+barang[index]["Product_Price"]+'</span>';
		cell6.innerHTML = '<button class="btn btn-danger" onclick="hapusEl(\''+id+'\')">Delete</button>';

		total();
		
	}
	function lm(i){
		var min =  document.getElementById("qty"+i).value;
		if(min <= 1){

		}else{
		min--;
		document.getElementById("qty"+i).value = min;
		recount(i);
		}
	}
	function ln(i){
		var plus =  document.getElementById("qty"+i).value;
		console.log(plus);
		plus++;
		document.getElementById("qty"+i).value = plus;
		console.log(plus);
		recount(i);
	}
	function total(){
		var subtotals = document.getElementsByClassName("subtotal");
		var total = 0;
		for(var i=0; i<subtotals.length;++i){
			total += Number(subtotals[i].value); 
		}
		document.getElementById("subtotal-val").value = total;
		var disc = document.getElementById("discount").value;
		total = parseInt(110/100*total)-Number(disc);
		document.getElementById("total-val").value = total;

	}

	function recount(id){

		var price = document.getElementById("harga"+id).value;
		var discount = document.getElementById("discount"+id).value;
		var sembarang = document.getElementById("qty"+id).value;

		var lego = Number(price*sembarang)-discount; 
		document.getElementById("subtotal"+id).value = lego;
		document.getElementById("subtotalval"+id).innerHTML = lego;
		total();
	}

	function modal(){
		$("#myModal").modal("show");
		document.getElementById("myText").value = "";
	}
	function hapusEl(idCol) {
		document.getElementById(idCol).remove();
		total();
	}
</script>

@endsection