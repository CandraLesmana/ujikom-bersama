@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-light-primary">
                        <h3>Transaksi Order</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href='/'>Home</a></li>
                                <li class="breadcrumb-item"><a href="/transaksi-order">Transaksi Order</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Konsumen : <span class="fw-semibold">Candra</span></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-body">
                        <div class="row gx-5">
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="">Jenis Laundry / Layanan</label>
                                    <select class="form-select">
                                        <option>-- Pilih Jenis --</option>
                                    </select>
                                </div>
                                <div class="form-group my-3">
                                    <label for="">Berat (KG)</label>
                                    <input type="number" class="form-control" placeholder="Berat Laundry"/>
                                </div>
                                <div class="form-group my-3">
                                    <label for="">Jenis Pembayaran</label>
                                    <select class="form-select">
                                        <option>-- Pilih Jenis --</option>
                                    </select>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="btn-group my-3" role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio" value={1} id="btnradio1" autocomplete="off"/>
                                        <label class="btn btn-outline-primary px-5" for="btnradio1">Bayar Diawal</label>

                                        <input type="radio" class="btn-check" name="btnradio" value={2} id="btnradio2" autocomplete="off"/>
                                        <label class="btn btn-outline-primary px-5" for="btnradio2">Bayar Diakhir</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header bg-light-primary">
                                        <div class="text-center">
                                            <h4 class="fw-semibold">Detail Transaksi</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p>Detail Konsumen :</p>
                                        <div class="d-flex justify-content-between">
                                            <h6 class="fw-semibold">Candra</h6>
                                            <h6 class="fw-semibold">081234567890</h6>
                                        </div>
                                        <hr/>
                                        <div class="d-flex justify-content-between">
                                            <p>21-Maret-2024</p>
                                            <p>Kode : <span class="fw-semibold">KSN-001</span></p>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-primary">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="text-white">Total : <span class="fw-semibold">Rp. 0</span></h5>
                                            <button type="button" class="btn btn-secondary"><i class="ti ti-cash fs-5"></i>Bayar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection