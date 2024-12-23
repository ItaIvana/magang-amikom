@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="p-1 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5 text-center">
            <h1 class="display-5 fw-bold ">Human Recources Information System</h1>
            @if (Auth::user()->role == 'admin')
                <p><img src="https://www.polly.ai/hubfs/Blog%20Images/Illustrations%20%28blue,%20png%29/Analyzing%20Results%20Pro%204.png"
                        height="250">
                </p>
                <h5 class="fs-4">Selamat datang di Human Recources Information System for Admin.
                </h5>
            @endif
        </div>
    </div>

    @if (Auth::user()->role == 'admin')
        <div style="padding: 100px">
            <div class="container">
                <div class="row d-flex flex-row justify-content-between">
                    <div class="col-4 px-4" onclick="location.href='/pegawai'">
                        <div class="card">
                            <div class="card-body" style="background-color:darkseagreen">
                                <blockquote class="blockquote mb-0">
                                    <p>Pegawai</p>
                                    <footer class="blockquote-footer"><cite title="Source title">Pegawai</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 px-4" onclick="location.href='/dosen'">
                        <div class="card">
                            <div class="card-body" style="background-color:darkseagreen">
                                <blockquote class="blockquote mb-0">
                                    <p>Dosen</p>
                                    <footer class="blockquote-footer"><cite title="Source title">Dosen</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 px-4" onclick="location.href='/recruitment'">
                        <div class="card">
                            <div class="card-body" style="background-color:darkseagreen">
                                <blockquote class="blockquote mb-0">
                                    <p>Recruitment</p>
                                    <footer class="blockquote-footer"><cite title="Source title">Recruitment</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection