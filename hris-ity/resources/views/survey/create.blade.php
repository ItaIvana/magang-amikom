@extends('layouts.app')


@section('title', 'Tambah Data Survey')


@section('content')
    <div class="p-5 mb-3">
        <div class="container">
            <form action="{{ url('survey') }}" method="post">
                {{ csrf_field() }}
                <div class="mb-3 row">
                    <label for="nama_barang" class="col-2 col-form-label">Nama Barang</label>
                    <div class="col-10">
                        <select class="form-select" name="nama_barang" id="nama_barang">
                            <option selected>Pilih Barang</option>
                            @foreach ($barang as $brg)
                                <option value="{{ $brg['nama_barang'] }}">{{ $brg['nama_barang'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama_outlet" class="col-2 col-form-label">Nama Outlet</label>
                    <div class="col-10">
                        <select class="form-select" name="nama_outlet" id="nama_outlet">
                            <option selected>Pilih Outlet</option>
                            @foreach ($outlet as $out)
                                <option value="{{ $out['nama_outlet'] }}">{{ $out['nama_outlet'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jumlah_stok" class="col-2 col-form-label">Jumlah Stok</label>
                    <div class="col-10">
                        <input type="number" min="0" step="1" oninput="validity.valid||(value='');" class="form-control" name="jumlah_stok" id="jumlah_stok">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jumlah_display" class="col-2 col-form-label">Jumlah Display</label>
                    <div class="col-10">
                        <input type="number" min="0" step="1" oninput="validity.valid||(value='');" class="form-control" name="jumlah_display" id="jumlah_display">
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
