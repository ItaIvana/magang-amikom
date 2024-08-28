<?php

namespace App\Http\Controllers;

use App\Http\Client\HttpClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SurveyStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = null;
        if (Auth::user()->role == 'admin') {
            $response = HttpClient::get('api/survey');
        } else {
            $salesName = Auth::user()->name;
            $response = HttpClient::get("api/survey/name/$salesName");
        }
        $products = json_decode($response->getContent(), true);
        return view('survey.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $responseBarang = HttpClient::get('api/barang');
        $barang = json_decode($responseBarang->getContent(), true);
        $responseOutlet = HttpClient::get('api/outlet');
        $outlet = json_decode($responseOutlet->getContent(), true);
        return view('survey.create', compact('barang', 'outlet'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = $this->validate(request(), [
            'nama_outlet' => 'required',
            'nama_barang' => 'required',
            'jumlah_stok' => 'required',
            'jumlah_display' => 'required',
        ]);
        $request->merge(['nama_sales' => Auth::user()->name]);
        $response = HttpClient::post('api/survey', [], [], [], [], $request->getContent());
        if ($response->status() >= 400) {
            return redirect('survey')->with('failed', 'Data survey gagal ditambahkan');
        }
        return redirect('survey')->with('success', 'Data survey berhasil ditambahkan');;
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = HttpClient::delete("api/survey/$id");
        if ($response->status() >= 400) {
            return redirect('survey')->with('failed', 'Survey gagal dihapus');
        }
        return redirect('survey')->with('success', 'Survey berhasil dihapus');
    }
}
