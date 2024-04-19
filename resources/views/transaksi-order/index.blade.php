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
                            <li class="breadcrumb-item"><Link to='/'>Home</Link></li>
                            <li class="breadcrumb-item active" aria-current="page">Transaksi Order</li>
                        </ol>
                    </nav>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="ti ti-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1"/>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-info"><i class="ti ti-plus"></i> Tambah Konsumen</button>
                            </div>
                        </div>
                    </div>
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
                                                <h6 class="fw-semibold mb-0">Kode Konsumen</h6>
                                            </td>
                                            <td>
                                                <h6 class="fw-semibold mb-0">Nama Konsumen</h6>
                                            </td>
                                            <td>
                                                <h6 class="fw-semibold mb-0">No HP</h6>
                                            </td>
                                            <td>
                                                <h6 class="fw-semibold mb-0">Action</h6>
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>KSN-001</td>
                                            <td>Candra</td>
                                            <td>08123456789</td>
                                            <td>
                                                <Link to="/transaksi-order/casier" class="btn btn-secondary"><i class="ti ti-plus"></i> Order</Link>
                                                {{-- <button class="btn btn-sm btn-success"></button> --}}
                                            </td>
                                        </tr>
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