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
                            <h1 class="rs-breadcrumb-title">{{ $service['name'] }}</h1>
                        </div>
                        <div class="rs-breadcrumb-menu">
                            <nav>
                                <ul>
                                    <li><span><a href="{{ route('home') }}">Accueil</a></span></li>
                                    <li><span><a href="{{ route('services') }}">Services</a></span></li>
                                    <li><span>Services Details</span></li>
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
                            <img src="{{ asset('assets/images/services/details/services-details-01.png') }}" alt="image">
                        </div>
                        <h3 class="rs-services-details-title">{{ $service['name'] }}</h3>
                        <p class="mb-25 mt-15"><strong>{{ $service['subtitle'] }}</strong></p>
                        <p>{{ $service['description'] }}</p>

                        <div class="rs-services-details-feature-list">
                            <div class="rs-list-item has-theme-orange">
                                <ul>
                                    @foreach ($service['services_list'] as $listItem)
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                                <path
                                                    d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM11.0026 16L6.75999 11.7574L8.17421 10.3431L11.0026 13.1716L16.6595 7.51472L18.0737 8.92893L11.0026 16Z">
                                                </path>
                                            </svg>
                                            {{ $listItem }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="rs-sidebar-wrapper rs-sidebar-sticky">
                        <div class="sidebar-widget widget-categories-two has-content-none mb-30">
                            <h5 class="mb-25 sidebar-widget-title">Nos Services</h5>
                            <ul>
                                @foreach ($otherServices as $s)
                                    <li>
                                        <a href="{{ route('services.details', $s['slug']) }}">
                                            {{ $s['name'] }}
                                            <i class="ri-arrow-right-line"></i></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar-widget widget-download mb-30">
                            <h5 class="mb-25 sidebar-widget-title">Téléchargez notre profil</h5>
                            <ul>
                                <li>
                                    <a href="{{ route('download.profile') }}">
                                        <div class="left">
                                            <span><img src="{{ asset('assets/images/icon/docs.svg') }}" alt="#"></span>
                                            Profil d'Entreprise Sion Investment
                                        </div>
                                        <span><img src="{{ asset('assets/images/icon/download-01.svg') }}" alt="#"></span>
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
