@extends('partials.master')

@section('content')
    <br>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">Tambah Data Guru</h4>
                            <form action=" {{ route('guru.store') }}" method="post">
                                @csrf
                                <a type="button" href=" {{ route('guru.index') }} " class="btn btn-primary">KEMBALI</a>
                                <br>
                                <br>
                                <div class="form-group">
                                    <label for=""><b>ID Guru</b></label>
                                    <input type="text" name="id_guru" class="form-control">
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
                                <div class="form-group">
                                    <label for=""><b>Mapel</b></label>
                                    <input type="text" name="mapel" class="form-control">
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
