@extends('layouts.app')

@section('title', 'Edit Data Outlet')

@section('content')
    <div class="p-5 mb-3">
        <div class="container">
            <form action="{{ action('OutletController@update', $id) }}" method="post">
                {{ csrf_field() }}
                <input name="_method" type="hidden" value="PATCH">
                <div class="mb-3 row">
                    <label for="nama_outlet" class="col-2 col-form-label">Nama Outlet</label>
                    <div class="col-10">
                        <input type="text" class="form-control" name="nama_outlet" id="nama_outlet"
                            value="{{ $product->nama_outlet }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="lokasi_outlet" class="col-2 col-form-label">Lokasi</label>
                    <div class="col-10">
                        <input type="text" class="form-control" name="lokasi_outlet" id="lokasi_outlet"
                            value="{{ $product->lokasi_outlet }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama_pj" class="col-2 col-form-label">Nama Penanggung Jawab</label>
                    <div class="col-10">
                        <input type="text" class="form-control" name="nama_pj" id="nama_pj"
                            value="{{ $product->nama_pj }}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="">
                        <button type="submit" class="btn btn-primary">Update Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection





