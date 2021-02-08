@extends('layout.master')
@section('title','Product Page')
@section('section')




				<div class="modal-body" style="width: 50%; margin-left: 300px; margin-bottom: 100px; margin-top: 50px;">

		       	<!-- Form -->
		       		<form method="POST" action="/product">
		       			@csrf
		       			<label>Product Code</label><br>
		       			<input class="form-control" type="text" name="productCode" placeholder="Enter Product Code" required><br><br>
		       			<label>Product Name</label><br>
		       			<input class="form-control" type="text" name="productName" placeholder="Enter Product Name" required><br><br>
		       			<label>Product Quantity</label><br>
		       			<input class="form-control" type="number" name="quantity" placeholder="Enter Product Quantity" required><br><br>
		       			<label>Product Price</label><br>
		       			<input class="form-control" type="number" name="price" placeholder="Enter Product Price" required><br><br>
		       			<button type="submit" class="btn btn-primary" name="addProduct">Add Product</button>
		       			<a href="/product"><button type="button" class="btn btn-secondary">Close</button></a>


		       		</form>

		       		
		      	</div>
		      	<div class="modal-body" style="width: 50%; margin-left: 300px; margin-bottom: 100px; margin-top: 50px;">

		       	<!-- Form -->
		       		<!-- <form method="POST" action="/product">
		       			@csrf
		       			<table>
					<caption style="font-size: 30px; margin-bottom: 30px;">Add Product</caption>
					<tr>
						<th>Product Code</th>
						<th>Product Name</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Amount</th>
						<th>Add</th>
					</tr>
					<tr>
						<td><input class="input" type="text" class="form-control" id="procode" name="productcode" placeholder="Product Code" required></td>

						<td><input class="input" type="text" class="form-control" id="pname" name="productname" placeholder="Product Name" required></td>

						<td><input class="input" type="text" class="form-control" id="price" name="price" placeholder="Price" required></td>

						<td><input class="input" type="number" class="form-control" id="qty" name="quantity" placeholder="Quantity" required></td>

						<td><input class="input" type="text" class="form-control" id="total" name="total" placeholder="Total" required></td>

						<td><button type="submit" style="background: dodgerblue; color: white;" name="add">Add</button></td>
					</tr>
				</table>


		       		</form> -->

@endsection