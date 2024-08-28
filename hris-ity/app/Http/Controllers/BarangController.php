<?php

namespace App\Http\Controllers;

use App\Http\Client\HttpClient;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = HttpClient::get('api/barang');
        $products = json_decode($response->getContent(), true);
        return view('barang.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'stok' => 'required',
            'harga_barang' => 'required'
        ]);
        $response = HttpClient::post('api/barang', [], [], [], [], $request->getContent());
        if ($response->status() >= 400) {
            return redirect('barang')->with('failed', 'Barang gagal ditambahkan');
        }
        return redirect('barang')->with('success', 'Barang berhasil ditambahkan');
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
        $response = HttpClient::get("api/barang/$id");
        $product = json_decode($response->getContent());
        return view('barang.edit', compact('product', 'id'));
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
        $this->validate(request(), [
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'stok' => 'required',
            'harga_barang' => 'required'
        ]);
        $request->merge(['id' => $id]);
        $response = HttpClient::put('api/barang', [], [], [], [], $request->getContent());
        if ($response->status() >= 400) {
            return redirect('barang')->with('failed', 'Barang gagal diperbarui');
        }
        return redirect('barang')->with('success', 'Barang berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = HttpClient::delete("api/barang/$id");
        if ($response->status() >= 400) {
            return redirect('barang')->with('failed', 'Barang gagal dihapus');
        }
        return redirect('barang')->with('success', 'Barang berhasil dihapus');
    }
}
