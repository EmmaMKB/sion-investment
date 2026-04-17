@extends('layouts.master')

@section('content')
    <!-- banner area start -->
    <section class="rs-banner-area rs-banner-one p-relative rs-swiper">
        <div class="rs-banner-shape">
            <img src="assets/images/shape/half-arrow.png" alt="image">
        </div>
        <div class="container">
            <div class="row align-items-center  g-5">
                <div class="col-xl-2">
                    <div class="rs-banner-meta-wrapper">
                        <div class="rs-banner-contact-item">
                            <span>Email.</span>
                            <h6><a href="mailto:contact@sion-invest.com">contact@sion-invest.com</a></h6>
                        </div>
                        {{-- <div class="rs-banner-contact-item">
                            <span>Call.</span>
                            <h6><a href="tel:+971551579261"> +971 551 579 261 </a></h6>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="rs-banner-slider-wrapper">
            <div class="swiper" data-clone-slides="false" data-loop="true" data-speed="2000" data-autoplay="true"
                data-dots-dynamic="false" data-hover-pause="true" data-effect="fade" data-delay="1000" data-item="1"
                data-item-xl="1" data-item-lg="1" data-item-md="1" data-item-sm="1" data-item-xs="1" data-item-mobile="1"
                data-margin="30" data-margin-xl="30" data-margin-lg="30" data-margin-md="30" data-margin-sm="30"
                data-margin-xs="30" data-margin-mobile="30">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="rs-banner-item-wrapper">
                            <div class="rs-banner-bg-thumb" data-background="assets/images/bg/banner-bg-02.png">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xxl-8 col-xl-8 col-lg-10">
                                        <div class="rs-banner-item">
                                            <div class="rs-banner-content">
                                                <h1 class="rs-banner-title">Nous vous apportons une expertise de précision
                                                </h1>
                                                <div class="rs-banner-descrip">
                                                    <p>Depuis près de 10 ans, nous apportons au secteur minier une expertise
                                                        de pointe.. </p>
                                                </div>
                                                <div class="rs-banner-info-btn">
                                                    <div class="rs-banner-btn">
                                                        <a class="rs-btn has-theme-orange has-icon has-bg"
                                                            href="{{ route('about') }}">A
                                                            propos de nous
                                                            <span class="icon-box">
                                                                <svg class="icon-first" xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 32 32">
                                                                    <path
                                                                        d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                                                    </path>
                                                                </svg>
                                                                <svg class="icon-second" xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 32 32">
                                                                    <path
                                                                        d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </div>

                                                    <div class="rs-feature-video">
                                                        <a href="https://www.youtube.com/watch?v=mI6KQpdxlU0"
                                                            class="rs-play-btn popup-video"><i class="ri-play-fill"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner area end -->
    <!-- about area start -->
    <section class="rs-about-area pt-30 section-space-bottom rs-about-one">
        <div class="container">
            <div class="row  g-5">
                <div class="col-xl-5 col-lg-5">
                    <div class="rs-section-title-wrapper">
                        <span class="rs-section-subtitle has-theme-orange justify-content-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="15" viewBox="0 0 11 15"
                                fill="none">
                                <path d="M3.14286 10L0 15L8.78104e-07 0L3.14286 5V10Z" fill="#EA5501"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6.28571 10L3.14286 15L3.14286 10L4.71428 7.5L3.14286 5L3.14286 0L6.28571 5L6.28571 10ZM6.28571 10L7.85714 7.5L6.28571 5V0L11 7.5L6.28571 15V10Z"
                                    fill="#EA5501"></path>
                            </svg>
                            A propos de nous
                        </span>
                        <h2 class="rs-section-title rs-split-text-enable split-in-fade">Nous sommes à votre service <span
                                class="rs-theme-orange">depuis 2015.</span>
                        </h2>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="rs-about-content">
                        <div class="rs-about-description">
                            <p class="descrip-1">Nous intervenons comme un partenaire de confiance
                                pour sécuriser la chaîne d'approvisionnement des entreprises minières.</p>
                            <p class="descrip-2">
                                Que ce soit pour des équipements critiques, des consommables
                                industriels ou des services spécialisés, notre structure est
                                conçue pour garantir la continuité opérationnelle de nos clients. </p>
                        </div>
                        <div class="rs-about-btn">
                            <a class="rs-btn has-theme-orange has-icon has-bg" href="{{ route('about') }}">Savoir plus
                                <span class="icon-box">
                                    <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path
                                            d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                        </path>
                                    </svg>
                                    <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path
                                            d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                        </path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="rs-about-thumb wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                        <div class="rs-about-bg-thumb" data-background="assets/images/about/about-thumb-01.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->
    <!-- services area start -->
    <section class="rs-services-area section-space-top rs-services-one primary-bg p-relative">
        <div class="rs-services-shape">
            <img src="assets/images/shape/wave-shape-01.png" alt="image">
        </div>
        <div class="container">
            <div class="row  g-5 section-title-space align-items-center">
                <div class="col-xl-7 col-lg-7">
                    <div class="rs-section-title-wrapper">
                        <span class="rs-section-subtitle has-theme-orange justify-content-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="15" viewBox="0 0 11 15"
                                fill="none">
                                <path d="M3.14286 10L0 15L8.78104e-07 0L3.14286 5V10Z" fill="#EA5501"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6.28571 10L3.14286 15L3.14286 10L4.71428 7.5L3.14286 5L3.14286 0L6.28571 5L6.28571 10ZM6.28571 10L7.85714 7.5L6.28571 5V0L11 7.5L6.28571 15V10Z"
                                    fill="#EA5501"></path>
                            </svg>
                            Nos Services
                        </span>
                        <h2 class="rs-section-title rs-split-text-enable split-in-fade">
                            Trouvez les meilleures solutions de l'Industrie</h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="rs-services-btn">
                        <a class="rs-btn has-bg-transparent has-icon has-bg" href="{{ route('services') }}">Tous nos
                            Services
                            <span class="icon-box">
                                <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <path
                                        d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                    </path>
                                </svg>
                                <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <path
                                        d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                    </path>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-xxl-3 col-xl-4 col-lg-4">
                    <div class="rs-services-tab">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            @foreach ($services as $service)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link @if ($loop->first) active @endif"
                                        id="pills-{{ $loop->index }}-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-{{ $loop->index }}" type="button" role="tab"
                                        aria-controls="pills-{{ $loop->index }}" aria-selected="false">
                                        {{ $service['name'] }}<span class="rs-services-icon"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="18" height="12"
                                                viewBox="0 0 18 12" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M0 6C0 5.66249 0.273604 5.38889 0.611111 5.38889L15.0246 5.38889L11.179 1.54323C10.9403 1.30458 10.9403 0.917645 11.179 0.678991C11.4176 0.440337 11.8046 0.440337 12.0432 0.678991L16.9321 5.56788C17.1708 5.80653 17.1708 6.19347 16.9321 6.43212L12.0432 11.321C11.8046 11.5597 11.4176 11.5597 11.179 11.321C10.9403 11.0824 10.9403 10.6954 11.179 10.4568L15.0246 6.61111L0.611111 6.61111C0.273604 6.61111 0 6.33751 0 6Z"
                                                    fill="white"></path>
                                            </svg></span>
                                    </button>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-8 col-lg-8">
                    <div class="rs-services-tab-wrapper">
                        <div class="tab-content rs-services-tab-anim" id="pills-tabContent">
                            @foreach ($services as $service)
                                <div class="tab-pane fade show @if ($loop->first) active @endif"
                                    id="pills-{{ $loop->index }}" role="tabpanel" aria-labelledby="pills-{{ $loop->index }}"
                                    tabindex="0">
                                    <div class="rs-services-tab-content-wrapper p-relative">
                                        <div class="row g-5 align-items-center">
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="rs-services-tab-content-thumb has-clip">
                                                    <img src="{{ asset($service['thumbnail']) }}"
                                                        alt="sion investment {{ $service['name'] }}">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="rs-services-tab-content">
                                                    <h3 class="rs-services-tab-title">{{ $service['name'] }}
                                                    </h3>
                                                    <p>{{ $service['subtitle'] }} </p>
                                                    <div class="rs-services-tab-list">
                                                        <ul>
                                                            @foreach ($service['services_list'] as $listItem)
                                                                <li>{{ $listItem }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div class="rs-services-tab-btn">
                                                        <a class="rs-btn has-text has-icon"
                                                            href="{{ route('services.details', ['slug' => $service['slug']]) }}">Read
                                                            More
                                                            <span class="icon-box">
                                                                <svg class="icon-first" xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 32 32">
                                                                    <path
                                                                        d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                                                    </path>
                                                                </svg>
                                                                <svg class="icon-second"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 32 32">
                                                                    <path
                                                                        d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services area end -->
@endsection
