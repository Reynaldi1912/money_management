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
                            <div class="tab-pane fade show active text-center" id="nav-harian" role="tabpanel" aria-labelledby="nav-harian-tab">
                                <h2>Laporan Harian</h2>
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
                                                <th class="text-center thead">Tanggal</th>
                                                <th class="text-center thead">Kategori</th>
                                                <th class="text-center thead">Pemasukan</th>
                                                <th class="text-center thead">Pengeluaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-primary">
                                                        Senin, 24 Januari 2024
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-secondary">
                                                        Bensin
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-success">
                                                        Rp. 12.000.000
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-danger">
                                                        Rp. 7.000.000
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-primary">
                                                        Senin, 24 Januari 2024
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-secondary">
                                                        Bensin
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-success">
                                                        Rp. 12.000.000
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-danger">
                                                        Rp. 7.000.000
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-primary">
                                                        Senin, 24 Januari 2024
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-secondary">
                                                        Bensin
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-success">
                                                        Rp. 12.000.000
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-danger">
                                                        Rp. 7.000.000
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade text-center" id="nav-mingguan" role="tabpanel" aria-labelledby="nav-mingguan-tab">
                                <h2>Laporan Mingguan</h2>
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
                                                <th class="text-center thead">Tanggal</th>
                                                <th class="text-center thead">Kategori</th>
                                                <th class="text-center thead">Pemasukan</th>
                                                <th class="text-center thead">Pengeluaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-primary">
                                                        Senin, 24 Januari 2024
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-secondary">
                                                        Bensin
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-success">
                                                        Rp. 12.000.000
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-danger">
                                                        Rp. 7.000.000
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-primary">
                                                        Senin, 24 Januari 2024
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-secondary">
                                                        Bensin
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-success">
                                                        Rp. 12.000.000
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-danger">
                                                        Rp. 7.000.000
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-primary">
                                                        Senin, 24 Januari 2024
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-secondary">
                                                        Bensin
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-success">
                                                        Rp. 12.000.000
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-danger">
                                                        Rp. 7.000.000
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade text-center" id="nav-bulanan" role="tabpanel" aria-labelledby="nav-bulanan-tab">
                                <h2>Laporan Bulanan</h2>
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
                                                <th class="text-center thead">Tanggal</th>
                                                <th class="text-center thead">Kategori</th>
                                                <th class="text-center thead">Pemasukan</th>
                                                <th class="text-center thead">Pengeluaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-primary">
                                                        Senin, 24 Januari 2024
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-secondary">
                                                        Bensin
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-success">
                                                        Rp. 12.000.000
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-danger">
                                                        Rp. 7.000.000
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-primary">
                                                        Senin, 24 Januari 2024
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-secondary">
                                                        Bensin
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-success">
                                                        Rp. 12.000.000
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-danger">
                                                        Rp. 7.000.000
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-primary">
                                                        Senin, 24 Januari 2024
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-secondary">
                                                        Bensin
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-success">
                                                        Rp. 12.000.000
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-danger">
                                                        Rp. 7.000.000
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade text-center" id="nav-tahunan" role="tabpanel" aria-labelledby="nav-tahunan-tab">
                                <h2>Laporan Tahunan</h2>
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
                                                <th class="text-center thead">Tanggal</th>
                                                <th class="text-center thead">Kategori</th>
                                                <th class="text-center thead">Pemasukan</th>
                                                <th class="text-center thead">Pengeluaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-primary">
                                                        Senin, 24 Januari 2024
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-secondary">
                                                        Bensin
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-success">
                                                        Rp. 12.000.000
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-danger">
                                                        Rp. 7.000.000
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-primary">
                                                        Senin, 24 Januari 2024
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-secondary">
                                                        Bensin
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-success">
                                                        Rp. 12.000.000
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-danger">
                                                        Rp. 7.000.000
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-primary">
                                                        Senin, 24 Januari 2024
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-secondary">
                                                        Bensin
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-success">
                                                        Rp. 12.000.000
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle text-nowrap">
                                                    <div class="btn btn-danger">
                                                        Rp. 7.000.000
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
</div>
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
@endsection('content')