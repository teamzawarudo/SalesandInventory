@extends('layout.master')
@section('title','Inventory Page')
@section('section')

	<table class="table table-striped" style="margin-top: 20px; margin-bottom: 100px;">
  <thead>
    <tr>
      <th scope="col">Product Code</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Quantity</th>
      <th scope="col">Product Price</th>
      <th scope="col">Delete Product</th>
    </tr>
  </thead>



  @foreach($data as $productinfo)
  		<tr>
  			<td>{{ $productinfo->productCode }}</td>
  			<td>{{ $productinfo->productName }}</td>
  			<td>{{ $productinfo->quantity }}</td>
  			<td>{{ $productinfo->price }}</td>
  			<td><a href="/inventory/{{ $productinfo->id }}"><button class="btn btn-warning" type="submit" name="deleteproduct">Delete</button></a></td>
  		</tr>



  @endforeach


</table>
<a href="/homepage"><button type="button" class="btn btn-secondary">Close</button></a>
@endsection