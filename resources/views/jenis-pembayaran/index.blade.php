@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-light-primary">
                    <h3>Jenis Pembayaran</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Jenis Pembayaran</li>
                        </ol>
                    </nav>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            
                            <div class="d-flex justify-content-end">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Tambah Jenis Pembayaran
                                </button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Jenis Pembayaran</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('store') }}" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="">Nama Jenis Pembayaran</label>
                                                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Jenis Pembayaran">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                                                <button type="submit" class="btn btn-primary">Tambah</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="fw-semibold mb-0 text-center" style="width: 10px;">No</th>
                                            <th class="fw-semibold mb-0" style="width: 500px;">Jenis Pembayaran</th>
                                            <th class="fw-semibold mb-0 text-center" style="width: 200px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($data->isEmpty())
                                            <tr>
                                                <td colspan="3" class="fw-semibold text-center">Data Kosong</td>
                                            </tr>
                                        @else
                                            @foreach ($data as $item)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td class="text-center">
                                                    <div class="btn-group" role="grup" aria-label="Basic Example">
                                                        {{-- <button class="btn btn-sm btn-info"><i class="ti ti-edit"></i> Edit</button> --}}
                                                        <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#EditModal{{ $item->id }}">
                                                            <i class="ti ti-edit"></i>Edit
                                                        </button>
                                                        <div class="modal fade" id="EditModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Jenis Pembayaran</h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <form action="{{ route('update', $item->id) }}" method="POST">
                                                                        @method('put')
                                                                        @csrf
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <label for="">Nama Jenis Pembayaran</label>
                                                                                <input type="text" class="form-control" value="{{ $item->nama }}" name="nama" placeholder="Masukkan Nama Jenis Pembayaran">
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <form action="{{ route('delete', $item->id)  }}" method="POST">
                                                            @method('delete')
                                                            @csrf
                                                        <button class="btn btn-sm btn-danger"><i class="ti ti-trash"></i> Delete</button>
                                                    </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection