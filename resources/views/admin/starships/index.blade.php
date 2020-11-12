@extends('admin.layouts.app')

@section('content')
    @component('admin.components.table')
        {{-- @slot('titulo', 'Naves') --}}
        {{-- @can('create', App\Model::class)
            @slot('create',route('x.create'))
        @endcan --}}
        @slot('head')
            <th>Nome</th>
            <th>Modelo</th>
            <th></th>
        @endslot
        @slot('body')
        <div>
            @foreach($response->results as $starship)
            @php
                $id = substr($starship->url, 31, 31);
            @endphp
            <tr>
                <td>{{ $starship->name }}</td>        
                <td>{{ $starship->model }}</td>        
                <td class="options">
                    <a href="{{ route('admin.starships.form', $id) }}" class="btn btn-success" title="Visualizar"><i class="far fa-eye"></i></a>
                </td>   
            </tr>
            @endforeach
        </div>
        <div class="btn-toolbar">
            <div class="btn-group mr-2">
                @for ($pages = 1; $pages <= $number_pages; $pages++)
                <form action="{{ route('admin.starships.index') }}" method="GET" >
                    <input type="hidden" name="page" value="{{ $pages }}">
                    <button class="btn btn-secondary" type="submit">{{ $pages }}</button>
                </form>
                @endfor
            </div>
        </div>
        @endslot
    @endcomponent
@endsection

@push('scripts')
    <script src="{{ asset('js/components/sweetAlert.js') }}"></script>
@endpush