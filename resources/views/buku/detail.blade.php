@extends('partials.master')

@section('content')
<br>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Tambah Data Buku</h4>
                        <form action="">
                            @csrf
                            <a type="button" href=" {{ route('buku.index') }} " class="btn btn-primary">Kembali</a>
                            <br>
                            <br>
                            <div class="form-group">
                                <label for=""><b>Judul Buku</b></label>
                                <input type="text" name="judul_buku" class="form-control" value="{{ $data->judul_buku }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for=""><b>Tahun Terbit</b></label>
                                <input type="date" name="tahun_terbit" class="form-control" value="{{ $data->tahun_terbit }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for=""><b>ISBN</b></label>
                                <input type="text" name="isbn" class="form-control" value="{{ $data->isbn }}" readonly>
                                <div class="form-group">
                                    <label for=""><b>Penulis</b></label>
                                    <input type="text" name="id_penulis" class="form-control" value="{{$data->penulis->nama}}" readonly>
                                </div>                                                                               
                            <div class="form-group">
                                <label for=""><b>Genre</b></label>
                                <input type="text" name="genre" class="form-control" value="{{ $data->genre }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for=""><b>Tempat Terbit</b></label>
                                <input type="text" name="tempat_terbit" class="form-control" value="{{ $data->tempat_terbit }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for=""><b>Gambar</b>
                                    <br>
                                    <img src="{{ asset($data->sampul) }}" width="100px" height="100px"
                                        style="border-radius: 0%; width: 70px; height:80px"></label>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Edit </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection