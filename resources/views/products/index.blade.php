@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			@foreach($products as $product)
			<div class="col-xs-12 col-md-6 col-xl-4">
				<div class="card p-2">
					<header>
						<h2 class="card-title">
							<a href="{{ url('/productos/'.$product->id) }}">
								{{ $product->title }}
							</a>
						</h2>
						<h4 class="card-subtitle">
							{{ $product->price }}
						</h4>
					</header>
					<p class="card-text">
						{{ $product->description }}
					</p>
				</div>
			</div>
			@endforeach
		</div>
		<div class="mt-2">
			{{ $products->links() }}
		</div>
	</div>
@endsection