@extends('layouts.app')


@section('title', 'Dashboard')


@section('content')
    <div class="p-1 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5 text-center">
            <h1 class="display-5 fw-bold ">Sales Visit</h1>
            @if (Auth::user()->role == 'admin')
                <p><img src="https://www.polly.ai/hubfs/Blog%20Images/Illustrations%20%28blue,%20png%29/Analyzing%20Results%20Pro%204.png"
                        height="250">
                </p>
                <h5 class="fs-4">Selamat datang di Sales Visit for Admin.
                </h5>
                <br>
                <button class="btn btn-primary btn-lg" type="button" onclick="window.location.href='#data'">Data Saat
                    Ini</button>
            @else
                <p><img src="https://www.polly.ai/hubfs/Blog%20Images/Illustrations%20%28blue,%20png%29/Analyzing%20Results%20Pro%204.png"
                        height="250">
                </p>
                <h5 class="fs-4">Selamat datang di Sales Visit. Silakan akses menu Transaksi untuk melakukan survey stok!
                </h5>
            @endif
        </div>
    </div>


    @if (Auth::user()->role == 'admin')
        <div style="padding: 100px">
            <div class="p-5 mb-4 rounded-3" id="data">
                <div class="row">
                    <div class="col-md-4" onclick="location.href='/sales'">
                        <div class="card">
                            <div class="card-body" style="background-color:thistle">
                                <blockquote class="blockquote mb-0">
                                    <p>Sales</p>
                                    <footer class="blockquote-footer">{{ $totalSales }} <cite
                                            title="Source title">Personel</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" onclick="location.href='/barang'">
                        <div class="card">
                            <div class="card-body" style="background-color:bisque">
                                <blockquote class="blockquote mb-0">
                                    <p>Barang</p>
                                    <footer class="blockquote-footer">{{ $totalBarang }} <cite
                                            title="Source title">Jenis</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" onclick="location.href='/outlet'">
                        <div class="card">
                            <div class="card-body" style="background-color:darkseagreen">
                                <blockquote class="blockquote mb-0">
                                    <p>Outlet</p>
                                    <footer class="blockquote-footer">{{ $totalOutlet }} <cite
                                            title="Source title">Outlet</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
