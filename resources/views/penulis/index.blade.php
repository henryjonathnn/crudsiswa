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
                                <h2 class="text-center">Data Penulis</h2>
                                <a type="button" href=" {{ route('penulis.create') }} " class="btn btn-primary">Tambah
                                    Penulis</a>
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
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                                <tr>
                                                    <td> {{ $no++ }} </td>
                                                    <td> {{ $item->nama }} </td>
                                                    <td> {{ $item->alamat }} </td>
                                                    <td> {{ $item->tanggal_lahir }} </td>
                                                    <td>
                                                        <form action="{{ route('penulis.destroy', $item->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a type="button" class="btn btn-warning btn-sm"
                                                                href="{{ route('penulis.edit', $item->id) }}">Edit</a>
                                                            <button type="submit"
                                                                class="btn btn-danger btn-sm">Delete</button>
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
