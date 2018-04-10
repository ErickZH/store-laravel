@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card p-4">
            <header>
                <h4>Crear nuevo producto</h4>
            </header>
            <div class="card-body">
                @include('products.form')
            </div>
        </div>
    </div>
@endsection
