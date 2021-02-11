@extends('template.main')
@section('content')
    <div class="container">
        <h1>Changer un élément: </h1>
        <form action="/update_pet/{{$edit->id}}" method="POST">
            @csrf
            <label for="">Race: 
                <input type="text" name="race" value="{{$edit->race}}">
            </label>
            <label for="">Age: 
                <input type="text" name="age"value="{{$edit->age}}">
            </label>
            <button type ="submit" class="btn btn-dark">Modifier</button>
        </form>
    </div>
@endsection