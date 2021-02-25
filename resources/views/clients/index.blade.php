@extends('layout')
@section('content')

<a href="/clients/create" class="btn btn-primary my-3">Nouveau Client</a>
<h4>Liste des clients:</h4>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">status</th>
      <th scope="col">Entreprise</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($clients as $client)
    <tr>
      <th scope="row">{{$client->id}}</th>
      <td><a href="/clients/{{$client->id}}">{{$client->name}}</a></td>
      <td>{{$client->status}}</td>
      <td>{{$client->entreprise->name}}</td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection