@extends('layout.master')
@section('title','Product Page')
@section('section')
		
		<!-- Button trigger modal -->
		<a href="/addproduct"><button type="button" class="btn btn-primary" style="margin-top: 200px;">
		  Add Products
		</button></a>


<!-- table -->
	<table class="table table-striped" style="margin-top: 20px; margin-bottom: 100px;">
  <thead>
    <tr>
      <th scope="col">Product Code</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Quantity</th>
      <th scope="col">Product Price</th>
      <th scope="col">Edit Product</th>
    </tr>
  </thead>



  @foreach($products as $productinfo)
  		<tr>
  			<td>{{ $productinfo->productCode }}</td>
  			<td>{{ $productinfo->productName }}</td>
  			<td>{{ $productinfo->quantity }}</td>
  			<td>{{ $productinfo->price }}</td>
  			<td><a href="/editproduct/{{ $productinfo->id }}"><button class="btn btn-success" type="submit" name="editproduct">Edit</button></a></td>
  		</tr>



  @endforeach

</table>
@endsection