@extends('layouts.app')

@section('content')
	<div class="row justify-content-sm-center">
		<div class="col-xs-12 col-sm-10 col-md-7 col-lg-6">
			<div class="card p-2">
				<header class="bg-primary p-2">
					
				</header>
				<div class="card-body">
					<h2 class="card-title">
						{{ $product->title }}
					</h2>
					<h4 class="card-subtitle">
						{{ $product->price }}
					</h4>
					<p class="card-text">
						{{ $product->description }}
					</p>
				</div>
				<div class="card-actions">
					{!! Form::open(['method' => 'POST', 'route' => 'in_shopping_carts.store']) !!}
						<input type="hidden" value="{{ $product->id }}" name="product_id">
						<button type="submit" class="btn btn-success">Add cart</button>
					{!! Form::close() !!}
					
					@include('products.delete')
				</div>
			</div>
		</div>
	</div>
@endsection