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
    public function index()
    {
        return view('stock', [
            'title' => 'Estoque',
            'items' => Item::orderByDesc('id')->get(),
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

        if ($request->input('action') === 'decrease') {
            --$item->itemQnt;
        } elseif ($request->input('action') === 'increase') {
            ++$item->itemQnt;
        }

        $lowStock = $item->itemQnt <= 2;

        if ($lowStock) {
            Session::flash('error', 'Estoque baixo');
        }

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
