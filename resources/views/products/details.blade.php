@extends('layouts.master')

@section('content')
    <!-- breadcrumb area start -->
    <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative">
        <div class="rs-breadcrumb-bg" data-background="{{ asset('assets/images/bg/breadcrumb-bg-01.png') }}"></div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-8 col-lg-8">
                    <div class="rs-breadcrumb-content-wrapper">
                        <div class="rs-breadcrumb-title-wrapper">
                            <h1 class="rs-breadcrumb-title">{{ $product['name'] }}</h1>
                        </div>
                        <div class="rs-breadcrumb-menu">
                            <nav>
                                <ul>
                                    <li><span><a href="index.html">Accueil</a></span></li>
                                    <li><span>Produits</span></li>
                                    <li><span>{{ $product['name'] }}</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- services details area start -->
    <section class="rs-services-area section-space ">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-8 col-lg-8">
                    <div class="rs-services-details-wrapper">
                        <div class="rs-services-details-thumb">
                            <img src="{{ asset($product['cover']) }}" alt="image">
                        </div>
                        <h3 class="rs-services-details-title">{{ $product['name'] }}</h3>
                        <p class="mb-25 mt-15"><strong>{{ $product['subtitle'] }}</strong></p>
                        <p> {{ $product['description'] }}</p>


                        <div class="rs-services-details-feature-list">
                            <div class="rs-list-item has-theme-orange">
                                <ul>
                                    @foreach ($product['products_list'] as $item)
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                                <path
                                                    d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM11.0026 16L6.75999 11.7574L8.17421 10.3431L11.0026 13.1716L16.6595 7.51472L18.0737 8.92893L11.0026 16Z">
                                                </path>
                                            </svg>
                                            {{ $item }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="rs-services-details-cta">
                            <div class="rs-services-details-cta-bg-thumb"
                                data-background="{{ asset('assets/images/bg/cta-bg-08.png') }}">
                            </div>
                            <div class="rs-services-details-cta-content">
                                <h3 class="rs-services-details-title mb-40">Nous sommes l'expertise qu'il vous faut</h3>
                                <div class="rs-services-details-btn">
                                    <a class="rs-btn has-theme-orange has-icon has-bg" href="{{ route('about') }}">A propos
                                        de nous
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
                            <div class="rs-services-details-cta-thumb">
                                <img src="{{ asset('assets/images/services/details/services-details-02.png') }}"
                                    alt="image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="rs-sidebar-wrapper rs-sidebar-sticky">
                        <div class="sidebar-widget widget-categories-two has-content-none mb-30">
                            <h5 class="mb-25 sidebar-widget-title">Nos Produits</h5>
                            <ul>
                                @foreach ($otherProducts as $p)
                                    <li>
                                        <a href="{{ route('products.details', $p['slug']) }}">
                                            {{ $p['name'] }}
                                            <i class="ri-arrow-right-line"></i></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar-widget widget-cta mb-30">
                            <div class="sidebar-widget-cta-thumb"
                                data-background="{{ asset('assets/images/bg/cta-bg-09.png') }}">
                            </div>
                            <div class="sidebar-widget-content">
                                <h3 class="sidebar-widget-title has-large has-border">Vous avez un <br> projet à nous <br>
                                    confier ?</h3>
                                <div class="sidebar-widget-btn">
                                    <a class="rs-btn has-theme-orange has-icon has-bg" href="{{ route('contact') }}">Parlons-en
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
                        <div class="sidebar-widget widget-download mb-30">
                            <h5 class="mb-25 sidebar-widget-title">Download Brochures</h5>
                            <ul>
                                <li>
                                    <a href="{{ route('download.profile') }}">
                                        <div class="left">
                                            <span><img src="{{ asset('assets/images/icon/docs.svg') }}"
                                                    alt="#"></span>
                                            Profil d'Entreprise Sion Investment
                                        </div>
                                        <span><img src="{{ asset('assets/images/icon/download-01.svg') }}"
                                                alt="#"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services details area end -->
@endsection
