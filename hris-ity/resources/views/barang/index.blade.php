@extends('layouts.app')

@section('title', 'Data Barang')

@section('content')
    <div class="p-4 mb-3">
        <h2>Data Barang </h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Harga Barang (Rp)</th>
                        <th scope="col" colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $product['kode_barang'] }}</td>
                            <td>{{ $product['nama_barang'] }}</td>
                            <td>{{ $product['stok'] }}</td>
                            <td>{{ $product['harga_barang'] }}</td>
                            <td><a href="{{ action('BarangController@edit', $product['id']) }}"
                                    class="btn btn-warning">Ubah</a>
                            </td>
                            <td>
                                <form action="{{ action('BarangController@destroy', $product['id']) }}" method="post">
                                    {{ csrf_field() }}
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button class="btn btn-danger" type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            <a name="" id="" class="btn btn-primary" href="barang/create" role="button">Tambah Data
                Barang</a>
        </div>

    </div>
@endsection





