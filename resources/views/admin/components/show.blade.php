<div class="col-md-10 offset-md-1 col-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title title-form">{{ $title ?? null }}</h3>
        </div>
        <div class="card-body">
            {{ $content ?? null }}
        </div>
        <div class="card-footer">
            <button type="submit" form="form-adicionar" class="btn btn-primary float-right">Salvar</button>
            {{ $back ?? null }}
        </div>
    </div>
</div>