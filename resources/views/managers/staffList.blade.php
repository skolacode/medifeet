@extends('main')

@section('content')

	<div class="container">
		
		<div class="row">

			<div class="col-md-3">
				
				<a href="{!! route('register') !!}" class="btn btn-primary btn-bg btn-block">
					Register New Staff
				</a>

				<hr>
			</div>
			
			<div class="col-md-12">
				
				<div class="panel panel-default">
					
				  <div class="panel-heading">Staff List</div>
				 
				  <!-- Table -->
				  <table class="table">

				  	<thead>
				  		
				  		<tr>
				  			<th>No</th>
				  			<th>Name</th>
				  			<th>Email</th>
				  			<th>Mobile Num.</th>
				  			<th>Address</th>
				  			<th></th>
				  		</tr>
				  	</thead>

				  	<tbody>
				  		
				  		{{-- Number Counter --}}
				  		@php $i = 1; @endphp

				  		{{-- Foreach loop to get all the users --}}
				  		@foreach($users as $user)
					  		<tr>
					  			<td class="col-md-1">{{ $i++ }}</td>
					  			<td class="col-md-2">{{ $user['name'] }}</td>
					  			<td class="col-md-2">{{ $user['email'] }}</td>
					  			<td class="col-md-1">{{ $user['mobile_number'] }}</td>
					  			<td class="col-md-3">{{ $user['address'] }}</td>
					  		
						  		{{-- edit btn --}}
					  			<td class="col-md-2">
					  				
					  				<a href="{!! route('managers.edit', $user['id']) !!}" class="btn btn-primary btn-sm">
					  			
					  					Edit
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