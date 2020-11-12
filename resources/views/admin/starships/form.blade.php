<div class="row">
    <input type="hidden" name="id" value="{{ $id }}">
    <div class="form-group col-6">
        <label for="name">Nome </label>
        <input type="text" class="form-control" disabled name="name" id="name" value="{{ $response->name }}">
    </div>
    <div class="form-group col-6">
        <label for="model">Modelo </label>
        <input type="text" class="form-control" disabled name="model" id="model" value="{{ $response->model }}">
    </div>
    <div class="form-group col-6">
        <label for="manufacturer">Fabricante </label>
        <input type="text" class="form-control" disabled name="manufacturer" id="manufacturer" value="{{ $response->manufacturer }}">
    </div>
    <div class="form-group col-6">
        <label for="starship_class">Classe </label>
        <input type="text" class="form-control" disabled name="starship_class" id="starship_class" value="{{ $response->starship_class }}">
    </div>
    <div class="form-group col-4">
        <label for="cost_in_credits">Custo </label>
        <input type="text" class="form-control" disabled name="cost_in_credits" id="cost_in_credits" value="{{ $response->cost_in_credits }}">
    </div>
    <div class="form-group col-4">
        <label for="length">Comprimento </label>
        <input type="text" class="form-control" disabled name="length" id="length" value="{{ $response->length }}">
    </div>
    <div class="form-group col-4">
        <label for="consumables">Consumível </label>
        <input type="text" class="form-control" disabled name="consumables" id="consumables" value="{{ $response->consumables }}">
    </div>
    <div class="form-group col-4">
        <label for="crew">Tripulação </label>
        <input type="text" class="form-control" disabled name="crew" id="crew" value="{{ $response->crew }}">
    </div>
    <div class="form-group col-4">
        <label for="passengers">Passageiros </label>
        <input type="text" class="form-control" disabled name="passengers" id="passengers" value="{{ $response->passengers }}">
    </div>
    <div class="form-group col-4">
        <label for="cargo_capacity">Capacidade de Carga </label>
        <input type="text" class="form-control" disabled name="cargo_capacity" id="cargo_capacity" value="{{ $response->cargo_capacity }}">
    </div>
    <div class="form-group col-4">
        <label for="max_atmosphering_speed">Velocidade Atmosférica Max. </label>
        <input type="text" class="form-control" disabled name="max_atmosphering_speed" id="max_atmosphering_speed" value="{{ $response->max_atmosphering_speed }}">
    </div>
    <div class="form-group col-4">
        <label for="hyperdrive_rating">Hyperdrive </label>
        <input type="text" class="form-control" disabled name="hyperdrive_rating" id="hyperdrive_rating" value="{{ $response->hyperdrive_rating }}">
    </div>
    <div class="form-group col-4">
        <label for="MGLT">MGLT </label>
        <input type="text" class="form-control" disabled name="MGLT" id="MGLT" value="{{ $response->MGLT }}">
    </div>
</div>

@push('scripts')
    <script>
        $(function(){
            $('.select2').select2();
        })
        $('select[value]').each(function(){
            $(this).val($(this).attr('value'));
        })
    </script>
@endpush