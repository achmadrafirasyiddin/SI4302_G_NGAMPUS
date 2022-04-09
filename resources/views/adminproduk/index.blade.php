@extends('layouts.admin')
@section('konten')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Manajemen Produk</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Beranda</a></li>
                    <li class="breadcrumb-item active">Manajemen Produk</li>
                </ol>
            </nav>
    </div>
<!-- End Page Title -->

<!-- dashboard -->
    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col">
                <div class="row">
                    <!-- Total Produk Card-->
                    <div class="col-xxl-4 col-md-3">
                        <div class="card info-card total-card">

                            <div class="card-body">
                                
                                <div class="d-flex align-items-center pt-3">

                                <div class="ps-3 pb-2 ">
                                    <h6 style="color:#00B5BF">145</h6>
                                    <h5 class="card-title">Total Produk</h5>
                                </div>
                                <div class="filter p-3">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Total Produk Card -->

                <!-- Kepo Jurusan Card -->
                <div class="col-xxl-4 col-md-3">
                        <div class="card info-card kepo-card">

                            <div class="card-body">
                                
                                <div class="d-flex align-items-center pt-3">

                                <div class="ps-3 pb-2 ">
                                    <h6 style="color:#00B5BF">145</h6>
                                    <h5 class="card-title">Kepo Jurusan</h5>
                                </div>
                                <div class="filter p-3">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-signpost-split"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Kepo Jurusan Card -->

                <!-- Major Experience Card -->
                <div class="col-xxl-4 col-md-3">
                        <div class="card info-card me-card">

                            <div class="card-body">
                                
                                <div class="d-flex align-items-center pt-3">

                                <div class="ps-3 pb-2 ">
                                    <h6 style="color:#00B5BF">145</h6>
                                    <h5 class="card-title">Major Experience</h5>
                                </div>
                                <div class="filter p-3">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-eyeglasses"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Major Experience Card -->

                <!-- Webinar Card -->
                <div class="col-xxl-4 col-md-3">
                        <div class="card info-card webinar-card">

                            <div class="card-body">
                                
                                <div class="d-flex align-items-center pt-3">

                                <div class="ps-3 pb-2 ">
                                    <h6 style="color:#00B5BF">145</h6>
                                    <h5 class="card-title">Webinar</h5>
                                </div>
                                <div class="filter p-3">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person-badge"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Webinar Card -->

<!-- tabel -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pt-3">
                    <p class="fw-bolder mt-2" style="float:left; font-size:15px;">List Produk</p>
                    <a href="/admin/produk/tambah" style="font-size:13px; float:right;" class=" rounded-pill btn-secondary btn">
                        <i class="bi bi-plus-square me-1 "></i> Tambah Produk</button></a> 
                        
                    </div>
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table class="table">
                            <thead style="color:#00B5BF">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Kategori Produk</th>
                                <th scope="col">Waktu Pelaksanaan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td >
                                1
                                </td>
                                <td>
                                Gizi
                                </td>
                                <td>
                                Kepo Jurusan
                                </td>
                                <td>
                                Jum'at 1 April 2022
                                </td>
                                <td >
                                    <a href="" class="btn btn-detail rounded-pill">Edit</a>
                                    <form action="" method="POST">    
                                    <button type="submit" class="btn btn-hapus rounded-pill">Delete</button>
                                </form> 
                                </td>
                            </tr>

                            
                            
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>

                

@endsection