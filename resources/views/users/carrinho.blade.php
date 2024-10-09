@extends('layouts.app')

@section('content')
    <div class="cart">
        <h2>Meu Carrinho</h2>
        <table>
            <thead>
                <tr>
                    <th>Curso</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th>Subtotal</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($carrinho as $item)
                    <tr>
                        <td>{{ $item->curso->nome }}</td>
                        <td>{{ $item->quantidade }}</td>
                        <td>R$ {{ $item->curso->preco }}</td>
                        <td>R$ {{ $item->quantidade * $item->curso->preco }}</td>
                        <td>
                            <a href="/carrinho/remove/{{ $item->id }}" class="btn btn-danger">Remover</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="checkout">
            <p>Total: R$ {{ $total }}</p>
            <a href="/pedido/confirmar" class="btn btn-success">Confirmar Pedido</a>
        </div>
    </div>
@endsection
