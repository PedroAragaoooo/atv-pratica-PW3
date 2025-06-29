<style>
    * {
        outline: 1px solid #a3a3a3;
    }
</style>
@foreach ($proprietario as $proprietario)
<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>{{$proprietario->id}}</td>
                <td>{{$proprietario->nome}}</td>
                <td>{{$proprietario->cpf}}</td>
                <td>{{$proprietario->telefone}}</td>
                <td>{{$proprietario->email}}</td>
                <td>
					<a href="/proprietario/remover/{{ $proprietario->id }}">Excluir</a>
                    <a href="{{ route('proprietario-edit', $proprietario->id) }}">Atualizar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{-- {{ $clientes->links() }} --}}