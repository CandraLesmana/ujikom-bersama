@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-light-primary">
                    <h3>Jenis Layanan</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Jenis Layanan</li>
                        </ol>
                    </nav>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <td>
                                                <h6 class="fw-semibold mb-0">No</h6>
                                            </td>
                                            <td>
                                                <h6 class="fw-semibold mb-0">Tanggal</h6>
                                            </td>
                                            <td>
                                                <h6 class="fw-semibold mb-0">Nama Konsumen</h6>
                                            </td>
                                            <td>
                                                <h6 class="fw-semibold mb-0">Jenis Layanan</h6>
                                            </td>
                                            <td>
                                                <h6 class="fw-semibold mb-0">Berat</h6>
                                            </td>
                                            <td>
                                                <h6 class="fw-semibold mb-0">Jenis Pembayaran</h6>
                                            </td>
                                            <td>
                                                <h6 class="fw-semibold mb-0">Total</h6>
                                            </td>
                                            <td>
                                                <h6 class="fw-semibold mb-0">Status</h6>
                                            </td>
                                            <td>
                                                <h6 class="fw-semibold mb-0">Action</h6>
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ Carbon\Carbon::parse($item->tanggal)->format('d-M-Y') }}</td>
                                            <td>{{ $item->konsumen->name }}</td>
                                            <td>{{ $item->jenis_layanan->name }}</td>
                                            <td>{{ $item->total_berat }} Kg</td>
                                            <td>{{ $item->jenis_pembayaran->name }}</td>
                                            <td>Rp {{ $item->total_harga }}</td>
                                            <td>
                                                @if($item->status == 1)
                                                    <span class="badge bg-warning">Dalam Proses</span>
                                                @elseif($item->status == 2)
                                                    <span class="badge bg-danger">Belum Bayar</span>
                                                @else
                                                    <span class="badge bg-success">Selesai</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="btn-group" role="grup" aria-label="Basic Example">
                                                    <button class="btn btn-sm btn-info"><i class="ti ti-edit"></i> Edit</button>
                                                    <button class="btn btn-sm btn-danger"><i class="ti ti-trash"></i> Delete</button>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
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