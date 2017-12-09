@extends('main')

@section('content')

	<div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">

                <div class="panel-heading">Create Staff</div>

                <div class="panel-body">

                	{!! Form::open(['route'=>'managers.store', 'class'=>'form-horizontal']) !!}

                		{{-- Name --}}
                		<div class="form-group">

	                		{!! Form::label('','Name', ['class'=>'control-lable, col-md-4']) !!}
	               	
                			<div class="col-md-6">
                				{!! Form::text('name', old('name'), ['class'=>'form-control']) !!}
            				</div>
                		</div>

                		{{-- Email --}}
                		<div class="form-group">

	                		{!! Form::label('','Emaile', ['class'=>'control-lable, col-md-4']) !!}

	                		<div class="col-md-6">
	                			{!! Form::text('email', old('email'), ['class'=>'form-control']) !!}
	                		</div>

                		</div>

                		{{-- Mobile Number --}}
                		<div class="form-group">

	                		{!! Form::label('', 'Mobil Number', ['class'=>'control-lable, col-md-4']) !!}

	                		<div class="col-md-6">
	                			{!! Form::text('mobile_number', old('mobile_number'), ['class'=>'form-control']) !!}
	                		</div>
                		</div>

                		{{-- Address --}}
                		<div class="form-group">

	                		{!! Form::label('', 'Address', ['class'=>'control-lable, col-md-4']) !!}

	                		<div class="col-md-6">
	                			{!! Form::text('address', old('address'), ['class'=>'form-control']) !!}
	                		</div>
                		</div>
                		
                		<div class="form-group">
                			
                			{{-- Save Btn --}}
                			<div class="col-md-offset-4 col-md-4">

                				<button class="btn btn-success btn-md btn-block" type="submit">Save</button>
                			</div>	

							{{-- Back Btn --}}
                			<div class="col-md-2">
                				
                				<a href='{!! URL::previous() !!}' class="btn btn-md btn-block">Back</a>
                			</div>
                		</div>
                		

                	{!! Form::close()!!}                
                </div>
            </div>
        </div>
    </div>
</div>
@stop