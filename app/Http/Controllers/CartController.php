<?php

namespace App\Http\Controllers;

// app/Http/Controllers/CartController.php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
        // Retrieve cart items for the authenticated user and display them in the view
        $cartCount = DB::table('cart')
        ->where('user_id', auth()->user()->id)
        ->count();
        
        $cartItems = DB::table('cart')
            ->where('user_id', auth()->user()->id)
            ->get();

        return view('cart', compact('cartItems','cartCount'));
    }

    public function addToCart(Request $request)
    {
        // Retrieve item details, including the name
        $item = DB::table('menu_items')
            ->select('name', 'price')
            ->where('id', $request->input('item_id'))
            ->first();

        // Calculate the total price for this item
        $total = $item->price * 1;

        // Add the item to the cart
        DB::table('cart')->insert([
            'user_id' => auth()->user()->id,
            'item_id' => $request->input('item_id'),
            'quantity' => 1,
            'total' => $total,
            'created_at' => now(),
            'updated_at' => now(),
            'menu_item_name' => $item->name, 
            'price'=>$item->price
        ]);

        return redirect()->route('cart');
    }




    public function updateCart(Request $request, $itemId)
{
    // Retrieve the item_id for the cart item
    $item_id = DB::table('cart')->where('id', $itemId)->value('item_id');

    // Retrieve the item's price from the menu_items table
    $itemPrice = DB::table('menu_items')->where('id', $item_id)->value('price');

    // Calculate the new total based on the updated quantity and the retrieved item price
    $newTotal = $request->input('quantity') * $itemPrice;

    // Update the quantity and total in the cart table
    DB::table('cart')
        ->where('id', $itemId)
        ->update([
            'quantity' => $request->input('quantity'),
            'total' => $newTotal,
            'updated_at' => now(),
        ]);

    return redirect()->route('cart');
}



    public function removeFromCart($itemId)
    {
        // Remove an item from the cart
        DB::table('cart')->where('id', $itemId)->delete();

        return redirect()->route('cart');
    }
}
