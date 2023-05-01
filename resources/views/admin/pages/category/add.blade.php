@extends('admin.include.master')

@section('admin')
<div class="card border-top border-0 border-4 border-info">
	<div class="card-body">
		<div class="border p-4 rounded">
			<div class="card-title d-flex align-items-center">
				<h5 class="mb-0 text-info">Add Category</h5>
			</div>
			<hr>
			<div class="row mb-3">
				<label for="inputEnterYourName" class="col-sm-3 col-form-label">Category Name</label>
				<div class="col-sm-9">
					<input type="text" name="cat_name " class="form-control" id="inputEnterYourName" placeholder="Category Name">
				</div>
			</div>
			<div class="row mb-3">
				<label for="inputPhoneNo2" class="col-sm-3 col-form-label">Add New Image</label>
				<div class="col-sm-9">
					<input type="file" class="form-control" id="inputPhoneNo2" placeholder="Phone No">
				</div>
			</div>
		
			<div class="row">
				<label class="col-sm-3 col-form-label"></label>
				<div class="col-sm-9">
					<button type="submit" class="btn btn-info px-5">Register</button>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection