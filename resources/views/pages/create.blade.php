@extends('template.main')
@section('content')
<div class="container ">
    <h1>Enregistrer un nouvel animal</h1>
    <form action="/add_pet" class="w-75 m-5" method="POST">
    @csrf
    <label for="">Race: 
        <input type="text" name="race">
    </label>
    <label for="">Age: 
        <input type="text" name="age">
    </label>
    <button type="submit" class="btn btn-primary"> Enregistrer</button>
    </form>
</div>

@endsection