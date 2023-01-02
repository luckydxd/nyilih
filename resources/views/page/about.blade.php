@push('styles')
   
    @extends('layouts.main') @section('css')
    <!-- iCheck -->
    <link href="{{ asset('assets') }}/css/styles.css" rel="stylesheet">
    @endsection
    @section('header')
    <header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>About Us</h1>
                        <span class="subheading">This is what <em>we</em> do.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @endsection
    
    @section('content')

<!-- Main Content-->
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>About us</p>
                <hr>
                <p>Perkembangan Teknologi Informasi mulai mendapat sambutan positif dari masyarakat. Perkembangannya tidak hanya disambut dan dinikmati oleh kalangan bisnis maupun pemerintah saja, tetapi juga mulai merambah dalam dunia pendidikan karena ketersediaan informasi yang terintegrasi makin penting dalam mendukung upaya menciptakan generasi penerus bangsa yang kompetitif. Bermula dari berkembangnya teknologi yang melaju dengan cepat, hal tersebut berpengaruh pada aktivitas manusia dari berbagai aspek.</p>
                <p>Sehingga manusia membutuhkan sarana pendukung untuk mendapatkan informasi yang lebih mudah. Salah satu aspek pendukung teknologi yang mudah digunakan adalah komputer. Komputer merupakan alat untuk membantu manusia dalam menyelesaikan suatu masalah. Sehingga kegunaan komputer dapat digunakan dengan baik jika didukung dengan sumber daya yang baik dan mengerti terhadap penggunaannya. Perkembangan teknologi juga memengaruhi hingga dunia bisnis, salah satunya dalam penerapan sebuah sistem informasi.</p>
                <p></p>
            </div>
        </div>
    </div>
</main>

@endsection
@section('javascript')
    <!-- ChartJS -->
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/scripts.js"></script>

@endsection