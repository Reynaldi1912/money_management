@extends('layouts.app')

@section('content')
<div class="content">
    <!-- Navbar Start -->
    @include('layouts.header')
    <!-- Navbar End -->
    <div class="container-fluid pt-4 px-4">
        <swiper-container class="mobileInfo" pagination="true" pagination-dynamic-bullets="true">
            <swiper-slide class="rounded" style="background: linear-gradient(to right, #7300ff 35%, #ff05ea 100%); box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; display: flex; flex-direction: column; justify-content: center;">
                <div class="row text-white">
                    <div class="col-6">
                        {{ \Carbon\Carbon::now()->format('d M Y') }}
                    </div>
                    <div class="col-6 text-end">
                        Hari Ke-{{ \Carbon\Carbon::parse(Auth()->user()->created_at)->diffInDays(now()) + 1 }}
                    </div>
                    <div class="col-12 text-start mt-4" style="font-weight:bold;font-size:20px">
                        Total Saldo
                    </div>
                    <div class="col" style="font-weight:bold;font-size:30px">
                        {{ 'Rp ' . number_format($summary->total, 0, ',', '.') }}
                    </div>
                    <div class="col-12 mt-4">
                        {{ ucwords(Auth()->user()->name) }}
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide class="rounded" style="background: linear-gradient(to right, #27a825 35%, #04ff00 100%); box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; display: flex; flex-direction: column; justify-content: center;">
                <div class="row text-white">
                    <div class="col-6">
                        {{ \Carbon\Carbon::now()->format('d M Y') }}
                    </div>
                    <div class="col-6 text-end">
                        Hari Ke-{{ \Carbon\Carbon::parse(Auth()->user()->created_at)->diffInDays(now()) + 1 }}
                    </div>
                    <div class="col-12 text-start mt-4" style="font-weight:bold;font-size:20px">
                        Total Pemasukan
                    </div>
                    <div class="col" style="font-weight:bold;font-size:30px">
                    {{ 'Rp ' . number_format($summary->income, 0, ',', '.') }}
                    </div>
                    <div class="col-12 mt-4">
                        {{ ucwords(Auth()->user()->name) }}
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide class="rounded" style="background: linear-gradient(to right, #ad1e02 35%, #ff2a00 100%); box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; display: flex; flex-direction: column; justify-content: center;">
                <div class="row text-white">
                    <div class="col-6">
                        {{ \Carbon\Carbon::now()->format('d M Y') }}
                    </div>
                    <div class="col-6 text-end">
                        Hari Ke-{{ \Carbon\Carbon::parse(Auth()->user()->created_at)->diffInDays(now()) + 1 }}
                    </div>
                    <div class="col-12 text-start mt-4" style="font-weight:bold;font-size:20px">
                        Total Pengeluaran
                    </div>
                    <div class="col" style="font-weight:bold;font-size:30px">
                    {{ 'Rp ' . number_format($summary->outcome, 0, ',', '.') }}
                    </div>
                    <div class="col-12 mt-4">
                        {{ ucwords(Auth()->user()->name) }}
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
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <form class="row" action="{{route('page.dashboard')}}">
                        <div class="col-5 text-center">
                            <div class="input-group">
                                    <input type="date" name="start_date" class="form-control">
                            </div>
                        </div>
                        <div class="col-2 text-center">-</div>
                        <div class="col-5 text-center">
                            <div class="input-group">
                                    <input type="date" name="end_date" class="form-control">
                            </div>
                        </div>

                        <div class="col-12 mt-2 text-end">
                            <button class="btn btn-primary btn-full-width" type="submit">
                                Cari <i class="fa fa-search"></i>
                            </button>
                        </div>

                    </form>
                    <hr>
                    <h6 class="mt-3 text-primary">Semua Transaksi</h6>
                    <div class=" row">
                        @foreach($data AS $key)
                            <div class="col-sm-12">
                                <div class="border rounded mb-2 mt-2">
                                    <div class="row m-2">
                                        <div class="col-6 p-2">
                                            <span class="text-secondary" style="font-size: 12px; font-weight: bold;">{{ \Carbon\Carbon::parse($key['date'])->format('j F Y') }}</span>
                                        </div>
                                        <div class="col-6 p-2 text-end">
                                            <span class="text-success" style="font-size: 12px; font-weight: bold;">Rp. {{ number_format($key['income'], 0, ',', '.') }}</span> |
                                            <span class="text-danger" style="font-size: 12px; font-weight: bold;">Rp. {{ number_format($key['outcome'], 0, ',', '.') }}</span>
                                        </div>
                                        <hr>

                                        @foreach($key['data_user'] AS $index => $key_user)
                                            <div class="col-12" data-bs-toggle="modal" data-bs-target="#editData" onclick="editLaporan(`{{$key_user['id']}}`,`{{$key_user['amount']}}`,`{{$key_user['type']}}`,`{{$key_user['category']}}`,`{{$key['date']}}`,`{{$key_user['note']}}`);">
                                                <div class="row border-bottom {{ $index === 0 ? '' : 'pt-3' }}">
                                                    <div class="col-6">
                                                        <span style="font-weight: bold; font-size: 15px;">{{$key_user['category']}}</span>
                                                        <p style=" font-size: 12px;">{{$key_user['note']}}</p>
                                                    </div>
                                                    <div class="col-6 text-end">
                                                        <span style="font-weight: bold; font-size: 12px;" class="{{ $key_user['type'] === 'income' ? 'text-success' : 'text-danger' }}">
                                                            {{ $key_user['type'] }}
                                                        </span>
                                                        <p style="font-size: 12px;" class="{{ $key_user['type'] === 'income' ? 'text-success' : 'text-danger' }}">
                                                            Rp.{{ number_format($key_user['amount'], 0, ',', '.') }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center">
                    {{ $data->links('vendor.pagination.simple-bootstrap-5') }}
                    </div>
                </div>
                
            </div>
        </div>

        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" data-bs-toggle="modal" data-bs-target="#tambahData"><i class="bi bi-plus"></i></a>
    </div>
</div>

<!-- Begin::Modal Input Pemasukan/Pengeluaran -->
<div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Laporan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('post.transaction')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="hidden" value="{{Auth()->user()->id}}" name="id_user">
                            <div class="form-floating mb-3">
                                <select name="type" id="" class="form-control">
                                    <option value="income">PEMASUKAN</option>
                                    <option value="outcome">PENGELUARAN</option>
                                </select>
                                <label for="floatingPemasukan">Type</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingPengeluaran" name="amount" placeholder="">
                                <label for="floatingPengeluaran">Total</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="category" id="floatingKategori" placeholder="">
                                <label for="floatingKategori">Kategori</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="date" class="form-control" name="date" id="floatingTanggal" placeholder="">
                                <label for="floatingTanggal">Tanggal</label>
                            </div>
                        </div>
                        <div class="col-sm-12 pt-3">
                            <div class="form-floating">
                                <textarea name="note" id="" cols="100" rows="100" class="form-control"></textarea>
                                <label for="catatan">Catatan</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
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
            <form action="{{route('update.transaction')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="hidden" value="{{Auth()->user()->id}}" name="id_user">
                            <input type="hidden" name="id" id="id_edit">
                            <div class="form-floating mb-3">
                                <select name="type" id="type_edit" class="form-control">
                                    <option value="income">PEMASUKAN</option>
                                    <option value="outcome">PENGELUARAN</option>
                                </select>
                                <label for="floatingPemasukan">Type</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="amount_edit" name="amount" placeholder="">
                                <label for="floatingPengeluaran">Total</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="category" id="category_edit" placeholder="">
                                <label for="floatingKategori">Kategori</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="date" class="form-control" name="date" id="tanggal_edit" placeholder="">
                                <label for="floatingTanggal">Tanggal</label>
                            </div>
                        </div>
                        <div class="col-sm-12 pt-3">
                            <div class="form-floating">
                                <textarea name="note" id="catatan_edit" cols="100" rows="100" class="form-control"></textarea>
                                <label for="catatan">Catatan</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a id="edit_delete" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
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
                            <input type="text" class="form-control" id="floatingNamaLengkap" placeholder="" value="{{ ucwords(Auth()->user()->name) }}">
                            <label for="floatingNamaLengkap">Nama Lengkap</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mb-3">
                            <input type="username" class="form-control" id="floatingUsername" placeholder="" value="{{ ucwords(Auth()->user()->username) }}">
                            <label for="floatingUsername">Username</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingPassword" placeholder="" value="">
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

<script>
        function editLaporan(id , amount , type , category , tanggal , catatan) {
            $("#id_edit").val(id);
            $("#amount_edit").val(amount);
            $("#type_edit").val(type);
            $("#category_edit").val(category);
            $("#tanggal_edit").val(tanggal);
            $("#catatan_edit").val(catatan);
            $("#edit_delete").attr("href", "/delete-transaction/" + id);
        }
    </script>

    <!-- Trigger the editLaporan function, you can call it as needed -->
    <script>
        $(document).ready(function() {
            // Calling the editLaporan function when the document is ready
            editLaporan();
        });
    </script>
@endsection('content')