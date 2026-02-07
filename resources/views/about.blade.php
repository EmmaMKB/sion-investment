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
                                <h1 class="rs-breadcrumb-title">A propos de nous</h1>
                            </div>
                            <div class="rs-breadcrumb-menu">
                                <nav>
                                    <ul>
                                        <li><span><a href="{{ route('home') }}">Accueil</a></span></li>
                                        <li><span>A propos de nous</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- about area start -->
        <section class="rs-about-area section-space rs-about-twelve">
            <div class="container">
                <div class="row  g-5 justify-content-center section-title-space align-items-center">
                    <div class="col-xxl-8 col-xl-9 col-lg-9">
                        <div class="rs-section-title-wrapper text-center">
                            <span class="rs-section-subtitle has-theme-orange">
                                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="15" viewBox="0 0 11 15"
                                    fill="none">
                                    <path d="M3.14286 10L0 15L8.78104e-07 0L3.14286 5V10Z" fill="#EA5501"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6.28571 10L3.14286 15L3.14286 10L4.71428 7.5L3.14286 5L3.14286 0L6.28571 5L6.28571 10ZM6.28571 10L7.85714 7.5L6.28571 5V0L11 7.5L6.28571 15V10Z"
                                        fill="#EA5501"></path>
                                </svg>
                                A propos de Sion Investment
                            </span>
                            <h2 class="rs-section-title rs-split-text-enable split-in-fade">Nous sommes votre expertise fiable.</h2>
                            <p>Nous intervenons comme un partenaire de confiance pour sécuriser la chaîne d'approvisionnement des entreprises minières.
                                Que ce soit pour des équipements critiques, des consommables
                                industriels ou des services spécialisés, notre structure est conçue
                                pour garantir la continuité opérationnelle de nos clients, en réduisant
                                les délais de livraison et en optimisant les coûts d'acquisition</p>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-xl-6 col-lg-6">
                        <div class="rs-about-wrapper">
                            <div class="rs-about-shape">
                                <img src="assets/images/shape/about-shape-06.png" alt="image">
                            </div>
                            <div class="rs-about-thumb">
                                <img src="assets/images/about/about-thumb-18.png" alt="image">
                            </div>
                            <div class="rs-about-content">
                                <h6 class="rs-about-title">Notre Mission</h6>
                                <p>Apporter une réponse locale aux exigences internationales.
                                    Chez SION Investment, notre mission est de sécuriser l'accès
                                    aux ressources critiques pour l'industrie minière.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="rs-about-wrapper">
                            <div class="rs-about-shape">
                                <img src="assets/images/shape/about-shape-07.png" alt="image">
                            </div>
                            <div class="rs-about-thumb">
                                <img src="assets/images/about/about-thumb-19.png" alt="image">
                            </div>
                            <div class="rs-about-content">
                                <h6 class="rs-about-title">Notre Vision</h6>
                                <p>Devenir un fournisseur leader de services, de solutions minières
                                    innovantes et de biens pour le secteur minier mondial, en mettant
                                    l'accent sur les communautés locales.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end -->

        <!-- history area start -->
        <section class="rs-history-area section-space rs-history-one">
            <div class="rs-history-bg-thumb" data-background="assets/images/bg/tab-bg-01.png"></div>
            <div class="container">
                <div class="row  g-5 justify-content-center section-title-space align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="rs-section-title-wrapper text-center">
                            <span class="rs-section-subtitle has-theme-orange">
                                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="15" viewBox="0 0 11 15"
                                    fill="none">
                                    <path d="M3.14286 10L0 15L8.78104e-07 0L3.14286 5V10Z" fill="#EA5501"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6.28571 10L3.14286 15L3.14286 10L4.71428 7.5L3.14286 5L3.14286 0L6.28571 5L6.28571 10ZM6.28571 10L7.85714 7.5L6.28571 5V0L11 7.5L6.28571 15V10Z"
                                        fill="#EA5501"></path>
                                </svg>
                                Decouvrez
                            </span>
                            <h2 class="rs-section-title rs-split-text-enable split-in-fade">Notre Historique</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xxl-9 col-xl-10">
                        <div class="rs-history-tab-wrapper">
                            <div class="rs-history-tab">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-item-one-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-item-one" type="button" role="tab"
                                            aria-controls="pills-item-one" aria-selected="true">
                                            2015
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-item-two-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-item-two" type="button" role="tab"
                                            aria-controls="pills-item-two" aria-selected="false"> 2016
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-item-three-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-item-three" type="button" role="tab"
                                            aria-controls="pills-item-three" aria-selected="false">
                                            2017
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-item-four-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-item-four" type="button" role="tab"
                                            aria-controls="pills-item-three" aria-selected="false">
                                            2020
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-item-five-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-item-five" type="button" role="tab"
                                            aria-controls="pills-item-three" aria-selected="false">
                                            2022
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="rs-history-tab-content-wrapper">
                                <div class="tab-content rs-history-tab-anim" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-item-one" role="tabpanel"
                                        aria-labelledby="pills-item-one-tab" tabindex="0">
                                        <div class="rs-history-tab-item">
                                            <div class="rs-history-tab-thumb">
                                                <img src="assets/images/history/history-thumb-01.png" alt="image">
                                            </div>
                                            <div class="rs-history-tab-content">
                                                <h5 class="rs-history-tab-title">Genèse du projet</h5>
                                                <p>
                                                    Réalisation des études de faisabilité stratégiques
                                                    pour la création de SION Investment. Cette étape clé a
                                                    permis de structurer notre offre de solutions intégrées
                                                    (biens et services) spécifiquement dédiées aux acteurs
                                                    du secteur minier. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-item-two" role="tabpanel"
                                        aria-labelledby="pills-item-two-tab" tabindex="0">
                                        <div class="rs-history-tab-item">
                                            <div class="rs-history-tab-thumb">
                                                <img src="assets/images/history/history-thumb-02.png" alt="image">
                                            </div>
                                            <div class="rs-history-tab-content">
                                                <h5 class="rs-history-tab-title"> Formalisation et cadre juridique</h5>
                                                <p>
                                                    Mise en œuvre des procédures de due diligence et
                                                     enregistrement officiel de la société. En
                                                     consolidant son cadre juridique, SION Investment a
                                                     posé les fondements nécessaires pour devenir un
                                                     partenaire fiable dans la chaîne d'approvisionnement
                                                     des entreprises minières. </p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-item-three" role="tabpanel"
                                        aria-labelledby="pills-item-three-tab" tabindex="0">
                                        <div class="rs-history-tab-item">
                                            <div class="rs-history-tab-thumb">
                                                <img src="assets/images/history/history-thumb-03.png" alt="image">
                                            </div>
                                            <div class="rs-history-tab-content">
                                                <h5 class="rs-history-tab-title">Formalisation de Sion Investment</h5>
                                                <p>
                                                    Établissement officiel de notre structure en RDC pour répondre aux besoins croissants du
                                                    secteur extractif national. Cette étape consacre notre
                                                    spécialisation dans la fourniture de biens et services à
                                                    haute valeur ajoutée sur le marché congolais </p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-item-four" role="tabpanel"
                                        aria-labelledby="pills-item-four-tab" tabindex="0">
                                        <div class="rs-history-tab-item">
                                            <div class="rs-history-tab-thumb">
                                                <img src="assets/images/history/history-thumb-04.png" alt="image">
                                            </div>
                                            <div class="rs-history-tab-content">
                                                <h5 class="rs-history-tab-title">Création de SION Investment ZAMBIA</h5>
                                                <p>
                                                    Création de SION Investment ZAMBIA pour optimiser
                                                    l'achat et la distribution de biens et services depuis
                                                    le marché zambien. </p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-item-five" role="tabpanel"
                                        aria-labelledby="pills-item-five-tab" tabindex="0">
                                        <div class="rs-history-tab-item">
                                            <div class="rs-history-tab-thumb">
                                                <img src="assets/images/history/history-thumb-05.png" alt="image">
                                            </div>
                                            <div class="rs-history-tab-content">
                                                <h5 class="rs-history-tab-title">Ouverture des bureaux en Afrique du Sud</h5>
                                                <p>
                                                    Déploiement d'un bureau de liaison en RSA pour
                                                    soutenir la croissance du groupe. Cette structure
                                                    facilite le sourcing direct et renforce la position de SION
                                                    Investment comme acteur clé de l'approvisionnement industriel.
                                                 </p>
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
        <!-- history area start -->
@endsection
