<h1>Editar Cartório</h1>

<form method="POST" action="/cartorios/{{ $cartorio->id }}">
    @csrf
    @method('PUT')

    <input type="text" name="nome" value="{{ $cartorio->nome }}">

    <!-- CNPJ -->
    <input type="text" name="cnpj" id="cnpj" value="{{ $cartorio->cnpj }}">

    <input type="text" name="tabeliao" value="{{ $cartorio->tabeliao }}">

    <select name="municipio_id">
        @foreach ($municipios as $municipio)
            <option value="{{ $municipio->id }}"
                {{ $cartorio->municipio_id == $municipio->id ? 'selected' : '' }}>
                {{ $municipio->nome }}
            </option>
        @endforeach
    </select>

    <label>
        <input type="checkbox" name="ativo" value="1"
            {{ $cartorio->ativo ? 'checked' : '' }}>
        Ativo
    </label>

    <button type="submit">Atualizar</button>
</form>

<!-- IMASK -->
<script src="https://unpkg.com/imask"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const input = document.getElementById('cnpj');

    if (!input) return;

    IMask(input, {
        mask: '00.000.000/0000-00'
    });
});

