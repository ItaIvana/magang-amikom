@extends('layouts.app')

@section('title', 'Tambah Data Barang')

@section('content')
    <div class="p-5 mb-3">
        <div class="container">
            <form action="{{ url('barang') }}" method="post">
                {{ csrf_field() }}
                <div class="mb-3 row">
                    <label for="kode_barang" class="col-2 col-form-label">Kode Barang</label>
                    <div class="col-10">
                        <input type="text" class="form-control" name="kode_barang" id="kode_barang"
                            placeholder="BRG-XXXX-XXXX">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama_barang" class="col-2 col-form-label">Nama Barang</label>
                    <div class="col-10">
                        <input type="text" class="form-control" name="nama_barang" id="nama_barang"
                            placeholder="Nama Barang">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="stok" class="col-2 col-form-label">Stok</label>
                    <div class="col-10">
                        <input type="number" min="0" step="1" oninput="validity.valid||(value='');"
                            class="form-control" name="stok" id="stok">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="harga_barang" class="col-2 col-form-label">Harga Barang (Rp)</label>
                    <div class="col-10">
                        <input type="number" min="0" step="1" oninput="validity.valid||(value='');"
                            class="form-control" name="harga_barang" id="harga_barang">
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
