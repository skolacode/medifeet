@extends('main')

@section('content')

	<div class="container">
		
		<div class="row">
			
			<div class="col-md-10">
				
				<div class="panel panel-default">
					
				  <div class="panel-heading">Items List</div>
				 
				  <!-- Table -->
				  <table class="table">

				  	<thead>
				  		
				  		<tr>
				  			<th>#</th>
				  			<th>Articel Number</th>
				  			<th>Size</th>
				  			<th>Color</th>
				  			<th>Price</th>
				  			<th>Stock</th>
				  			<th></th>
				  		</tr>
				  	</thead>

				  	<tbody>
				  		
				  		{{-- Number Counter --}}
				  		@php $i = 1; @endphp

				  		{{-- Foreach loop to get all the items --}}
				  		@foreach($items as $item)
				  		<tr>
				  			<td class="col-md-1">{{ $i++ }}</td>
				  			<td class="col-md-2">{{ $item->article_number }}</td>
				  			<td class="col-md-2">{{ $item->size }}</td>
				  			<td class="col-md-2">{{ $item->color }}</td>
				  			<td class="col-md-2">{{ $item->price }}</td>
				  			<td class="col-md-1">{{ $item->stock }}</td>
				  		</tr>
				  		@endforeach
				  	</tbody>			
				  </table>
				</div>
			</div>
		</div>
	</div>
@stop