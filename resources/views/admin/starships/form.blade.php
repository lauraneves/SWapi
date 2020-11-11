<div class="row">
    <div class="form-group col-12">
        <label for="name">Nome </label>
        <input type="text" class="form-control" name="name" id="name" value="{{ $response->starship->name) }}">
    </div>
    <div class="form-group col-12">
        <label for="model">Marca </label>
        <input type="text" class="form-control" name="model" id="model" value="{{ $response->starship->model) }}">
    </div>
</div>