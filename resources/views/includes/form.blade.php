@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name"  value="{{ old('name') ?? $client->name}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1"name="email" value="{{old('email') ?? $client->email}}">
  </div>
  <label for="exampleInputEmail1" class="form-label">Statut</label>
  <select class="form-select" aria-label="Default select example"  name="status" value="{{old('status') ?? $client->status}}">
  <option value="1">Actif</option>
  <option value="0">Non actif</option>
</select><br>
  <label for="exampleInputEmail1" class="form-label">Entreprise</label>
  <select class="form-select" aria-label="Default select example"  name="entreprise_id" value="{{old('entreprise_id') ?? $client->entreprise_id}}">
  @foreach($entreprises as $entreprise)
  <option value="{{$entreprise->id}}">{{$entreprise->name}}</option>
  @endforeach
</select><br>