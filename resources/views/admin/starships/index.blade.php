@extends('admin.layouts.app')

@section('content')
    @component('admin.components.table')
        @slot('titulo', 'Naves')
       
        @slot('head')
            <th>Nome</th>
            <th>Modelo</th>
            <th></th>
        @endslot
        @slot('body')
        @foreach ($response->results as $starship)
        <tr>
            <td>{{$starship->name}}</td>
            <td>{{$starship->model}}</td>
            <td class="options">
                {{-- FAZER O SHOW AQUI --}}
                {{-- <a href="{{ route('starship.edit', $starship->id) }}" class="btn btn-primary">Editar</a> --}}
                {{-- <form class="form-delete" action="{{ route('starship.destroy', $starship->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form> --}}
            </td>       
        </tr>
        @endforeach
        <div class="pagination">
            @for ($pages = 1; $pages <= $number_pages; $pages++)
            <form action="{{ route('admin.starships.index') }}" method="GET" >
                <input type="hidden" name="page" value="{{ $pages }}">
                <button type="submit">{{ $pages }}</button>
            </form>
            @endfor
        </div>
        @endslot
    @endcomponent
@endsection

@push('scripts')
    <script src="{{ asset('js/components/dataTable.js') }}"></script>
    <script src="{{ asset('js/components/sweetAlert.js') }}"></script>
@endpush