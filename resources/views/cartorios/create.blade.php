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

    <input type="checkbox" name="ativo" value="1"> Ativo

    <button type="submit">Salvar</button>
</form>

<!-- 🔥 SCRIPT TEM QUE FICAR AQUI EMBAIXO -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const input = document.querySelector('input[name="cnpj"]');

    if (!input) {
        console.log("CNPJ não encontrado");
        return;
    }

    input.addEventListener("input", function () {
        let v = input.value.replace(/\D/g, "");

        v = v.replace(/^(\d{2})(\d)/, "$1.$2");
        v = v.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3");
        v = v.replace(/\.(\d{3})(\d)/, ".$1/$2");
        v = v.replace(/(\d{4})(\d)/, "$1-$2");

        input.value = v;
    });
});
</script>