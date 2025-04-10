<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreProductController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return dd($request->all());
    }
}
