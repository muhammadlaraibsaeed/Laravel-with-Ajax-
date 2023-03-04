@extends('layouts.admin')

@section('content')




<section style="background-color: #eee;" class="mt-5">
    <div class="container py-3">
        <a href="#addEmployeeModal" class="btn btn-primary" data-toggle="modal">
            <i class="material-icons"></i> 
            <span>Add New Employee</span>
        </a>

		<div class="form-outline mt-4">
			<input type="search" class="form-control" id="datatable-search-input" placeholder="Search Your Product">
		  </div>
		  <div id="datatable">
	</div>
		
        <div class="row">
                <div class="col-md-12 col-lg-4 mb-4 mb-lg-0 pt-4">
                    <div class="card text-black">
                        <img src="https://picsum.photos/301/200"
                        class="card-img-top" alt="iPhone"/>
                        <div class="card-body">
                        <div class="text-center mt-1">

                            <h4 class="card-title d-flex justify-content-lg-around badge-dark"> <span>Name</span> <span>iPhone X</span></h4>
                            <h4 class="card-title d-flex justify-content-lg-around badge-warning"> <span>Total Items</span> <span>12</span></h4>

                            <h6 class="text-primary mb-1 pb-3 alert-info alert mb-3">$40</h6>
                        </div>
                        <div class="d-flex flex-row justify-content-center btn-danger btn">
                            <a href="#editEmployeeModal" class="edit btn-danger btn-block py-1" data-toggle="modal">
                                <i data-toggle="tooltip" data-original-title="Edit">Update</i></a>
                        </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
  </section>




<!-- Add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
                <div class="modal-header">						
					<h4 class="modal-title">Add Products</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" name="name" placeholder="Product Name" required>
					</div>
					
					<div class="form-group">
						<label>Prices</label>
						<input type="text" class="form-control" name="price" placeholder="Products price" required>
					</div>

                    <div class="form-group">
						<label>Enter Total items</label>
						<input type="text" class="form-control" name="titems" placeholder="Number of items" required>
					</div>
                    
					<div class="form-group">
						<label>Update Image</label>
						<input type="file" class="form-control"  required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Product Update</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Update Name</label>
						<input type="text" class="form-control" name="name" placeholder="Product Name" required>
					</div>
					
					<div class="form-group">
						<label>Update Price</label>
						<input type="text" class="form-control" name="price" placeholder="Products price" required>
					</div>

                    <div class="form-group">
						<label>Update Items</label>
						<input type="text" class="form-control" name="titems" placeholder="Number of items" required>
					</div>

					<div class="form-group">
						<label>Update Image</label>
						<input type="file" class="form-control"  required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Delete Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>

@section('title','Products')


@endsection
