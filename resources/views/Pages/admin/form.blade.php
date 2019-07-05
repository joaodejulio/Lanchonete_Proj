@csrf

<div class="form-group">
    <label for="cidade">Produto</label>
    <input type="text" 
           class="form-control" 
           id="cidade"
           name="nome"
           value="{{ isset($produto) ? $produto->nome : '' }}">
</div>

<div class="form-group">
    <label for="descricao">Descricao</label>
    <input type="text" 
            class="form-control" 
            id="descricao"
            name="descricao"
            value="{{ isset($produto) ? $produto->descricao : '' }}">
</div>


<div class="form-group">
        <label for="valor">Valor</label>
        <input type="text" 
                class="form-control" 
                id="valor"
                name="valor"
                value="{{ isset($produto) ? $produto->valor : '' }}">
    </div>
    <input type="hidden" class="form-control" id="quantidade" name="quantidade" value="1">
    
    <div class = "form-group">
        <input type="file" id="img" name="img">
    </div>

<div class="row">
    <button type="reset" class="btn btn-light mr-2">Limpar campos</button>
    <button type="submit" class="btn btn-success">Enviar</button>
</div>