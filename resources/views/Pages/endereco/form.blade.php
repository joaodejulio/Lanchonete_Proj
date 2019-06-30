@csrf

<div class="form-group">
    <label for="cidade">Cidade</label>
    <input type="text" 
           class="form-control" 
           id="cidade"
           name="nome"
           value="{{ isset($endereco) ? $endereco->cidade : '' }}">
</div>

<div class="form-group">
    <label for="estado">Estado</label>
    <input type="text" 
            class="form-control" 
            id="estado"
            name="estado"
            value="{{ isset($endereco) ? $endereco->estado : '' }}">
</div>

<div class="row">
    <button type="reset" class="btn btn-light mr-2">Limpar campos</button>
    <button type="submit" class="btn btn-success">Enviar</button>
</div>