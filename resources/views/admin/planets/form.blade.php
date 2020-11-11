@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="form-group col-12">
        <label for="name" >Nome </label>
        <input type="text" class="form-control" disabled name="name" id="name" value="{{ $response->name }}">
    </div>
    <div class="form-group col-12">
        <label for="climate">Clima </label>
        <input type="text" class="form-control" disabled name="climate" id="climate" value="{{ $response->climate }}">
    </div>
</div>
@endsection