<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\JenisBarang;

class PendataanBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Barang::all();
        $jenisBarang = JenisBarang::all();

        return view('pendataan.index', compact(
            'datas',
            'jenisBarang'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Barang;
        $jenisBarang = JenisBarang::all();
        return view('pendataan.create', compact(
            'model',
            'jenisBarang',
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Barang;

        $model->nama_barang = $request->nama_barang;
        $model->jumlah_barang = $request->jumlah_barang;
        $model->satuan_barang = $request->satuan_barang;
        $model->jenis_barang = $request->jenis_barang;

        $model->save();
        return redirect('pendataan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Barang::find($id);
        $jenisBarang = JenisBarang::all();
        return view('pendataan.edit', compact(
            'model',
            'jenisBarang',
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Barang::find($id);
        $model->nama_barang = $request->nama_barang;
        $model->jumlah_barang = $request->jumlah_barang;
        $model->satuan_barang = $request->satuan_barang;
        $model->jenis_barang = $request->jenis_barang;

        $model->save();
        return redirect('pendataan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Barang::find($id);
        $model->delete();
        return redirect('pendataan');
    }
}
