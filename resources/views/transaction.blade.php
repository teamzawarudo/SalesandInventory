@extends('layout.master')
@section('title','Transaction Page')
@section('section')
	<table class="table table-striped" style="margin-top: 20px; margin-bottom: 100px;">
  <thead>
    <tr>
      <th scope="col">Product Code</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Quantity</th>
      <th scope="col">Product Price</th>
    </tr>
  </thead>



  @foreach($products as $productinfo)
  		<tr>
  			<td>{{ $productinfo->productCode }}</td>
  			<td>{{ $productinfo->productName }}</td>
  			<td>{{ $productinfo->quantity }}</td>
  			<td>{{ $productinfo->price }}</td>
  		</tr>



  @endforeach

</table>
@endsection