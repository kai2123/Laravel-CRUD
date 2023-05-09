@extends('layouts.connection_layout')

@section('content')
<div id = "top" class = "pink top-banner-container">
  <div class = "container">
    <div class = "row">
      <div class = "col align-items-start"></div>
      <div class = "col align-self-center">
        <h1 class = "text-center h1-font-size-connection">WELCOME</h1>
        <div class="d-grid gap-2 col-6 mx-auto">
        <button type="button" class="btn btn-dark btn-lg"
        onclick="location.href='{{ route('register') }}'">Sign up now</button>
        </div>
      </div>
      <div class = "col align-self-end"></div>
   </div>
  </div>
</div>
@endsection