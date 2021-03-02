    @extends('eathub.master')

    @section('content')
     <!-- HOME START-->
     <section class="bg-home" style="background-image:url('{{ secure_asset('/') }}eathub/images/18.jpeg')" id="home">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-6">
                            <div class="title-heading">
                                <i class="mdi mdi-bookmark-check text-custom h2"></i>
                                <h1 class="heading text-white mb-3" style="color: #e49e00 !important;">Eat Hub</h1>
                                <p class="para-desc text-white-50" style="color:#2f3545 !important;">Commander à manger, n'a jamais été autant facile ! <br> Rejoignez la communauté et commandez, vous serrez livré en un temps records </p>
                            </div>
                            <div class="col-md-10">
                                    <ul class="list-unstyled mb-0 app-download">
                                        <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{ secure_asset('/') }}eathub/images/apple.png" class="img-fluid mt-2" alt=""></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{ secure_asset('/') }}eathub/images/google.png" class="img-fluid mt-2" alt=""></a></li>
                                    </ul>
                            </div><!--end col-->
                        </div><!--end col-->

                        <div class="col-lg-5 col-md-6 mt-4 pt-2">
                            <div class="home-img text-md-right">
                                <img src="{{ secure_asset('/') }}eathub/images/iphone1.png" class="img-fluid mover-img" alt="">
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </div><!--end home desc center-->
        </div><!--end home center-->
    </section><!--end section-->
    <!-- HOME END-->

    <!-- Feature Start -->
    <section class="section bg-light" id="services">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <i class="mdi mdi-trophy-outline text-custom h2"></i>
                        <h4 class="title text-uppercase mt-3 mb-5">Nouvelles Fonctionnalités </h4>
                        <p class="text-muted mx-auto para-desc mb-0">Nous nous faisons une priorité d'offrir des services flexibles pour répondre à vos besoins</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row services align-items-center">
                <div class="col-lg-4 col-md-6">
                    <div class="core-service">
                        <div class="core-service-content mt-4 pt-2 fea-right text-right">
                            <div class="icon ml-4 mt-4">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <div class="content">
                                <h4 class="title mb-2">Ne manquer rien</h4>
                                <p class="text-muted mb-0">Savourez chaque délices de vos meilleurs plats africains,Europe, Amérique et asiatique via l'application EAT HUB</p>
                            </div>
                        </div>

                        <div class="core-service-content mt-4 pt-2 fea-right text-right">
                            <div class="icon ml-4 mt-4">
                                <i class="fas fa-search"></i>
                            </div>
                            <div class="content">
                                <h4 class="title mb-2">Recherche dynamique</h4>
                                <p class="text-muted mb-0">Nous avons un système de recherche en live et en temps réel de vos restaurant préférés et supermarchés</p>
                            </div>
                        </div>

                        <div class="core-service-content mt-4 pt-2 fea-right text-right">
                            <div class="icon ml-4 mt-4">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="content">
                                <h4 class="title mb-2">Géolocalisation </h4>
                                <p class="text-muted mb-0">Nous sommes un service 100 % en ligne</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 mt-4 pt-2 core-service-img">
                    <div class="ml-lg-4 mr-lg-4">
                        <img src="{{ secure_asset('/') }}eathub/images/iphone2.png" class="img-fluid mx-auto" data-aos="zoom-in-down" alt="" style="max-width: 350px;">
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6">
                    <div class="core-service">
                        <div class="core-service-content mt-4 pt-2 fea-left">
                            <div class="icon mr-4 mt-4">
                                <i class="fas fa-check-double"></i>
                            </div>
                            <div class="content">
                                <h4 class="title mb-2">Variétés de choix</h4>
                                <p class="text-muted mb-0">Nous avons un menu bien rempli à vous couper le souffle avec plusieurs variétés de plats</p>
                            </div>
                        </div>

                        <div class="core-service-content mt-4 pt-2 fea-left">
                            <div class="icon mr-4 mt-4">
                                <i class="fas fa-truck"></i>
                            </div>
                            <div class="content">
                                <h4 class="title mb-2">Livraison instantanée</h4>
                                <p class="text-muted mb-0">Des livreurs 100% fiable, rapide, et sûre
                                    Nous vous assurons une expédition express</p>
                            </div>
                        </div>

                        <div class="core-service-content mt-4 pt-2 fea-left">
                            <div class="icon mr-4 mt-4">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="content">
                                <h4 class="title mb-2">Faites vous plaisir</h4>
                                <p class="text-muted mb-0">Juste en utilisant votre Smartphone.</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Feature End -->

    <!-- CTA Start -->
    <section class="section bg-video bg-cta" style="background: url('{{ secure_asset('/') }}eathub/images/cta.jpg') fixed center center;" id="video">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <h5 class="text-light text-uppercase">Comment nous le faisons. Jouez et regardez!</h5>
                    <a href="https://youtu.be/65JrtwtTOdc" class="play-btn video-play-icon">
                        <img src="{{ secure_asset('/') }}eathub/images/icon/play-button-light.png" class="img-fluid mt-4 pt-2" alt="">
                    </a>
                    <h6 class="text-white text-uppercase mt-3">Teaser de eat hub</h6>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- CTA End -->

    <!-- Available Feature Start -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <i class="mdi mdi-settings-outline text-custom h2"></i>
                        <h4 class="title text-uppercase mt-3 mb-5">L'APPLICATION EST DISPONIBLE SUR</h4>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-md-4 mt-4 pt-2">
                    <div class="device-feature device-border text-center">
                        <div class="icon mb-4 position-relative d-inline-block">
                            <img src="{{ secure_asset('/') }}eathub/images/icon/pc.png" class="img-fluid" alt="">
                        </div>
                        <div class="content">
                            <h4 class="title mb-3">PC / Ordinateur</h4>
                            <p class="text-muted">Bientôt ...</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 mt-4 pt-2">
                    <div class="device-feature device-border text-center">
                        <div class="icon mb-4 position-relative d-inline-block">
                            <img src="{{ secure_asset('/') }}eathub/images/icon/ipad.png" class="img-fluid" alt="">
                        </div>
                        <div class="content">
                            <h4 class="title mb-3">Tablette / Ipad</h4>
                            <p class="text-muted">Disponible sur les stores</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 mt-4 pt-2">
                    <div class="device-feature text-center">
                        <div class="icon mb-4 position-relative d-inline-block">
                            <img src="{{ secure_asset('/') }}eathub/images/icon/app.png" class="img-fluid" alt="">
                        </div>
                        <div class="content">
                            <h4 class="title mb-3">Smartphone</h4>
                            <p class="text-muted">Disponible sur les stores</p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row justify-content-center mt-5 pt-2">
                <div class="col-9">
                    <img src="{{ secure_asset('/') }}eathub/images/mobile-hori.png" class="img-fluid mover-img" alt="">
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Available Feature Start -->

    <!-- START COUNTER -->
    <section class="bg-counter" style="background: url('{{ secure_asset('/') }}eathub/images/black.jpeg') fixed center center no-repeat;">
        <div class="container">
            <div class="row" id="counter">
                <div class="col-lg-4 col-md-6 p-4">
                    <div class="counter-box text-center">
                        <div class="counter-icon">
                            <i class="mdi mdi-heart-outline text-white"></i>
                        </div>
                        <h2 class="counter-value mt-3 text-white" data-count="1853">1</h2>
                        <h5 class="counter-head text-white">Abonnés Facebook</h5>
                    </div><!--end counter box-->
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 p-4">
                    <div class="counter-box text-center">
                        <div class="counter-icon">
                            <i class="mdi mdi-progress-download text-white"></i>
                        </div>
                        <h2 class="counter-value mt-3 text-white" data-count="3467">11</h2>
                        <h5 class="counter-head text-white">Total Téléchargement</h5>
                    </div><!--end counter box-->
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 p-4">
                    <div class="counter-box text-center">
                        <div class="counter-icon">
                            <i class="mdi mdi-star-outline text-white"></i>
                        </div>
                        <h2 class="counter-value mt-3 text-white" data-count="854">15</h2>
                        <h5 class="counter-head text-white">Étoiles sur les stores</h5>
                    </div><!--end counter box-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- END COUTER -->

    <!-- START SCREENSHORT-->
    <section class="section" id="work">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <i class="mdi mdi-image-filter-vintage text-custom h2"></i>
                        <h4 class="title text-uppercase mt-3 mb-5">INTERFACE ORIENTÉE PAR L'UTILISATEUR</h4>
                        <p class="text-muted mx-auto para-desc mb-0">Une interface simple et moderne</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <!-- Swiper -->
            <div class="row justify-content-center mt-4 pt-2">
                <div class="col-12 swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ secure_asset('/') }}eathub/images/4.jpeg" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ secure_asset('/') }}eathub/images/5.jpeg" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ secure_asset('/') }}eathub/images/6.jpeg"class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ secure_asset('/') }}eathub/images/8.jpeg" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ secure_asset('/') }}eathub/images/9.jpeg" class="img-fluid" alt=""></div>
                    </div>
                    <!-- Add Arrows  -->
                    <div class="swiper-button-next">
                        <i class="mdi mdi-chevron-right"></i>
                    </div>
                    <div class="swiper-button-prev ">
                        <i class="mdi mdi-chevron-left"></i>
                    </div>
                </div>

                <div class="col-lg-5 col-md-5 col-12 mb-0 mb-md-5 mb-4 mb-sm-0">
                    <div class="screenshot-cell">
                        <img src="{{ secure_asset('/') }}eathub/images/sc/mo-sc.png" class="img-fluid" alt="">
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- END SCREENSHORT -->

    <!-- Contact Start -->
    <section class="section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <i class="mdi mdi-phone text-custom h2"></i>
                        <h4 class="title text-uppercase mt-3 mb-5">Contactez nous</h4>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row justify-content-center mt-4 pt-2">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-6 float-right">
                            <a href="https://www.facebook.com/EAT-HUB-103696875015487/?ref=bookmarks" target="_blank">
                                <i class="fab fa-facebook float-right" style="font-size:50px;"></i>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="http://xearth.in/" target="_blank">
                                <i class="fas fa-globe" style="font-size: 50px;"></i>
                            </a>
                        </div>
                        <div class="col-md-12 text-center mt-4">
                            <label for="">Cel : +225 0709638171 </label>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Contact End -->

    <!-- Google Map Start -->
    <section class="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.056246671862!2d-3.9473902855294423!3d5.253843196188189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1efaaf094e621%3A0x1ba09bbd44cb6908!2sSIPIM%2C%20Port-Bouet!5e0!3m2!1sfr!2sci!4v1610327890336!5m2!1sfr!2sci" style="border: 0;" allowfullscreen></iframe>
                    </div><!--end map-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Google Map End -->

    @endsection
