@extends('layouts.app')

@section('title', 'Data Sales')

@section('content')
    <div class="p-4 mb-3">
        <h2>Data Sales</h2>
        <div style="padding-bottom: 10px">
            <a name="" id="" class="btn btn-primary btn-sm" href="/sales" role="button">Sales Only</a>
            <a name="" id="" class="btn btn-primary btn-sm" href="{{ route('sales/admin') }}" role="button">Admin Only</a>
            <a name="" id="" class="btn btn-primary btn-sm" href="{{ route('sales/all') }}" role="button">All(Sales and
                Admin)</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Role</th>
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
                            <td>{{ $product['name'] }}</td>
                            <td>{{ $product['email'] }}</td>
                            <td>{{ $product['password'] }}</td>
                            <td>{{ $product['role'] }}</td>
                            <td><a href="{{ action('SalesController@edit', $product['id']) }}"
                                    class="btn btn-warning">Ubah</a>
                            </td>
                            <td>
                                <form action="{{ action('SalesController@destroy', $product['id']) }}" method="post">
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
            <a name="" id="" class="btn btn-primary" href="sales/create" role="button">Tambah Data
                Sales</a>
        </div>

    </div>
@endsection





