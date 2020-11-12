<div class="row">
    <div class="form-group col-6">
        <label for="name">Nome </label>
        <input type="text" class="form-control" disabled name="name" id="name" value="{{ $response->name }}">
    </div>
    <div class="form-group col-6">
        <label for="climate">Clima </label>
        <input type="text" class="form-control" disabled name="climate" id="climate" value="{{ $response->climate }}">
    </div>
    <div class="form-group col-4">
        <label for="terrain">Terreno </label>
        <input type="text" class="form-control" disabled name="terrain" id="terrain" value="{{ $response->terrain }}">
    </div>
    <div class="form-group col-4">
        <label for="surface_water">Água de Superfície </label>
        <input type="text" class="form-control" disabled name="surface_water" id="surface_water" value="{{ $response->surface_water }}">
    </div>
    <div class="form-group col-4">
        <label for="population">População </label>
        <input type="text" class="form-control" disabled name="population" id="population" value="{{ $response->population }}">
    </div>
    <div class="form-group col-3">
        <label for="rotation_period">Período de Rotação </label>
        <input type="text" class="form-control" disabled name="rotation_period" id="rotation_period" value="{{ $response->rotation_period }}">
    </div>
    <div class="form-group col-3">
        <label for="orbital_period">Período Orbital </label>
        <input type="text" class="form-control" disabled name="orbital_period" id="orbital_period" value="{{ $response->orbital_period }}">
    </div>
    <div class="form-group col-3">
        <label for="diameter">Diâmetro </label>
        <input type="text" class="form-control" disabled name="diameter" id="diameter" value="{{ $response->diameter }}">
    </div>
    <div class="form-group col-3">
        <label for="gravity">Gravidade </label>
        <input type="text" class="form-control" disabled name="gravity" id="gravity" value="{{ $response->gravity }}">
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