@extends('layouts.app')

@section('content')
<div class="content">
    <!-- Navbar Start -->
    @include('layouts.header')
    <!-- Navbar End -->
    <style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    swiper-container {
      width: 100%;
      height: 100%;
    }

    swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    @media (min-width: 768px) {
        .mobileInfo {
            display: none;
        }
    }
    @media (max-width: 768px) {
        .desktopInfo {
            display: none;
        }
    }
    div.scrollmenu {
        overflow: auto;
        white-space: nowrap;
    }

    div.scrollmenu a {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px;
        text-decoration: none;
    }

    div.scrollmenu a:hover {
        background-color: #ff05ea;
    }
  </style>

    <div class="container-fluid pt-4 px-4">
        <swiper-container class="mobileInfo" pagination="true" pagination-dynamic-bullets="true">
            <swiper-slide class="rounded" style="background: linear-gradient(to right, #7300ff 35%, #ff05ea 100%); box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; display: flex; flex-direction: column; justify-content: center;">
                <div class="row text-white">
                    <div class="col-6 text-start" style="font-weight:300;font-size:20px">
                        Total Saldo 
                    </div>
                    <div class="col-6 text-end pt-1" style="font-weight:200;font-size:15px">
                        25 Januari 2024
                    </div>
                    <div class="col mt-4" style="font-weight:bold;font-size:30px">
                        Rp.10.000.000
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide class="rounded" style="background: linear-gradient(to right, #27a825 35%, #04ff00 100%); box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; display: flex; flex-direction: column; justify-content: center;">
                <div class="row text-white">
                    <div class="col-7 text-start" style="font-weight:300;font-size:20px">
                        Pemasukan 
                    </div>
                    <div class="col-5 text-end pt-1" style="font-weight:200;font-size:15px">
                        25 Januari 2024
                    </div>
                    <div class="col mt-4" style="font-weight:bold;font-size:30px">
                        Rp.10.000.000
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide class="rounded" style="background: linear-gradient(to right, #ad1e02 35%, #ff2a00 100%); box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; display: flex; flex-direction: column; justify-content: center;">
                <div class="row text-white">
                    <div class="col-7 text-start" style="font-weight:300;font-size:20px">
                        Pengeluaran 
                    </div>
                    <div class="col-5 text-end pt-1" style="font-weight:200;font-size:15px">
                        25 Januari 2024
                    </div>
                    <div class="col mt-4" style="font-weight:bold;font-size:30px">
                        Rp.10.000.000
                    </div>
                </div>
            </swiper-slide>
        </swiper-container>
        <div class="row g-4 desktopInfo">
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

        <div class="container-fluid pt-4 px-4 desktopInfo">
            <div class="row g-4 pt-2">
                <ul class="nav nav-pills mb-3 d-flex justify-content-center align-items-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-harian-tab" data-bs-toggle="pill" data-bs-target="#pills-harian" type="button" role="tab" aria-controls="pills-harian" aria-selected="true">Harian</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-mingguan-tab" data-bs-toggle="pill" data-bs-target="#pills-mingguan" type="button" role="tab" aria-controls="pills-mingguan" aria-selected="false">Mingguan</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-bulanan-tab" data-bs-toggle="pill" data-bs-target="#pills-bulanan" type="button" role="tab" aria-controls="pills-bulanan" aria-selected="false">Bulanan</button>
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

        <div class="mobileInfo mt-4">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Harian</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Mingguan</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Bulanan</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                   <input type="date" class="form-control">
                   <hr>
                   <div class="container-fluid mobileInfo mt-3">
                        <div class="row d-flex justify-content-around">
                            <div class="col-5 rounded p-2 text-white text-center" style="background:#ff2a00; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <i class="fa fa-arrow-down fa-1x"></i>
                            <br>
                                <span>- Rp.10.000</span>
                            </div>
                            <div class="col-5 text-center text-white rounded p-2" style="background:#07bd00; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <i class="fa fa-arrow-up fa-1x"></i>
                                <br>
                                <span>+ Rp.20.000</span>
                            </div>
                        </div>
                    </div>
                    <h6 class="mt-3 text-primary"">Semua Transaksi</h6>
                    <div class="border rounded mb-2 mt-3">
                        <div class="row p-3">
                            <a data-bs-toggle="modal" data-bs-target="#editData" class="col-7" style="color: #ff9d00; font-weight: bold; font-size: 17px;">Makanan</a>
                            <div class="col-5 text-end mt-1 text-danger">- Rp.2.000.000</div>
                        </div>
                    </div>
                    <div class="border rounded">
                        <div class="row p-3">
                            <a data-bs-toggle="modal" data-bs-target="#editData" class="col-7" style="color: #ff9d00; font-weight: bold; font-size: 17px;">Belanja</a>
                            <div class="col-5 text-end mt-1 text-success">+ Rp.2.000.000</div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <input type="week" class="form-control">
                    <hr>
                    <div class="container-fluid mobileInfo mt-3">
                        <div class="row d-flex justify-content-around">
                            <div class="col-5 rounded p-2 text-white text-center" style="background:#ff2a00; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <i class="fa fa-arrow-down fa-1x"></i>
                            <br>
                                <span>- Rp.10.000</span>
                            </div>
                            <div class="col-5 text-center text-white rounded p-2" style="background:#07bd00; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <i class="fa fa-arrow-up fa-1x"></i>
                                <br>
                                <span>+ Rp.20.000</span>
                            </div>
                        </div>
                    </div>
                    <h6 class="mt-3 text-primary">Semua Transaksi</h6>
                    <div class="border rounded mb-2 mt-2">
                        <div class="row p-3">
                            <a data-bs-toggle="modal" data-bs-target="#showDetail" class="col-7" style="color: #ff00fb; font-weight: bold; font-size: 17px;">
                                Food <br> <span style="font-size: 15px; font-weight: 100; color: #000;">1 January 2024</span>
                            </a>
                            <div class="col-5 d-flex align-items-center text-end text-danger">- Rp.200.000</div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <input type="month" class="form-control">
                    <hr>
                    <div class="container-fluid mobileInfo mt-3">
                        <div class="row d-flex justify-content-around">
                            <div class="col-5 rounded p-2 text-white text-center" style="background:#ff2a00; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <i class="fa fa-arrow-down fa-1x"></i>
                            <br>
                                <span>- Rp.10.000</span>
                            </div>
                            <div class="col-5 text-center text-white rounded p-2" style="background:#07bd00; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <i class="fa fa-arrow-up fa-1x"></i>
                                <br>
                                <span>+ Rp.20.000</span>
                            </div>
                        </div>
                    </div>
                    <h6 class="mt-3 text-primary"">Semua Transaksi</h6>
                    <div class="border rounded mb-2">
                        <div class="row p-3">
                            <a data-bs-toggle="modal" data-bs-target="#showDetail" class="col-7" style="color: #ff00fb; font-weight: bold; font-size: 17px;">
                                Food <br> <span style="font-size: 15px; font-weight: 100; color: #000;">1 January 2024</span>
                            </a>
                            <div class="col-5 d-flex align-items-center text-end text-danger">- Rp.200.000</div>
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

<!-- Begin::Modal My Profil -->
<div class="modal fade" id="myProfile" tabindex="-1" aria-labelledby="myProfileLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">My Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingNamaLengkap" placeholder="" value="Zidane Putra Sanjaya">
                            <label for="floatingNamaLengkap">Nama Lengkap</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mb-3">
                            <input type="username" class="form-control" id="floatingUsername" placeholder="" value="zidanesanjaya">
                            <label for="floatingUsername">Username</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="" value="lumajang">
                            <label for="floatingPassword">Password</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
<!-- End::Modal My Profil -->

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

@endsection('content')