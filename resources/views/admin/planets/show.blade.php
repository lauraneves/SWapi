@extends('admin.layouts.app')

@section('content')
    @component('admin.components.create')
        @slot('title', 'Detalhes do Planeta')
        @slot('url', route('admin.planets.store'))
        @slot('content')
            @include('admin.planets.form')
        @endslot
    @endcomponent
@endsection

@push('scripts')
    <script>
        $(".form-control").attr("disabled", true);
    </script>
    <script src="{{ asset('js/components/sweetAlert.js') }}"></script>
@endpush