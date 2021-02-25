@extends('layout')

@section('content')
<h1>Create</h1>

<p>Formulaire de création</p>
<hr>
<form action="/clients" method="post">
    @include('includes.form')
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection