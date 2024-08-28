<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\SurveyStock;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SurveyAPIController extends Controller
{
    public function list()
    {
        $list = SurveyStock::all();
        return response()->json($list, 200);
    }

    public function listByName($name)
    {
        $list = SurveyStock::all()->where('nama_sales', $name);
        return response()->json($list, 200);
    }

    public function getById($id)
    {
        $detail = SurveyStock::find($id);
        return response()->json($detail, 200);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_sales' => 'required',
            'nama_outlet' => 'required',
            'nama_barang' => 'required',
            'jumlah_stok' => 'required',
            'jumlah_display' => 'required',
        ]);
        $request->merge(['visit_datetime' => Carbon::now()->toDateTimeLocalString()]);

        if ($validator->fails()) {
            return response()->json('nama_sales, nama_outlet, nama_barang, jumlah_stok, and jumlah_display are required', 400);
        }
        $result = SurveyStock::create($request->all());
        return response()->json($result, 201);
    }


    public function update(Request $request)
    {
        $id = $request->input('id');
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'nama_sales' => 'required',
            'nama_outlet' => 'required',
            'nama_barang' => 'required',
            'jumlah_stok' => 'required',
            'jumlah_display' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json('id, nama_sales, nama_outlet, nama_barang, jumlah_stok, and jumlah_display are required', 400);
        }

        $product = SurveyStock::find($id);
        $product->nama_sales = $request->get('nama_sales');
        $product->nama_outlet = $request->get('nama_outlet');
        $product->nama_barang = $request->get('nama_barang');
        $product->jumlah_stok = $request->get('jumlah_stok');
        $product->jumlah_display = $request->get('jumlah_display');
        $product->save();

        $result = SurveyStock::find($id);

        return response()->json($result, 200);
    }


    public function delete($id)
    {
        SurveyStock::where('id', $id)->delete();
        return response()->json("Data Survey with id $id already deleted", 200);
    }
}
