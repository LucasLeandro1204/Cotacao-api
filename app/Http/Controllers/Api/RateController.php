<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RateController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Return all
     *
     * @return response
     */
    public function all()
    {
        return response()->json('Todas as moedas');
    }

    /**
     * Return requested
     *
     * @return response
     */
    public function list(Request $request)
    {
        return response()->json('Todas as moedas');
    }
}
