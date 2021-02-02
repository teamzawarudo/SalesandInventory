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

@endsection