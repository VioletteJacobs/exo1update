@extends('template.main')
@section('content')
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$show->race}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{$show->age}}</h6>

      <form action="/delete_pet/{{$show->id}}" method="POST">
          @csrf
          <button class="btn btn-danger" type="submit">Destroy</button>
      </form>
      <a href="/edit_pet/{{$show->id}}" class="btn btn-primary">Edit</a>
    </div>
  </div>
@endsection