<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\JenisBarang;

class JenisBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = JenisBarang::all();
        return view('pendataan.jenis_barang.index', compact(
            'datas'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new JenisBarang;
        $model->jenis_barang = $request->jenis_barang;
        $model->save();

        return redirect('pendataan/jenis-barang');

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
        $model = JenisBarang::find($id);

        return view('pendataan.jenis_barang.edit', compact(
            'model',
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
        $model = JenisBarang::find($id);
        $model->jenis_barang = $request->jenis_barang;
        $model->save();
        return redirect('pendataan/jenis-barang');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = JenisBarang::find($id);
        $model->delete();
        return redirect('pendataan/jenis-barang');
    }
}
