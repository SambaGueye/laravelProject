@extends('layout')

@section('content')

<h1>{{$client->name}}</h1>
<a href="/clients/{{$client->id}}/edit" class="btn btn-primary">Editer</a>
<form action="/clients/{{$client->id}}" method="post" style="display: inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Supprimer</button>
</form>
<hr>
<p><strong>Entreprise: </strong> {{$client->entreprise->name}}</p>
<p><strong>Email: </strong> {{$client->email}}</p>

@endsection