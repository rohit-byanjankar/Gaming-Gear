@extends('adminpanel.layouts.master')

@section('content')
<div class="container mx-auto mt-2">
			<h5 class="card-header bg-dark text-success text-center">Add Product</h5>
			<form class="card-body" id = '' action ="/adminpanel/addproduct" method="POST" enctype="multipart/form-data"> 
			{{csrf_field()}}

				<div class="row">
					<div class="col mt-1 text-success">
						<label for="name">Product Name</label>
						<input type="text" class="form-control" name='Pname' placeholder="Product name" required>
					</div>
				</div>

                <div class="row">
					<div class="col mt-2 text-success">
                        <label for="artist">Product Detail</label>
                        <textarea class="form-control " rows="6" cols="4"  name='Pdetail' placeholder="Enter Product Detail.." required></textarea>
					
					</div>
                </div>

                <div class="row">
                        <div class="col-md-2 mt-2">
                            <label for="image"><span class="text-success">Product Image</span></label>
                            <input type="file" class="" name='img' required>
                        </div>
                        <div class="col-md-2 mt-2 mx-auto">
                            <label for="image"><span class="text-success">Best Deals</span></label>
                            <select name="best" class="form-control" >
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                        </select>
                        </div>
                    </div>
					
                <div class ="row text-success" >
                    <div class = "col-md-2 mt-2">
                    <label for="category">Category</label>
                    <select name="Pcategory" class="form-control" >
                            <option value="keyboard">Keyboard</option>
                            <option value="Mouse">Mouse</option>
                            <option value="Mousepad">Mousepad</option>
                            <option value="Headphone">Headphone</option>
                    </select>
                    </div>
                    <div class="col-md-2 mx-auto mt-2 text-success">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name = 'price' placeholder="Price" required>
                    </div>
                </div>
    </div>

    <div class="d-flex justify-content-center mt-2">
        <button type="submit" class="btn btn-success">Add</button>
    </div>
</form>
  	
@endsection




