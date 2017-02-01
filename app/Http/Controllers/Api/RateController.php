<?php

namespace App\Http\Controllers\Api;

use App\Rate;
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
        return response()->json($this->rate->get());
    }
}
