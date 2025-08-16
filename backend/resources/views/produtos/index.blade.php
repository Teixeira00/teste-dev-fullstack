<!DOCTYPE html>
<html>
<head>
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Produtos</h1>

    <ul>
        @foreach ($produtos as $produto)
            <li>
                <strong>{{ $produto->nome }}</strong> — {{ $produto->descricao }} - R$ {{ number_format($produto->preco, 2, ',', '.') }}
            </li>
        @endforeach
    </ul>
</body>
</html>
