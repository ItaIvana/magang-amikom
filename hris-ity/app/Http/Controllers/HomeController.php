<?php


namespace App\Http\Controllers;


use App\Http\Client\HttpClient;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responseSales = HttpClient::get("api/user/sales");
        $totalSales = count(json_decode($responseSales->getContent(), true));
        $responseBarang = HttpClient::get('api/barang');
        $totalBarang = count(json_decode($responseBarang->getContent(), true));
        $responseOutlet = HttpClient::get('api/outlet');
        $totalOutlet = count(json_decode($responseOutlet->getContent(), true));
        return view('home', compact('totalSales', 'totalBarang', 'totalOutlet'));
    }
}
