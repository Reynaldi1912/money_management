@extends('layouts.app')

@section('content')
<div class="content">
    <!-- Navbar Start -->
    @include('layouts.header')
    <!-- Navbar End -->

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-4">
                <div class="bg-light rounded d-flex align-items-center justify-content-around p-4">
                    <i class="fa fa-chart-line fa-3x text-success"></i>
                    <div class="ms-3">
                        <h5 class="mb-2 text-success">Total Pemasukan</h5>
                        <h6 class="mb-0 text-success">Rp. 12.000.000</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="bg-light rounded d-flex align-items-center justify-content-around p-4">
                    <i class="fa fa-chart-line fa-3x text-danger"></i>
                    <div class="ms-3">
                        <h5 class="mb-2 text-danger">Total Pengeluaran</h5>
                        <h6 class="mb-0 text-danger">Rp. 5.000.000</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="bg-light rounded d-flex align-items-center justify-content-around p-4">
                    <i class="fa fa-credit-card fa-3x text-primary"></i>
                    <div class="ms-3">
                        <h5 class="mb-2 text-primary">Total Saldo Saat Ini</h5>
                        <h6 class="mb-0 text-primary">Rp. 7.000.000</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-12">
                    <div class="bg-light rounded h-100 p-4">
                        <nav>
                            <div class="nav nav-tabs d-flex justify-content-center align-items-center" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-harian-tab" data-bs-toggle="tab" data-bs-target="#nav-harian" type="button" role="tab" aria-controls="nav-harian" aria-selected="true">Laporan Harian</button>
                                <button class="nav-link" id="nav-mingguan-tab" data-bs-toggle="tab" data-bs-target="#nav-mingguan" type="button" role="tab" aria-controls="nav-mingguan" aria-selected="false">Laporan Mingguan</button>
                                <button class="nav-link" id="nav-bulanan-tab" data-bs-toggle="tab" data-bs-target="#nav-bulanan" type="button" role="tab" aria-controls="nav-bulanan" aria-selected="false">Laporan Bulanan</button>
                                <button class="nav-link" id="nav-tahunan-tab" data-bs-toggle="tab" data-bs-target="#nav-tahunan" type="button" role="tab" aria-controls="nav-tahunan" aria-selected="false">Laporan Tahunan</button>
                            </div>
                        </nav>
                        <div class="tab-content pt-3" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-harian" role="tabpanel" aria-labelledby="nav-harian-tab">
                                <div class="row d-flex align-items-center justify-content-center">
                                    <div class="col-sm-4 col-xl-4">
                                        <div class="d-flex align-items-center justify-content-around p-2">
                                            <div class="ms-3 text-center">
                                                <h5 class="mb-2">Pemasukan</h5>
                                                <span class="mb-0 text-success">Rp. 12.000.000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xl-4">
                                        <div class="d-flex align-items-center justify-content-center p-2">
                                            <div class="ms-3 text-center">
                                                <h5 class="mb-2">Pengeluaran</h5>
                                                <span class="mb-0 text-danger">Rp. 5.000.000</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xl-4">
                                        <div class="d-flex align-items-center justify-content-around p-2">
                                            <div class="ms-3 text-center">
                                                <h5 class="mb-2">Saldo Saat Ini</h5>
                                                <span class="mb-0 text-primary">Rp. 7.000.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Tanggal</th>
                                                <th class="text-center">Kategori</th>
                                                <th class="text-center">Pemasukan</th>
                                                <th class="text-center">Pengeluaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="row text-center" style="border: solid;">
                                                        <div class="col-sm-6" style="border: solid;">
                                                            <h1>29</h1>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="row">
                                                                <div class="col-sm-12">Januari 2024</div>
                                                                <div class="col-sm-12">
                                                                    <div class="btn btn-secondary">Sabtu</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </th>
                                                <td class="text-center">
                                                </td>
                                                <td class="text-center">Doe</td>
                                                <td class="text-center">jhon@email.com</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-mingguan" role="tabpanel" aria-labelledby="nav-mingguan-tab">
                                Mingguan
                            </div>
                            <div class="tab-pane fade" id="nav-bulanan" role="tabpanel" aria-labelledby="nav-bulanan-tab">
                                Bulanan
                            </div>
                            <div class="tab-pane fade" id="nav-tahunan" role="tabpanel" aria-labelledby="nav-tahunan-tab">
                                Tahunan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection('content')