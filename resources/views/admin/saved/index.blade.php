@extends('admin.layouts.app')

@section('content')
    @component('admin.components.table')
        @slot('titulo', 'Planetas')
        {{-- @can('create', App\Model::class)
            @slot('create',route('x.create'))
        @endcan --}}
        @slot('head')
            <th>Nome</th>
            <th>Clima</th>
            <th></th>
        @endslot
        @slot('body')
        <div>
            {{-- @foreach($response->results as $planet)
            <tr> --}}
                {{-- <td>{{ $planet->name }}</td>         --}}
                {{-- <td>{{ $planet->climate }}</td>         --}}
                <td class="options">
                        {{-- SHOW --}}
                </td>        
            </tr>
            {{-- @endforeach --}}
        </div>
        {{-- <div class="btn-toolbar">
            <div class="btn-group mr-2">
                @for ($pages = 1; $pages <= $number_pages; $pages++)
                <form action="{{ route('admin.planets.index') }}" method="GET" >
                    <input type="hidden" name="page" value="{{ $pages }}">
                    <button class="btn btn-secondary" type="submit">{{ $pages }}</button>
                </form>
                @endfor
            </div>
        </div> --}}
        @endslot
    @endcomponent
@endsection

@push('scripts')
    <script src="{{ asset('js/components/dataTable.js') }}"></script>
    <script src="{{ asset('js/components/sweetAlert.js') }}"></script>
@endpush