@extends('layouts.app')

@section('title', 'Recruitment')

@section('content')

    <div class="p-4 mb-3">
        <h2>Recruitment </h2>
        <div class="col-4 px-4" onclick="location.href='/recruitment'">
            <div class="card">
                <div class="card-body" style="background-color:darkseagreen">
                    <blockquote class="blockquote mb-0">
                    <p>Peroses Pengajuan</p>
                    <footer class="blockquote-footer"><cite title="Source title">Recruitment</cite></footer>
                </blockquote>
            </div>
        </div>
    </div>
    <div class="col-4 px-4" onclick="location.href='recruitment/apply'">
        <div class="card">
            <div class="card-body" style="background-color:darkseagreen">
                <blockquote class="blockquote mb-0">
                    <p>Resume CV</p>
                                    <footer class="blockquote-footer"><cite title="Source title">Recruitment</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 px-4" onclick="location.href='/recruitment'">
                        <div class="card">
                            <div class="card-body" style="background-color:darkseagreen">
                                <blockquote class="blockquote mb-0">
                    <p>Tracking CV </p>
                                    <footer class="blockquote-footer"><cite title="Source title">Recruitment</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 px-4" onclick="location.href='/recruitment'">
                        <div class="card">
                            <div class="card-body" style="background-color:darkseagreen">
                                <blockquote class="blockquote mb-0">
                    <p>Persetujuan HRD</p>
                                    <footer class="blockquote-footer"><cite title="Source title">Recruitment</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 px-4" onclick="location.href='/recruitment'">
                        <div class="card">
                            <div class="card-body" style="background-color:darkseagreen">
                                <blockquote class="blockquote mb-0">
                    <p>Interview</p>
                                    <footer class="blockquote-footer"><cite title="Source title">Recruitment</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                            <td><a href="{{ action('RecruitmentController@edit',['id']) }}"
                                    class="btn btn-warning">Ubah</a>
                            </td>
                            <td>
                                <form action="{{ action('RecruitmentController@destroy',['id']) }}" method="post">
                                    {{ csrf_field() }}
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button class="btn btn-danger" type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                </tbody>
        </div>
        <div>
            <a name="" id="" class="btn btn-primary" href="recruitment/create" role="button">Tambah Data
                Recruitment</a>
                <!-- Button to access the apply method in RecruitmentController -->
                <form action="{{ route('recruitment.apply') }}" method="POST">
                    @csrf
            </div>
    </div>
@endsection





