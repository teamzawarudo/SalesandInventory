@extends('layout.master')
@section('title','Product Page')
@section('section')

	<div class="modal-body" style="width: 50%; margin-left: 300px; margin-bottom: 100px; margin-top: 50px;">

		       	<!-- Form -->
	<form method="POST" action="/editproduct/{{ $data[0]->id }}">
		       			@csrf
		<label>Product Code</label><br>
		   	<input class="form-control" type="text" name="productCode" placeholder="Enter Product Code" value="{{ $data[0]->productCode }}"><br><br>
		<label>Product Name</label><br>
		    <input class="form-control" type="text" name="productName" placeholder="Enter Product Name" value="{{ $data[0]->productName }}"><br><br>
		<label>Product Quantity</label><br>
		    <input class="form-control" type="number" name="quantity" placeholder="Enter Product Quantity" value="{{ $data[0]->quantity }}"><br><br>
		<label>Product Price</label><br>
		    <input class="form-control" type="number" name="price" placeholder="Enter Product Price" value="{{ $data[0]->price }}"><br><br>
		<button type="submit" class="btn btn-primary" name="editProduct">Edit Product</button>
		<a href="/product"><button type="button" class="btn btn-secondary">Close</button></a>


		       		</form>
						@if(isset($alert))
							{{ $alert }}
						@endif
						<br>
						<a href="/home">Back to Records</a>

		       		
		      	</div>


	





@endsection