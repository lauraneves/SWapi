@extends('admin.layouts.app')

@section('content')
    @component('admin.components.table')
        @slot('head')
            <th>Nome</th>
        @endslot
        @slot('body')
        <div>
            @foreach($favoritesStarships as $favoriteS)
            <tr>
                <td>{{ $favoriteS->name }}</td>        
            </tr>
            @endforeach
            @foreach($favoritesPlanets as $favoriteP)
            <tr>
                <td>{{ $favoriteP->name }}</td>        
            </tr>
            @endforeach
        </div>
        @endslot
    @endcomponent
@endsection

@push('scripts')
    <script src="{{ asset('js/components/sweetAlert.js') }}"></script>
@endpush