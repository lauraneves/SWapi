@extends('layouts.app')

@section('content')
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Clima</th>
                    <th scope="col">Terreno</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($planets as $planet) --}}
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$planets['name']}}</td>
                        <td>{{$planets['climate']}}</td>
                        <td>{{$planets['terrain']}}</td>
                    </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>

    </div>
@endsection