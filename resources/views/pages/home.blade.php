@extends('layouts.main')

@section('container')


<div class="jumbotron bg-jumbotron">
    <div class="overlay d-flex flex-column justify-content-center align-item-center text-center">
    <h1 class="display-1 text-capitalize fw-bolder" data-aos="zoom-in-up" data-aos-duration="1000">PT. ANUGERAH BUMI SAMUDRA</h1>
    <h3 class="lead"></h3>
</div>
</div>

<div class="about">
    <div class="title">
        <h2 class="text-center fw-bolder" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">@lang('navbar.about')</h2>
    </div>
    <div class="container-md about-body text-center px-4">
        <p class="mb-4" data-aos="fade-right"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine">@lang('navbar.text1')</p>
        <p data-aos="fade-left"
        data-aos-offset="300"
        data-aos-duration="500">@lang('navbar.text1')</p>
    </div>
    <div class="button text-center" data-aos="fade-up" data-aos-offset="300"
    data-aos-anchor-placement="center-bottom">
        <a href="/about" class="btn btn-read rounded-pill fw-bold">@lang('navbar.read')</a>
    </div>
</div>

<div class="products">
    <div class="title">
        <h2 class="text-center fw-bolder"  data-aos="zoom-in-down"  data-aos-offset="200" data-aos-duration="1000">@lang('navbar.ourpro')</h2>
    </div>
    <div class="products-body container-lg">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12 ps-lg-5 mt-md-5 p-3">
                <h2 class="text-light products-text fw-bolder" data-aos="zoom-out-right" data-aos-duration="1000" data-aos-offset="300">@lang('navbar.manufact')</h2>
                <a href="#navbar" class="btn btn-product fw-bolder rounded-pill" data-aos="fade-right"
                data-aos-offset="250"
                data-aos-easing="ease-in-sine">@lang('navbar.read')</a>
            </div>
            <div class="col-lg-8 col-md-12 col-12">
                <div class="product-img" data-aos="zoom-out-left" data-aos-duration="1000" data-aos-offset="350">
                    <img src="../img/logo/hero.png" alt="Our Products" class="img-fluid border border-dark rounded-bottom">
                </div>
            </div>
        </div>
    </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#2746B0" fill-opacity="1" d="M0,32L60,53.3C120,75,240,117,360,117.3C480,117,600,75,720,64C840,53,960,75,1080,74.7C1200,75,1320,53,1380,42.7L1440,32L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>

<div class="contact">
    <div class="title">
        <h2 class="text-center fw-bolder" data-aos="fade-down" data-aos-offset="200">@lang('navbar.contact')</h2>
    </div>
    <div class="contact-body container-sm">
        <div class="row text-center">
            <div class="col-lg-4 col-md-12 col-12" data-aos="fade-up-right" data-aos-offset="300">
                <i class="icon-contact bi bi-telephone-plus-fill"></i>
            <h3 class="icon-title">Telephone</h3>
            <h5 class="icon-body"><a href="https://wa.me/081280690139" class="text-decoration-none" style="color: #2746b0">+62 8128 0690 139</a> <br> <a href="https://wa.me/087782673429" class="text-decoration-none" style="color: #2746b0">+62 8778 2673 429</a> </h5>
            </div>
            <div class="col-lg-4 col-md-12 col-12" data-aos="fade-up" data-aos-offset="300">
                <i class="icon-contact bi bi-geo-alt-fill"></i>
                <h3 class="icon-title">Location</h3>
                <h5 class="icon-body"><a href="https://www.google.com/maps?ll=-6.421552,106.992147&z=16&t=m&hl=id&gl=ID&mapclient=embed&cid=10379622109609279888" class="text-decoration-none" style="color: #2746b0">Jl. Alternatif Cileungsi – Gandoang, <br> Gg. Jaya Kusuma RT. 06 RW. 03 Kp. Mampir Barat, Kecamatan Cileungsi – Kabupaten Bogor, Jawa Barat 16820</a></h5>
            </div>
            <div class="col-lg-4 col-md-12 col-12" data-aos="fade-up-left" data-aos-offset="300">
                <i class="icon-contact bi bi-envelope-fill" ></i>
                <h3 class="icon-title">E-mail</h3>
                <h5 class="icon-body"><a href="mailto:ptabs@ymail.com" class="text-decoration-none" style="color: #2746b0">ptabs@ymail.com</a> <br> <a href="mailto:budiarto70agung@yahoo.com" class="text-decoration-none link-email" style="color: #2746b0">budiarto70agung@yahoo.com</a></h5>
            </div>
        </div>
    </div>
</div>


    
@endsection