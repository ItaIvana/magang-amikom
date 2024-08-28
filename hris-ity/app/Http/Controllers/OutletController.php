<?php

namespace App\Http\Controllers;

use App\Http\Client\HttpClient;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = HttpClient::get('api/outlet');
        $products = json_decode($response->getContent(), true);
        return view('outlet.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('outlet.create');
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
            'nama_outlet' => 'required',
            'lokasi_outlet' => 'required',
            'nama_pj' => 'required'
        ]);
        $response = HttpClient::post('api/outlet', [], [], [], [], $request->getContent());
        if ($response->status() >= 400) {
            return redirect('outlet')->with('failed', 'Outlet gagal ditambahkan');
        }
        return redirect('outlet')->with('success', 'Outlet berhasil ditambahkan');;
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
        $response = HttpClient::get("api/outlet/$id");
        $product = json_decode($response->getContent());
        return view('outlet.edit', compact('product', 'id'));
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
            'nama_outlet' => 'required',
            'lokasi_outlet' => 'required',
            'nama_pj' => 'required'
        ]);
        $request->merge(['id' => $id]);
        $response = HttpClient::put('api/outlet', [], [], [], [], $request->getContent());
        if ($response->status() >= 400) {
            return redirect('outlet')->with('failed', 'Outlet gagal diperbarui');
        }
        return redirect('outlet')->with('success', 'Outlet berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = HttpClient::delete("api/outlet/$id");
        if ($response->status() >= 400) {
            return redirect('outlet')->with('failed', 'Outlet gagal dihapus');
        }
        return redirect('outlet')->with('success', 'Outlet berhasil dihapus');
    }
}
