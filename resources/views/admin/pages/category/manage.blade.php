@extends('admin.include.master')

@section('admin')
<div class="row">
    <div class="col-md-8-offset-md-2">
        <h6 class="mb-0 text-uppercase">Bordered tables</h6>
        <hr>
        <div class="card">
        	<div class="card-body">
        		<table class="table table-bordered mb-0">
        			<thead>
        				<tr>
        					<th scope="col">#</th>
        					<th scope="col">category name </th>
        					<th scope="col">Category image</th>
        					<th scope="col">action</th>
        				</tr>
        			</thead>
        			<tbody>
        				@foreach($categories as $category)
        				<tr>
                            <th scope="col">{{$category->id}}</th>
        					<th scope="col">{{$category->cate_name}}</th>
        					<th scope="col">
                                <img height="80" width="80"  src="{{ asset('uploads/category/'.$category->image) }}" alt="">
                            </th>
        					<th scope="col">
                                <button>edit</button>
                                <button>show</button>
                            </th>
        				</tr>
                        @endforeach
        			</tbody>
        		</table>
        	</div>
        </div>
    </div>
</div>


@endsection