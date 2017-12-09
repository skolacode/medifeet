@extends('main')

@section('content')

	<div class="container">
		
		<!-- Main Title -->
		<div class="text-center">

			<h1> Inventory Management System </h1>
		</div>

		<!--  Make a space from main title -->
		<br>

		<!-- Button option -->
		<div class="">

			<!-- Home, Register, Staff Profile button -->
			<div class="row">

				<!-- Home Btn -->
				<div class="col-xs-6 col-md-4">
					<a href="{{ route('mindex') }}" class="thumbnail">
						<button class="btn btn-block btn-lg">
							Home
						</button>
					</a>
				</div>

				<!-- Staff Profile Btn -->
				<div class="col-xs-6 col-md-4">
					<a href="{{ route('staff.list') }}" class="thumbnail">
						<button class="btn btn-block btn-lg btn-primary">
							Staff Profile
						</button>
					</a>
				</div>
			</div>

			<!-- Make a space -->
			<br>

			<!-- Item, Logout button -->
			<div class="row">

				<!-- Item btn -->
				<div class="col-xs-6 col-md-4">
					<a href="{{ route('items.index') }}" class="thumbnail">
						<button class="btn btn-block btn-lg btn-primary">
							Item
						</button>
					</a>
				</div>

				<!-- Counter Btn -->
				<div class="col-xs-6 col-md-4">
					<a href="{{ route('counter') }}" class="thumbnail">
						<button class="btn btn-block btn-lg btn-primary">
							Counter
						</button>
					</a>
				</div>

				<!-- Logout btn -->
				<div class="col-xs-6 col-md-4">
					<a href="#" class="thumbnail">
						<button class="btn btn-block btn-lg btn-primary">
							Logout
						</button>
					</a>
				</div>
			</div>
		</div>
	</div>
@stop