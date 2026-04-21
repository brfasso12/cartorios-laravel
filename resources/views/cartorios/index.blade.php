<h1>Cartórios</h1>

<a href="/cartorios/create">+ Novo Cartório</a>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>CNPJ</th>
        <th>Tabelião</th>
        <th>Município</th>
        <th>Ativo</th>
    </tr>

    @foreach ($cartorios as $cartorio)
        <tr>
            <td>{{ $cartorio->nome }}</td>
            <td>{{ $cartorio->cnpj }}</td>
            <td>{{ $cartorio->tabeliao }}</td>
            <td>{{ $cartorio->municipio->nome ?? '' }}</td>
            <td>{{ $cartorio->ativo ? 'Sim' : 'Não' }}</td>
        </tr>
    @endforeach
</table>
<a href="/cartorios/{{ $cartorio->id }}/edit">Editar</a>

<form method="POST" action="/cartorios/{{ $cartorio->id }}" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Excluir</button>
</form>
<form method="POST" action="/cartorios/{{ $cartorio->id }}" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Excluir</button>
</form>