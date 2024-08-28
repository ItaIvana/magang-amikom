<?php

namespace App\Http\Controllers;

use App\Http\Client\HttpClient;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = HttpClient::get("api/user/sales");
        $products = json_decode($response->getContent(), true);
        return view('sales.index', compact('products'));
    }

    public function salesAdmin()
    {
        $response = HttpClient::get("api/user/admin");
        $products = json_decode($response->getContent(), true);
        return view('sales.index', compact('products'));
    }

    public function salesAll()
    {
        $response = HttpClient::get("api/user");
        $products = json_decode($response->getContent(), true);
        return view('sales.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sales.create');
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
            'name' => 'required',
            'email' => 'required',
        ]);
        $response = HttpClient::post('api/user', [], [], [], [], $request->getContent());
        if ($response->status() >= 400) {
            return redirect('sales')->with('failed', 'Sales gagal ditambahkan');
        }
        return redirect('sales')->with('success', 'Sales berhasil ditambahkan');;
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
        $response = HttpClient::get("api/user/$id");
        $product = json_decode($response->getContent());
        return view('sales.edit', compact('product', 'id'));
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
            'name' => 'required',
            'email' => 'required',
        ]);
        $request->merge(['id' => $id]);
        $response = HttpClient::put('api/user', [], [], [], [], $request->getContent());
        if ($response->status() >= 400) {
            return redirect('sales')->with('success', 'Sales gagal diperbarui');
        }
        return redirect('sales')->with('success', 'Sales berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = HttpClient::delete("api/user/$id");
        if ($response->status() >= 400) {
            return redirect('sales')->with('failed', 'Sales gagal dihapus');
        }
        return redirect('sales')->with('success', 'Sales berhasil dihapus');
    }
}
