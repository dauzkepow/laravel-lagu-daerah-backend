<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LaguDaerah;
use Illuminate\Http\Request;

class LaguController extends Controller
{
    //index
    public function index()
    {
        $laguDaerahs = LaguDaerah::all();
        return response()->json([
            'status' => 'success',
            'data' => $laguDaerahs
        ]);
    }
}
