<h1>Cartórios</h1>

<a href="/cartorios/create">+ Novo Cartório</a>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>CNPJ</th>
        <th>Tabelião</th>
        <th>Município</th>
        <th>Ativo</th>
        <th>Ações</th>
    </tr>

    @foreach ($cartorios as $cartorio)
        <tr>
            <td>{{ $cartorio->nome }}</td>

            <td>
                {{ preg_replace('/^(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})$/', '$1.$2.$3/$4-$5', $cartorio->cnpj) }}
            </td>

            <td>{{ $cartorio->tabeliao }}</td>
            <td>{{ $cartorio->municipio->nome ?? '' }}</td>
            <td>{{ $cartorio->ativo ? 'Sim' : 'Não' }}</td>

            <!-- AQUI ESTÁ O CORRETO -->
            <td>
                <a href="/cartorios/{{ $cartorio->id }}/edit">Editar</a>

                <form method="POST" action="/cartorios/{{ $cartorio->id }}" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>