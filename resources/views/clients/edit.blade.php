@extends('layout')

@section('content')

<h3>Editer le profil de {{$client->name}}</h3>
<hr>
<form action="/clients/{{$client->id}}" method="post">
    @method('PATCH')
    @include('includes.form')
  <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection