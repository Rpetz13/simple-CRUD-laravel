<?php

namespace App\Http\Controllers;

use App\Models\Produks;
use Illuminate\Http\Request;

class ProduksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produks::all();

        return view('index', [
            'produks' => $produk
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_produk' => 'required',
            'keterangan' => 'required|min:20',
            'harga' => 'required|numeric',
            'qty' => 'required|numeric'
        ]);

        Produks::create([
            'nama_produk' => $request->nama_produk,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga,
            'qty' => $request->qty
        ]);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahakan');
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
    public function edit(Produks $produk)
    {
        return view('edit', [
            'produks' => $produk,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produks $produk)
    {
        $this->validate($request, [
            'nama_produk' => 'required',
            'keterangan' => 'required|min:20',
            'harga' => 'required|numeric',
            'qty' => 'required|numeric'
        ]);

        $produk->update([
            'nama_produk' => $request->nama_produk,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga,
            'qty' => $request->qty,
        ]);

        return redirect()->route('produk.index')->with('success', 'Produk telah di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produks $produk)
    {
        $produk->delete();

        return redirect()->route('produk.index')->with('success', 'Produk telah terhapus');
    }
}
