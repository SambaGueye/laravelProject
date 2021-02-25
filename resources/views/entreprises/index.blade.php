@extends('layout')


@section('content')

<h4>Liste des clients:</h4>
<ul>
  @foreach ($entreprises as $entreprise)
      <li> {{$entreprise->name}} </li>
  @endforeach
</ul>
<hr>

<form action="/entreprises" method="post">
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection