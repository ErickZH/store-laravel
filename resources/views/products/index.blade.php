@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>{{ $shopping_cart->id }}</h1>
		<div class="">
			<products-component></products-component>
		</div>
	</div>
@endsection
