<?php

namespace App\Http\Controllers;

use App\Http\Requests\IncomeRequest;
use App\Models\Income;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class IncomeController extends Controller
{
    private function calculateTotalIncome($totalGains, $totalExpenses)
    {
        $totalGains =
        (float) str_replace(',', '.', str_replace('.', '', $totalGains));

        $totalExpenses =
        (float) str_replace(',', '.', str_replace('.', '', $totalExpenses));

        return number_format($totalGains + $totalExpenses, 2, ',', '.');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalGains =
        number_format(DB::table('incomes')->where('itemPrice', '>', 0)->sum('itemPrice'), 2, ',', '.');

        $totalExpenses =
        number_format(DB::table('incomes')->where('itemPrice', '<', 0)->sum('itemPrice'), 2, ',', '.');

        $totalIncome =
        $this->calculateTotalIncome($totalGains, $totalExpenses);

        // Passando os totais atualizados para a view
        return view('income', [
            'title' => 'Rentabilidade',
            'incomes' => Income::orderByDesc('id')->get(),
            'totalGains' => $totalIncome,
            'totalExpenses' => $totalExpenses,
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
    public function store(IncomeRequest $request)
    {
        $validated = $request->validated();

        $incomeSaved = (new Income())->insert($validated);

        if ($incomeSaved) {
            Session::flash('success', 'Transação adicionada com sucesso!');
        } else {
            Session::flash('error', 'Erro ao adicionar nova Transação');
        }

        return back();
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}
