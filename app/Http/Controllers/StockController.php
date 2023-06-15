<?php

namespace App\Http\Controllers;

use App\Models\Income as Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $searchQuery = $request->input('searchBar');
        $items = Item::where('itemName', 'not like', '%salário%')->orderByDesc('id')->get();

        $items = $searchQuery
        ? $items->where('itemName', 'LIKE', '%'.$searchQuery.'%')
        : $items;

        $message = $items->isEmpty() ? 'Nenhum item foi encontrado' : '';

        return view('stock', [
            'title' => 'Estoque',
            'items' => $items,
            'message' => $message,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Item::findOrFail($id);

        $quantity = $item->itemQnt;
        $lowStock = $quantity <= 2;

        if ($request->input('action') === 'decrease') {
            $quantity = ($quantity > 0)
            ? ($quantity - 1)
            : $quantity;
        } elseif ($request->input('action') === 'increase') {
            ++$quantity;
        }

        if ($lowStock) {
            Session::flash('error', 'Estoque baixo');
        }

        $item->itemQnt = $quantity;
        $item->save();

        if ($item->itemQnt === 0) {
            $item->delete();
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}
