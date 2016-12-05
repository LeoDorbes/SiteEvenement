@extends('front/_template')

@section('content')




                <!--
    ==================================================
    Slider Section Start
    ================================================== -->
        <section id="hero-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="block wow fadeInUp" data-wow-delay=".3s">
                            @if( count( \App\User::all() ) < 1 )
                                <a href="{{ route('first_account') }}">
                                    <button class="btn btn-lg btn-primary btn-block">
                                        Créer le premier user
                                    </button>

                                </a>
                                @endif

                            <!-- Slider -->
                            <section class="cd-intro">
                                <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s">
                                    <span>Concours Web-Challenge, vous êtes un :</span><br>
                                    <span class="cd-words-wrapper">
                                    <b class="is-visible">Intégrateur</b>
                                    <b>Développeur</b>
                                    <b>Graphiste</b>
                                        <b>Chef de projet Web</b>
                                </span>
                                </h1>
                            </section>
                            <!-- cd-intro -->
                            <!-- /.slider -->
                            <h2 class="wow fadeInUp animated" data-wow-delay=".6s">
                                Notre concours existe depuis 2008, avec plus de 1200 partipants à l'édition de Janvier
                                2016,
                                <br>
                                il a, depuis sa création, su retenir l'attention de nombreuses entreprises partenaires.
                            </h2>
                            <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green"
                               data-wow-delay=".9s" href="#works" data-section="#works">Voir les partenaires</a>

                        </div>
                    </div>
                </div>
            </div>
        </section><!--/#main-slider-->
        <!--
        ==================================================
        Slider Section Start
        ================================================== -->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                            <h2> A Propos
                            </h2>

                            <p>
                                Fondé en 2008 par Thomas Terriel et Mélanie Cotine, le concours Web-Challenge a su federer
                                depuis lors de nombreux developpeurs débutants et étudiants du monde du Web.

                                L'evenement consiste d'abbord en une phase de selection/developpement en ligne,
                                puis une grande finale directement à Paris, dans le 14ème arrondissement.
                                5 gagnants ressortent alors avec une invitation dans les plus grands incubateurs Francais
                                pour continuer leur projet.

                            </p>

                            <p>
                                La dernière edition à su attirer plus de 1200 participants, 234 projets dont 15 ayant étés selectionnés
                                pour participer à la grande finale à Paris. Cette dernière a eu lieu le 23 Mars et aura été une formidable
                                experience pour nos candidats ainsi que nos partenaires.
                            </p>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-6" id="col-image-front">
                        <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                           <!-- <img src="images/about/about.jpg" alt="">-->
                             <img src="images/ces-computer.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- /#about -->
        <!--
        ==================================================
        Portfolio Section Start
        ================================================== -->
        <section id="works" class="works">
            <div class="container">
                <div class="section-heading">
                    <h1 class="title wow fadeInDown" data-wow-delay=".3s">Nos partenaires</h1>

                    <p class="wow fadeInDown" data-wow-delay=".5s">

                        La liste de nos partenaires pour l'édition 2017
                    </p>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms"
                                data-wow-delay="0ms">
                            <div class="img-wrapper">
                                <img src="images/portfolio/item-1.jpg" class="img-responsive" alt="this is a title">

                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" href="images/portfolio/item-1.jpg">Orange</a>
                                        <a target="_blank" href="single-portfolio.html"> Detail </a>
                                    </div>
                                </div>
                            </div>
                            <figcaption>
                                <h4>
                                    <a href="#">
                                        Orange
                                    </a>
                                </h4>

                                <p>
                                    Partenaire depuis 2014
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="img-wrapper">
                                <img src="images/laravel-logo.png" class="img-responsive" alt="this is a title">

                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" class="fancybox" href="images/portfolio/item-2.jpg">Laravel</a>
                                        <a target="_blank" href="single-portfolio.html">Details</a>
                                    </div>
                                </div>
                            </div>
                            <figcaption>
                                <h4>
                                    <a href="#">
                                        Laravel
                                    </a>
                                </h4>

                                <p>
                                   Framework Utiliser durant nos épreuves depuis 2010
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="img-wrapper">
                                <img src="images/github.jpeg" class="img-responsive" alt="">

                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" class="fancybox" href="images/portfolio/item-3.jpg">Github</a>
                                        <a target="_blank" href="single-portfolio.html">Details</a>
                                    </div>
                                </div>
                            </div>
                            <figcaption>
                                <h4>
                                    <a href="#">
                                        Github
                                    </a>
                                </h4>

                                <p>
                                    Github permet à notre concourt de s'impliqué et dans l'univers open source. Tous nos projets sont
                                    posté sur Github
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="600ms">
                            <div class="img-wrapper">
                                <img src="images/photoshop.jpg" class="img-responsive" alt="">

                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" class="fancybox" href="images/portfolio/item-4.jpg">Demo</a>
                                        <a target="_blank" href="single-portfolio.html">Details</a>
                                    </div>
                                </div>
                            </div>
                            <figcaption>
                                <h4>
                                    <a href="#">
                                       Photoshop
                                    </a>
                                </h4>

                                <p>
                                    Nos concourt de design utilisent photoshop depuis 2013. Photoshop dispose d'un stand
                                    et organise des jeux concourts.
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms">
                            <div class="img-wrapper">
                                <img src="images/portfolio/item-5.jpg" class="img-responsive" alt="">

                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" class="fancybox" href="images/portfolio/item-5.jpg">Demo</a>
                                        <a target="_blank" href="single-portfolio.html">Details</a>
                                    </div>
                                </div>
                            </div>
                            <figcaption>
                                <h4>
                                    <a href="#">
                                        Shoping Bag Concept
                                    </a>
                                </h4>

                                <p>
                                    Lorem ipsum dolor.
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                            <div class="img-wrapper">
                                <img src="images/portfolio/item-6.jpg" class="img-responsive" alt="">

                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" class="fancybox" href="images/portfolio/item-6.jpg">Demo</a>
                                        <a target="_blank" href="single-portfolio.html">Details</a>
                                    </div>
                                </div>
                            </div>
                            <figcaption>
                                <h4>
                                    <a href="#">
                                        Caramel Bottle
                                    </a>
                                </h4>

                                <p>
                                    Lorem ipsum dolor.
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section> <!-- #works -->
        <!--
        ==================================================
        Portfolio Section Start
        ================================================== -->
        <section id="feature">
            <div class="container">
                <div class="section-heading">
                    <h1 class="title wow fadeInDown" data-wow-delay=".3s">Offer From Me</h1>

                    <p class="wow fadeInDown" data-wow-delay=".5s">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed,<br> quasi dolores numquam dolor
                        vero
                        ex, tempora commodi repellendus quod laborum.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-xs-12">
                        <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="media-left">
                                <div class="icon">
                                    <i class="ion-ios-flask-outline"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Media heading</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-12">
                        <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
                            <div class="media-left">
                                <div class="icon">
                                    <i class="ion-ios-lightbulb-outline"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Well documented.</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-12">
                        <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="900ms">
                            <div class="media-left">
                                <div class="icon">
                                    <i class="ion-ios-lightbulb-outline"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Well documented.</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-12">
                        <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                            <div class="media-left">
                                <div class="icon">
                                    <i class="ion-ios-americanfootball-outline"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Free updates</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-12">
                        <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1500ms">
                            <div class="media-left">
                                <div class="icon">
                                    <i class="ion-ios-keypad-outline"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Solid Support</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-12">
                        <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1800ms">
                            <div class="media-left">
                                <div class="icon">
                                    <i class="ion-ios-barcode-outline"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Simple Installation</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- /#feature -->

        <!--
        ==================================================
        Call To Action Section Start
        ================================================== -->
        <section id="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">SO WHAT YOU
                                THINK ?</h1>
                                <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Lorem ipsum
                                    dolor
                                    sit amet, consectetur adipisicing elit. Nobis,<br>possimus commodi, fugiat magnam
                                    temporibus vero magni recusandae? Dolore, maxime praesentium.</p>
                                <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown"
                                   data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
@endsection





