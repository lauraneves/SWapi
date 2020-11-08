@extends('layouts.app')

@section('content')
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Modelo</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($response->results as $starship)
                    <tr>
                        <td>{{$starship->name}}</td>
                        <td>{{$starship->model}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
          
    </div>
@endsection