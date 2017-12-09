@extends('main')

@section('content')

	<div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">

                <div class="panel-heading">

                    Item Details                   
                </div>

                <div class="panel-body">

                	{!! Form::model($item, ['route'=>['stock.update'], 'class'=>'form-horizontal', 'method'=>'POST']) !!}

                		{{-- Article ID --}}
                		<div class="form-group">

	                		{!! Form::label('','Articel Number', ['class'=>'control-lable, col-md-4']) !!}
	               	
                			<div class="col-md-6">
                				{!! Form::text('article_number', old('article_number'), ['class'=>'form-control', 'disabled']) !!}
            				</div>
                		</div>

                        {{-- Color --}}
                        <div class="form-group">

                            {!! Form::label('', 'Color', ['class'=>'control-lable, col-md-4']) !!}

                            <div class="col-md-6">
                                {!! Form::text('color', old('color'), ['class'=>'form-control', 'disabled']) !!}
                            </div>
                        </div>
                        
                		{{-- Size --}}
                		<div class="form-group">

	                		{!! Form::label('','Size', ['class'=>'control-lable, col-md-4']) !!}

                            <div class="col-md-6">
                                {!! Form::select('size', App\Item::itemsDropDown($item->article_number, 'size'), null, ['placeholder' => 'Pick a size...'
                                , 'class'=>'form-control']) !!}
                            </div>

                		</div>

                		{{-- Quantity --}}
                		<div class="form-group">

	                		{!! Form::label('', 'Quantity', ['class'=>'control-lable, col-md-4']) !!}

	                		<div class="col-md-6">
	                			{!! Form::text('quantity', old('quantity'), ['class'=>'form-control']) !!}
	                		</div>
                		</div>

                        {{-- Price --}}
                        <div class="form-group">

                            {!! Form::label('', 'Amount', ['class'=>'control-lable, col-md-4']) !!}

                            <div class="col-md-6">
                                {!! Form::text('amount', old('amount'), ['class'=>'form-control']) !!}
                            </div>
                        </div>
                		
                		<div class="form-group">
                			
                			{{-- Sell Btn --}}
                			<div class="col-md-offset-4 col-md-4">

                				<button class="btn btn-success btn-md btn-block" type="submit">Confirm Sell</button>
                			</div>	

							{{-- Cancel Btn --}}
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