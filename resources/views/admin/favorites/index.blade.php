@extends('admin.layouts.app')

@section('content')
    @component('admin.components.table')
        @slot('head')
            <th>Item</th>
            <th></th>
        @endslot
        @slot('body')
        <div>
            @foreach($url as $item)
            <tr>
                <td>{{ $item->name }}</td>        
                <td class="options">
                    <form method="POST" class="form-delete" action="{{ route('admin.saved.destroy',$item->id)}}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-dark"><i class="fas fa-trash"></i></button>
                    </form>    
                </td>       
            </tr>
            @endforeach
        </div>
        @endslot
    @endcomponent
@endsection

@push('scripts')
    <script src="{{ asset('js/components/dataTable.js') }}"></script>
    <script src="{{ asset('js/components/sweetAlert.js') }}"></script>
@endpush