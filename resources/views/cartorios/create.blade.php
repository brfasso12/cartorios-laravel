<h1>Novo Cartório</h1>

<form method="POST" action="/cartorios">
    @csrf

    <input type="text" name="nome" placeholder="Nome">

    <input type="text" name="cnpj" placeholder="CNPJ">

    <input type="text" name="tabeliao" placeholder="Tabelião">

    <select name="municipio_id">
        @foreach ($municipios as $municipio)
            <option value="{{ $municipio->id }}">
                {{ $municipio->nome }}
            </option>
        @endforeach
    </select>

    <label>
        <input type="checkbox" name="ativo" value="1">
        Ativo
    </label>

    <button type="submit">Salvar</button>
</form>