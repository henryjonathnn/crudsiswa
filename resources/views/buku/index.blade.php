@extends('partials.master')

@section('content')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                @if (session('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <h2 class="text-center">Data Buku</h2>
                                <a type="button" href=" {{ route('buku.create') }} " class="btn btn-primary">Tambah
                                    Buku</a>
                                <br>
                                @php
                                    $no = 1;
                                @endphp
                                <br>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Tahun Terbit</th>
                                                <th>Penulis</th>
                                                <th>Sampul</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                                <tr>
                                                    <td> {{ $no++ }} </td>
                                                    <td> {{ $item->judul_buku }} </td>
                                                    <td> {{ $item->tahun_terbit }} </td>
                                                    <td> {{ $item->penulis->nama }} </td>
                                                    <td> <img src="{{ asset($item->sampul) }}" width="100px" height="100px" style="border-radius: 0%; width: 70px; height:75px"> </td>
                                                    <td>
                                                        <form action="{{ route('buku.destroy', $item->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a type="button" class="btn btn-warning btn-xs"
                                                                href="{{ route('buku.edit', $item->id) }}">Edit</a>
                                                                <a type="button" class="btn btn-primary btn-xs"
                                                                href="{{ route('buku.detail', $item->id) }}">Detail</a>
                                                            <button type="submit"
                                                                class="btn btn-danger btn-xs">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
        @endsection
