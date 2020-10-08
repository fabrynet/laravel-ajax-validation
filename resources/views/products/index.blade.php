@extends('layouts.app')

@include('handlebars.product-template');

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <h1>Products</h1>

                  <div class="form-group">
                    <label for="deleted">Deleted</label>
                    <input id="products-deleted" type="checkbox" name="deleted">
                  </div>

                  <a href="{{ route('products.create') }}">
                    New Product
                  </a>
                </div>

                <div class="card-body">

                  <div id="products" class="d-flex flex-wrap justify-content-around">

                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
