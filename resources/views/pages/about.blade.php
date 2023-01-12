@extends('layouts.main')

@section('container')

<div class="section-about">
    <div class="title-about">
        <h2 class="text-center fw-bolder" data-aos="flip-left" data-aos-duration="1000">@lang('navbar.about')</h2>
    </div>
    <div class="container-md section-about-body text-center text-light">
        <p class="mb-4" data-aos="fade-down" data-aos-duration="1000">@lang('navbar.text1')</p>
        <p data-aos="fade-up" data-aos-duration="1000">@lang('navbar.text2')</p>
    </div>
</div>
{{-- <svg xmlns="http://www.w3.org/logo/2000/svg" viewBox="0 0 1440 320"><path fill="#2746B0" fill-opacity="1" d="M0,32L60,53.3C120,75,240,117,360,117.3C480,117,600,75,720,64C840,53,960,75,1080,74.7C1200,75,1320,53,1380,42.7L1440,32L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg> --}}

<div class="container-md section-card-about">
    <div class="row d-flex justify-content-evenly">
        <div class="col-lg-4 col-md-12 col-12">
          <div class="card" data-aos="zoom-in-up">
            <div class="card-about card-body" >
              <h5 class="card-title" data-aos="zoom-out-up" data-aos-duration="1500">@lang('navbar.vision')</h5>
              <p class="card-text" data-aos="fade-up"
              data-aos-anchor-placement="top-bottom" data-aos-duration="2000">@lang('navbar.visitxt')</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-12">
          <div class="card" data-aos="zoom-in-up">
            <div class="card-about card-body">
              <h5 class="card-title" data-aos="zoom-out-up" data-aos-duration="1500">@lang('navbar.mission')</h5>
              <p class="card-text" data-aos="fade-up"
              data-aos-anchor-placement="top-bottom" data-aos-duration="2000">@lang('navbar.misitxt')</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-12">
          <div class="card" data-aos="zoom-in-up">
            <div class="card-about card-body">
              <h5 class="card-title" data-aos="zoom-out-up" data-aos-duration="1500">@lang('navbar.value')</h5>
              <p class="card-text" data-aos="fade-up"
              data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                @lang('navbar.valuetxt')</p>
            </div>
          </div>
        </div>
      </div>
</div>


<div class="customer-section">
    <div class="title">
        <h2 data-aos="fade-down">@lang('navbar.ourcus')</h2>
    </div>
    <div class="customer-body">
        <div class="customer-sub-title">
            <h2 data-aos="flip-up" data-aos-duration="500">Indonesia :</h2>
        </div>
        <div class="container-fluid row-logo">
           <div class="row pb-4 text-center">
            <div class="col-logo col-lg-3 col-md-6 col-12" data-aos="flip-left" data-aos-duration="1000">
                <img src="../img/logo/holcim.png" alt="logo-customers" height="100" width="250">
            </div>
            <div class="col-logo col-lg-3 col-md-6 col-12" data-aos="flip-left" data-aos-duration="1050">
                <img src="../img/logo/pupuk-kujang.png" alt="logo-customers"  height="150" width="150">
            </div>
            <div class="col-logo col-lg-3 col-md-6 col-12" data-aos="flip-left" data-aos-duration="1100">
                <img src="../img/logo/bosowa.png" alt="logo-customers"  height="150" width="150">
            </div>
            <div class="col-logo col-lg-3 col-md-6 col-12" data-aos="flip-left" data-aos-duration="1150">
                <img src="../img/logo/pama.png" alt="logo-customers"  height="150" width="150">
            </div>
           </div>
           <div class="row text-center">
            <div class="col-logo col-lg-3 col-md-6 col-12" data-aos="flip-left" data-aos-duration="1200">
                <img src="../img/logo/semen-padang.png" alt="logo-customers" height="150" width="150">
            </div>
            <div class="col-logo col-lg-3 col-md-6 col-12" data-aos="flip-left" data-aos-duration="1250">
                <img src="../img/logo/semen-tonasa.png" alt="logo-customers" height="150" width="150">
            </div>
            <div class="col-logo col-lg-3 col-md-6 col-12" data-aos="flip-left" data-aos-duration="1300">
                <img src="../img/logo/tereos.png" alt="logo-customers" height="150" width="150">
            </div>
            <div class="col-logo col-lg-3 col-md-6 col-12" data-aos="flip-left" data-aos-duration="1370">
                <img src="../img/logo/unitedcan.png" alt="logo-customers" height="150" width="150">
            </div>
           </div>
           <div class="row last-row">
            <div class="col-logo-last col-logo-first col-lg-4 col-md-6 col-12" data-aos="flip-left" data-aos-duration="1400">
                <img src="../img/logo/ferro.png" alt="logo-customers" height="50" width="100">
            </div>
            <div class="col-logo-last col-logo-second col-lg-4 col-md-6 col-12" data-aos="flip-left" data-aos-duration="1450">
                <img src="../img/logo/wilmar.png" alt="logo-customers" height="50" width="100">
            </div>
            <div class="col-logo-last col-logo-third col-lg-4 col-md-6 col-12" data-aos="flip-left" data-aos-duration="1520">
                <img src="../img/logo/olam.png" alt="logo-customers" height="50" width="100">
            </div>
           </div>
        </div>
            <div class="container bottom-customers">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12" data-aos="fade-right" data-aos-duration="1000">
                        <ul>
                            <li>PT. Nielsen Engineriing & Technology (Nickel & Cement Project)</li>
                            <li>PT. Hogindo Feedmill (Feedmill Industry)</li>
                            <li>PT. Multiprima Usahatama (Transportation to Halliburton, Holcim)</li>
                            <li>PT. Sinar Agro Komposindo (Fertilizer Industry)</li>

                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12 mb-5" data-aos="fade-left" data-aos-duration="1000">
                        <ul>
                            <h2 class="export-text">Export :</h2>
                            <li>Han Yeek Trading , Malaysia</li>
                            <li>Manuver Marketing Network, Phillipines</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection