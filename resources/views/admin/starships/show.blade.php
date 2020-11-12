@extends('admin.layouts.app')

@section('content')
    @component('admin.components.create')
        @slot('title', 'Detalhes da Nave')
        @slot('url', route('admin.starships.store'))
        @slot('content')
            @include('admin.starships.form')
        @endslot
    @endcomponent
@endsection

@push('scripts')
    <script>
        $(".form-control").attr("disabled", true);
    </script>
    <script src="{{ asset('js/components/sweetAlert.js') }}"></script>
@endpush