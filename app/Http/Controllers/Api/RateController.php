<?php

namespace App\Http\Controllers\Api;

use App\Rate;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RateController extends Controller
{
    protected $rate;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Rate $rate)
    {
        $this->rate = $rate;
    }

    /**
     * Return all
     *
     * @return response
     */
    public function index()
    {
        return response()->json('Todas as moedas');
    }

    /**
     * Return requested coins
     *
     * @param  string  $coins
     * @return response
     */
    public function list($coins)
    {
        $eCoins = explode(';', strtoupper($coins));

        $validator = Validator::make(['coins' => $eCoins],
            ['coins.*' => 'required|size:3',],
            ['size' => 'As iniciais devem ter exatamente :size letras',]
        );

        if ($validator->fails()) {
            return response()->json($validator->errors()->add('status', false), 422);
        }

        return response()->json($this->rate->findOrFail($eCoins));
    }
}
