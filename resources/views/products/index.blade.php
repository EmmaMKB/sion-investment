@extends('layouts.master')

@section('content')
    <!-- breadcrumb area start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative">
        <div class="rs-breadcrumb-bg" data-background="assets/images/bg/breadcrumb-bg-01.png"></div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-8 col-lg-8">
                    <div class="rs-breadcrumb-content-wrapper">
                        <div class="rs-breadcrumb-title-wrapper">
                            <h1 class="rs-breadcrumb-title">Nos Produits</h1>
                        </div>
                        <div class="rs-breadcrumb-menu">
                            <nav>
                                <ul>
                                    <li><span><a href="{{ route('home') }}">Accueil</a></span></li>
                                    <li><span>Produits</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- services area start -->
    <section class="rs-services-area rs-services-three section-space has-theme-orange">
        <div class="container">
            <div class="row g-5 process-counts">
                @foreach ($products as $product)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="rs-services-wrapper">
                            <div class="rs-services-item">
                                <div class="rs-services-thumb">
                                    <a href="#"> <img src="assets/images/services/services-thumb-08.png"
                                            alt="image"></a>
                                </div>
                                <div class="rs-services-content">
                                    <h5 class="rs-services-title"><a href="#"> {{ $product['name'] }}
                                        </a></h5>
                                    <p class="descrip">{{ $product['subtitle'] }}</p>
                                    <div class="rs-services-number"></div>
                                    <div class="rs-services-btn-wrapper">
                                        <div class="rs-services-text-btn underline">
                                            <a class="rs-text-btn" href="{{ route('products.details', $product['slug']) }}">Voir Plus</a>
                                        </div>
                                        <a class="rs-square-btn has-icon has-light-bg" href="#">
                                            <span class="icon-box">
                                                <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" width="12"
                                                    height="10" viewBox="0 0 12 10" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M0 5C0 4.60551 0.319797 4.28571 0.714286 4.28571L8.98985 4.28571L5.92349 1.21936C5.64455 0.940417 5.64455 0.488155 5.92349 0.209209C6.20244 -0.0697365 6.6547 -0.0697365 6.93365 0.209209L11.2194 4.49492C11.4983 4.77387 11.4983 5.22613 11.2194 5.50508L6.93365 9.79079C6.6547 10.0697 6.20244 10.0697 5.92349 9.79079C5.64455 9.51184 5.64455 9.05958 5.92349 8.78064L8.98985 5.71429L0.714286 5.71429C0.319797 5.71429 0 5.39449 0 5Z"
                                                        fill="#616161"></path>
                                                </svg>
                                                <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" width="12"
                                                    height="10" viewBox="0 0 12 10" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M0 5C0 4.60551 0.319797 4.28571 0.714286 4.28571L8.98985 4.28571L5.92349 1.21936C5.64455 0.940417 5.64455 0.488155 5.92349 0.209209C6.20244 -0.0697365 6.6547 -0.0697365 6.93365 0.209209L11.2194 4.49492C11.4983 4.77387 11.4983 5.22613 11.2194 5.50508L6.93365 9.79079C6.6547 10.0697 6.20244 10.0697 5.92349 9.79079C5.64455 9.51184 5.64455 9.05958 5.92349 8.78064L8.98985 5.71429L0.714286 5.71429C0.319797 5.71429 0 5.39449 0 5Z"
                                                        fill="#616161"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- services area end -->
@endsection
