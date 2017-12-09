@extends('main')

@section('content')

	<div class="container">

		<!-- Main title and info about page -->
		<div class="text-left">
			
			<h1> Buy & Sell Items </h1>

			<hr>
		</div>

		<div class="row">

    		<div class="col-lg-3">

			    <div class="input-group">

			    	<input type="text" class="form-control" placeholder="Search for...">
			      		<span class="input-group-btn">
			        		<button class="btn btn-success" type="button">Enter</button>
			      		</span>
			    </div>
			</div>
		</div>
		
		<br>

		<div class="row">
			
			<div class="col-md-10">
				
				<div class="panel panel-default">
					
				  <div class="panel-heading">Items List</div>
				 
				  <!-- Table -->
				  <table class="table">

				  	<thead>
				  		
				  		<tr>
				  			<th>#</th>
				  			<th>Article Number</th>
				  			<th>Size</th>
				  			<th>Color</th>
				  			<th>Price</th>
				  			<th>Quantity</th>
				  			<th></th>
				  		</tr>
				  	</thead>

				  	<tbody>
				  		
				  		{{-- Number Counter --}}
				  		@php $i = 1; @endphp

				  		{{-- Foreach loop to get all the items --}}
				  		@foreach($items as $item)
				  		<tr>
				  			<td>{{ $i++ }}</td>
				  			<td class="col-md-2">{{ $item->article_number }}</td>
				  			<td class="col-md-2">{{ $item->size }}</td>
				  			<td class="col-md-2">{{ $item->color }}</td>
				  			<td class="col-md-2">{{ $item->price }}</td>
				  			<td class="col-md-1">{{ $item->quantity }}</td>

				  			{{-- edit btn --}}
				  			<td>
				  				<a href="{!! route('selected.item', $item->id) !!}" class="btn btn-primary btn-sm">
				  					Select
				  				</a>
				  			</td>
				  		</tr>
				  		@endforeach
				  	</tbody>			
				  </table>
				</div>
			</div>
		</div>
	</div>
@stop