@extends('layouts.app')

@section('content')
  <div class="container">

    <div class="welcome">
      <div class="title m-b-md">
          Fabrynet
      </div>

      <div class="links">
          <a href="{{ route('products.index') }}">Products</a>
      </div>
    </div>

  </div>
@endsection
