@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-light-primary">
                        <h3>Konsumen</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Konsumen</li>
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
                                                    <h6 class="fw-semibold mb-0">Nama Konsumen</h6>
                                                </td>
                                                <td>
                                                    <h6 class="fw-semibold mb-0">Kode Konsumen</h6>
                                                </td>
                                                <td>
                                                    <h6 class="fw-semibold mb-0">No HP</h6>
                                                </td>
                                                <td>
                                                    <h6 class="fw-semibold mb-0">Alamat</h6>
                                                </td>
                                                <td>
                                                    <h6 class="fw-semibold mb-0">Action</h6>
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Candra</td>
                                                <td>KSN-001</td>
                                                <td>08123456789</td>
                                                <td>Ciamis</td>
                                                <td>
                                                    <div class="btn-group" role="grup" aria-label="Basic Example">
                                                        <button class="btn btn-sm btn-info"><i class="ti ti-edit"></i> Edit</button>
                                                        <button class="btn btn-sm btn-danger"><i class="ti ti-trash"></i> Delete</button>
                                                    </div>
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