@push('styles')
   
    @extends('layouts.main') @section('css')
    <!-- iCheck -->
    <link href="{{ asset('assets') }}/css/styles.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/daterangepicker/daterangepicker.css"> <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/summernote/summernote-bs4.min.css"> --}}
@endsection

@section('header')

<header  class="masthead" style="background-image: url('assets/img/home.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Peminjaman Barang Online Indramayu</h1>
                    <span class="subheading">Borrow your Best Stuff</span>
                </div>
            </div>
        </div>
 </div>
</header>
<body class="hold-transition sidebar-mini layout-fixed">

@endsection

@section('content')
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">Manusia harus menjelajah, dan inilah penjelajahan terbesarnya</h2>
                    <h3 class="post-subtitle">Masalah terlihat sangat kecil dari jarak 150 mil</h3>
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="#!">Nyilih Barang</a>
                    on September 24, 2022
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Post preview-->
            <div class="post-preview">
                <a href="post.html"><h2 class="post-title">Ini Adalah Adalah Aplikasi Peminjaman Barang  berbasis Web.</h2></a>
                <p class="post-meta">
                    Posted by
                    <a href="#!">Nyilih Barang</a>
                    on September 18, 2022
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Post preview-->
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">Aplikasi Ini berpusat di Kab.Indramayu</h2>
                    <h3 class="post-subtitle">#</h3>
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="#!">Nyilih Barang</a>
                    on August 24, 2022
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Post preview-->
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">Menyediakan Penyewaan Alat atau Barang Outdoor untuk Kebutuhan Pendakian.</h2>
                    <h3 class="post-subtitle">Sewilayah Indramayu</h3>
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="#!">Nyilih Barang</a>
                    on July 8, 2022
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Pager-->
        
        </div>
    </div>
</div>
@endsection
@section('javascript')
    <!-- ChartJS -->
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/scripts.js"></script>

@endsection
