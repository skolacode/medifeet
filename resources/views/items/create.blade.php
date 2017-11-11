@extends('main')

@section('content')

	<div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">

                <div class="panel-heading">Create Item</div>

                <div class="panel-body">

                	{!! Form::open(['route'=>'items.store', 'class'=>'form-horizontal']) !!}

                		{{-- Article ID --}}
                		<div class="form-group">

	                		{!! Form::label('','Articel Number', ['class'=>'control-lable, col-md-4']) !!}
	               	
                			<div class="col-md-6">
                				{!! Form::text('article_number', old('article_number'), ['class'=>'form-control']) !!}
            				</div>
                		</div>

                		{{-- Name --}}
                		<div class="form-group">

	                		{!! Form::label('','Name', ['class'=>'control-lable, col-md-4']) !!}

	                		<div class="col-md-6">
	                			{!! Form::text('name', old('name'), ['class'=>'form-control']) !!}
	                		</div>

                		</div>

                		{{-- Size --}}
                		<div class="form-group">

	                		{!! Form::label('','Size', ['class'=>'control-lable, col-md-4']) !!}

	                		<div class="col-md-6">
	                			{!! Form::text('size', old('size'), ['class'=>'form-control']) !!}
	                		</div>

                		</div>

                		{{-- Color --}}
                		<div class="form-group">

	                		{!! Form::label('', 'Color', ['class'=>'control-lable, col-md-4']) !!}

	                		<div class="col-md-6">
	                			{!! Form::text('color', old('color'), ['class'=>'form-control']) !!}
	                		</div>
                		</div>

                		{{-- Price --}}
                		<div class="form-group">

	                		{!! Form::label('', 'Price', ['class'=>'control-lable, col-md-4']) !!}

	                		<div class="col-md-6">
	                			{!! Form::text('price', old('price'), ['class'=>'form-control']) !!}
	                		</div>
                		</div>

                		{{-- Stock --}}
                		<div class="form-group">

	                		{!! Form::label('', 'Stock', ['class'=>'control-lable, col-md-4']) !!}

	                		<div class="col-md-6">
	                			{!! Form::text('stock', old('stock'), ['class'=>'form-control']) !!}
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