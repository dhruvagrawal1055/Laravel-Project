<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function index()
{
    $menuItems = DB::table('menu_items')->get(); // Retrieve menu items from the 'menu_items' table

    return view('Menu', compact('menuItems'));
}

}
