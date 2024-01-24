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
            <div class="row g-4 pt-2">
                <ul class="nav nav-pills mb-3 d-flex justify-content-center align-items-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-harian-tab" data-bs-toggle="pill" data-bs-target="#pills-harian" type="button" role="tab" aria-controls="pills-harian" aria-selected="true">Laporan Harian</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-mingguan-tab" data-bs-toggle="pill" data-bs-target="#pills-mingguan" type="button" role="tab" aria-controls="pills-mingguan" aria-selected="false">Laporan Mingguan</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-bulanan-tab" data-bs-toggle="pill" data-bs-target="#pills-bulanan" type="button" role="tab" aria-controls="pills-bulanan" aria-selected="false">Laporan Bulanan</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active text-center" id="pills-harian" role="tabpanel" aria-labelledby="pills-harian-tab">
                        <h3>Laporan Harian</h3>
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
                                        <th class="text-center thead">Aksi</th>
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
                                            <div class="text-success fw-bolder">
                                                Rp. 12.000.000
                                            </div>
                                        </td>
                                        <td class="text-center align-middle text-nowrap">
                                            <div class="text-danger fw-bolder">
                                                Rp. 7.000.000
                                            </div>
                                        </td>
                                        <td class="text-center align-middle text-nowrap">
                                            <div class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editData">
                                                Edit
                                            </div>
                                            <div class="btn btn-danger">
                                                Hapus
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade text-center" id="pills-mingguan" role="tabpanel" aria-labelledby="pills-mingguan-tab">
                        <h3>Laporan Mingguan</h3>
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
                                        <th class="text-center thead">Aksi</th>
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
                                            <div class="text-success fw-bolder">
                                                Rp. 12.000.000
                                            </div>
                                        </td>
                                        <td class="text-center align-middle text-nowrap">
                                            <div class="text-danger fw-bolder">
                                                Rp. 7.000.000
                                            </div>
                                        </td>
                                        <td class="text-center align-middle text-nowrap">
                                            <div class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editData">
                                                Edit
                                            </div>
                                            <div class="btn btn-danger">
                                                Hapus
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade text-center" id="pills-bulanan" role="tabpanel" aria-labelledby="pills-bulanan-tab">
                        <h3>Laporan Bulanan</h3>
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
                                        <th class="text-center thead">Aksi</th>
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
                                            <div class="text-success fw-bolder">
                                                Rp. 12.000.000
                                            </div>
                                        </td>
                                        <td class="text-center align-middle text-nowrap">
                                            <div class="text-danger fw-bolder">
                                                Rp. 7.000.000
                                            </div>
                                        </td>
                                        <td class="text-center align-middle text-nowrap">
                                            <div class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editData">
                                                Edit
                                            </div>
                                            <div class="btn btn-danger">
                                                Hapus
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

<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" data-bs-toggle="modal" data-bs-target="#tambahData"><i class="bi bi-plus"></i></a>
</div>

<!-- Begin::Modal Input Pemasukan/Pengeluaran -->
<div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Laporan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingPemasukan" placeholder="">
                            <label for="floatingPemasukan">Pemasukan</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingPengeluaran" placeholder="">
                            <label for="floatingPengeluaran">Pengeluaran</label>
                        </div>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingKategori" aria-label="Floating label select example">
                        <option selected>Pilih Kategori</option>
                        <option value="Bensin">Bensin</option>
                        <option value="Makan">Makan</option>
                        <option value="Lain - Lain">Lain - Lain</option>
                    </select>
                    <label for="floatingKategori">Kategori</label>
                </div>
                <div class="form-floating">
                    <input type="date" class="form-control" id="floatingTanggal" placeholder="">
                    <label for="floatingTanggal">Tanggal</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
<!-- End::Modal Input Pemasukan/Pengeluaran -->

<!-- Begin::Modal Edit Pemasukan/Pengeluaran -->
<div class="modal fade" id="editData" tabindex="-1" aria-labelledby="editDataLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Laporan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingPemasukan" placeholder="">
                            <label for="floatingPemasukan">Pemasukan</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingPengeluaran" placeholder="">
                            <label for="floatingPengeluaran">Pengeluaran</label>
                        </div>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingKategori" aria-label="Floating label select example">
                        <option selected>Pilih Kategori</option>
                        <option value="Bensin">Bensin</option>
                        <option value="Makan">Makan</option>
                        <option value="Lain - Lain">Lain - Lain</option>
                    </select>
                    <label for="floatingKategori">Kategori</label>
                </div>
                <div class="form-floating">
                    <input type="date" class="form-control" id="floatingTanggal" placeholder="">
                    <label for="floatingTanggal">Tanggal</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
<!-- End::Modal Edit Pemasukan/Pengeluaran -->
@endsection('content')