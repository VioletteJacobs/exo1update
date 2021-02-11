@extends('template.main')
@section('content')
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$show->race}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{$show->age}}</h6>
      <a href="/" class="card-link btn btn-danger">Destroy</a>
      <form action="/delete_pet/{{$show->id}}"></form>
    </div>
  </div>
@endsection