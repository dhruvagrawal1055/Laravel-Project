@extends('layouts.app')
@include('navbar')
<div class="container">
    <h2>Your Shopping Cart</h2>

    @if (count($cartItems) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cartItems as $item)
                    <tr>
                    <td>{{ $item->menu_item_name}}</td>
                        <td>
                            <form method="post" action="{{ route('cart.update', $item->id) }}">
                                @csrf
                                @method('PATCH')
                                <input type="number" name="quantity" value="{{ $item->quantity }}" min="1">
                                <button type="submit">Update</button>
                            </form>
                        </td>
                        <td>${{ $item->price }}</td>
                        <td>${{ $item->total}}</td>
                        <td>
                            <form method="post" action="{{ route('cart.remove', $item->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/NotReady" class="btn btn-primary">Proceed to Checkout</a>
        @else
        <p>Your cart is empty.</p>
        <a href="/menu" class="btn btn-primary">Back to Menu</a>
    @endif

</div>
