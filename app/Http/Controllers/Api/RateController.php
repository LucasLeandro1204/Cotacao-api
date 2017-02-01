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
    public function index()
    {
        return response()->json('Todas as moedas');
    }

    /**
     * Return requested coins
     *
     * @return response
     */
    public function list()
    {
        return response()->json('Somente as moedas solicitadas');
    }
}
