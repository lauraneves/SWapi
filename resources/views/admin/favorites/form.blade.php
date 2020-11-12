@include('admin.layouts.app')

@component('content')
    <div class="row">
        <div class="form-group col-12">
            <label for="name" >Nome </label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $response->planet->name) }}">
        </div>
    </div>
@endcomponent