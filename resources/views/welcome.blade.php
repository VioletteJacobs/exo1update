@extends('template.main')
@section('content')
    <div>
        <h1 class="text-center">Tout les animaux</h1>
    <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Race</th>
            <th scope="col">Age</th>
            <th scope="col">Show</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Pets as $item)
                <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->race}}</td>
                <td>{{$item->age}}</td>
                <td> <a href="/show_pet/{{$item->id}}" class="btn btn-success">Show</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection