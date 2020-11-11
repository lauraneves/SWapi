@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="form-group col-12">
        <label for="name">Nome </label>
        <input type="text" class="form-control" disabled name="name" id="name" value="{{ $response->name }}">
    </div>
    <div class="form-group col-12">
        <label for="model">Modelo </label>
        <input type="text" class="form-control" disabled name="model" id="model" value="{{ $response->model) }}">
    </div>
    <div class="form-group col-12">
        {{-- <label for="model">Modelo </label> --}}
        {{-- <input type="text" class="form-control" disabled name="model" id="model" value="{{ $response->model) }}"> --}}
    </div>
</div>
@endsection