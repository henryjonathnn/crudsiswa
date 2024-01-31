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
                        <form action=" {{ route('buku.update', $data->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <a type="button" href=" {{ route('buku.index') }} " class="btn btn-primary">Kembali</a>
                            <br>
                            <br>
                            <div class="form-group">
                                <label for=""><b>Judul Buku</b></label>
                                <input type="text" name="judul_buku" class="form-control" value="{{ $data->judul_buku }}">
                            </div>
                            <div class="form-group">
                                <label for=""><b>Tahun Terbit</b></label>
                                <input type="date" name="tahun_terbit" class="form-control" value="{{ $data->tahun_terbit }}">
                            </div>
                            <div class="form-group">
                                <label for=""><b>ISBN</b></label>
                                <input type="text" name="isbn" class="form-control" value="{{ $data->isbn }}">
                            </div>
                            <div class="form-group">
                                <label for=""><b>Penulis</b></label>
                                <select name="id_penulis" id="id_penulis" class="form-control">
                                    <option value=""></option>

                                    @foreach ($penulis as $item)
                                    <option value="{{ $item->id }}"
                                    {{$data->id_penulis == $item->id ? 'selected' : ''}}
                                    >

                                        {{ $item->nama }}

                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for=""><b>Genre</b></label>
                                <input type="text" name="genre" class="form-control" value="{{ $data->genre }}">
                            </div>
                            <div class="form-group">
                                <label for=""><b>Tempat Terbit</b></label>
                                <input type="text" name="tempat_terbit" class="form-control" value="{{ $data->tempat_terbit }}">
                            </div>
                            <div class="form-group">
                                <label for=""><b>Gambar</b>
                                    <br>
                                    <img src="{{ asset($data->sampul) }}" width="100px" height="100px"
                                        style="border-radius: 0%; width: 70px; height:80px"></label>
                                <input type="file" name="sampul" value="{{ $data->sampul }}" class="form-control">
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