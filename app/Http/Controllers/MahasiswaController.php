<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Transformers\MahasiswaTransformer;

class MahasiswaController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function show()
    {
        $st = Mahasiswa::all();

        return $this->response->collection($st, new MahasiswaTransformer);
    }

    public function showDetails($id)
    {
        $st = Mahasiswa::find($id);

        return $this->response->item($st, new MahasiswaTransformer);
    }

    public function store(Request $request)
    {
        $st = Mahasiswa::create($request->all());

        return response()->json($st, 201);
    }

    public function update($id, Request $request)
    {
        $st = Mahasiswa::findOrFail($id);
        $st->update($request->all());

        return response()->json($st, 200);
    }

    public function delete($id)
    {
        Mahasiswa::findOrFail($id)->delete();
        return response('Mahasiswa berhasil dihapus', 200);
    }
}
