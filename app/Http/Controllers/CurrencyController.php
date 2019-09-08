<?php

namespace App\Http\Controllers;

use App\Currency;
use App\ExchangeRate;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index()
    {
        return response()->json(Currency::all());
    }

    public function store(Request $request)
    {
        $currency = Currency::firstOrCreate($request->only(['short_name', 'symbol', 'name']));
        $currency->exchangeRate()->create($request->only(['user_id', 'rate', 'type']));
        return response()->json($currency, 201);
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
