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



<!-- new -->
<!-- <table>
  <label style="font-size: 30px; ">Add Product</label>
         
          <tr>
            <th>Product Code</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Amount</th>
            <th>Add</th>
          </tr>
          <tr>
            <td><input class="form-control" type="text" class="form-control" id="procode" name="productcode" placeholder="Product Code" required></td>

            <td><input class="form-control" type="text" class="form-control" id="pname" name="productname" placeholder="Product Name" required></td>

            <td><input class="form-control" type="text" class="form-control" id="price" name="price" placeholder="Price" required></td>

            <td><input class="form-control" type="number" class="form-control" id="qty" name="quantity" placeholder="Quantity" required></td>

            <td><input class="form-control" type="text" class="form-control" id="total" name="total" placeholder="Total" required></td>

            <td><button type="submit" class="btn btn-primary" name="add">Add</button></td>
          </tr>
        </table> -->






        
@endsection