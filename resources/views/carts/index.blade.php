@extends('layouts.app')

@section('content')
    <h1>Carrinho</h1>
    @if ($cart->isEmpty())
        <p>Seu carrinho está vazio.</p>
    @else
        <ul>
            @foreach ($cart->products as $product)
                <li>
                    {{ $product->name }} - {{ $product->price }}
                    <form action="{{ route('cart.remove', $product->id) }}" method="POST">
                        @csrf
                        <button type="submit">Remover</button>
                    </form>
                </li>
            @endforeach
        </ul>
        <form action="{{ route('order.create') }}" method="POST">
            @csrf
            <button type="submit">Fazer Pedido</button>
        </form>
    @endif
@endsection
