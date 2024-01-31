@extends('partials.master')

@section('content')
    <br>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">Tambah Data Siswa</h4>
                            <form action=" {{ route('siswa.post') }}" method="post">
                                @csrf
                                <a type="button" href=" {{ route('siswa') }} " class="btn btn-primary">KEMBALI</a>
                                <br>
                                <br>
                                <div class="form-group">
                                    <label for=""><b>ID Siswa</b></label>
                                    <input type="text" name="id_siswa" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for=""><b>Nama</b></label>
                                    <input type="text" name="nama" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for=""><b>Tanggal Lahir</b></label>
                                    <input type="date" name="tgl_lahir" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for=""><b>Umur</b></label>
                                    <input type="text" name="umur" class="form-control">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">SIMPAN </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
