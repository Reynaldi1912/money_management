@extends('layouts.app')

@section('content')
<div class="content">
    <!-- Navbar Start -->
    @include('layouts.header')
    <!-- Navbar End -->

    <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-4">
                <div class="bg-light rounded d-flex align-items-center justify-content-around p-4">
                    <i class="fa fa-chart-line fa-3x text-success"></i>
                    <div class="ms-3">
                        <h5 class="mb-2 text-success">Pemasukan</h5>
                        <h6 class="mb-0 text-success">Rp. 12.000.000</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="bg-light rounded d-flex align-items-center justify-content-around p-4">
                    <i class="fa fa-chart-line fa-3x text-danger"></i>
                    <div class="ms-3">
                        <h5 class="mb-2 text-danger">Pengeluaran</h5>
                        <h6 class="mb-0 text-danger">Rp. 5.000.000</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="bg-light rounded d-flex align-items-center justify-content-around p-4">
                    <i class="fa fa-credit-card fa-3x text-primary"></i>
                    <div class="ms-3">
                        <h5 class="mb-2 text-primary">Saldo Saat Ini</h5>
                        <h6 class="mb-0 text-primary">Rp. 7.000.000</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <table>
            <th>1</th>
        </table>
    </div>
</div>
<!-- Sale & Revenue End -->

<!-- Footer Start -->
@include('layouts.footer')
<!-- Footer End -->
</div>
@endsection('content')