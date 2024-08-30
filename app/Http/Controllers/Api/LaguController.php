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
        //tampilkan data
        //pagination
        //$laguDaerahs = LaguDaerah::all();
        $laguDaerahs = LaguDaerah::paginate(10);
        return response()->json([
            'status' => 'success',
            'data' => $laguDaerahs
        ]);
    }

    //create = POST
    public function create(Request $request)
    {
        //validate
        $request->validate([
            'judul' => 'required',
            'lagu' => 'required',
            'daerah' => 'required'
        ]);

        $laguDaerah = new LaguDaerah;
        $laguDaerah->judul = $request->judul;
        $laguDaerah->lagu = $request->lagu;
        $laguDaerah->daerah = $request->daerah;
        $laguDaerah->save();

        return response()->json([
            'status' => 'success',
            'data' => $laguDaerah
        ], 201);
    }

    //update = PUT , perlu id
    public function update(Request $request, $id)
    {
        //validate
        $request->validate([
            'judul' => 'required',
            'lagu' => 'required',
            'daerah' => 'required'
        ]);

        $laguDaerah = LaguDaerah::find($id);
        $laguDaerah->judul = $request->judul;
        $laguDaerah->lagu = $request->lagu;
        $laguDaerah->daerah = $request->daerah;
        $laguDaerah->save();

        return response()->json([
            'status' => 'success',
            'data' => $laguDaerah
        ], 200);
    }

    //delete
    public function delete($id)
    {
        $laguDaerah = LaguDaerah::find($id);
        $laguDaerah->delete();

        return response()->json([
            'status' => 'success',
            'data' => null
        ], 204);
    }

    /*
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3307
    DB_DATABASE=lagu-daerah-db
    DB_USERNAME=kepow
    DB_PASSWORD=sempak01

    */
}
