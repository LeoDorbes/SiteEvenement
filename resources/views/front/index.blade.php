@extends('front/_template')

@section('content')


    <?php $first = true ?>

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


                                    @foreach($roles as $role)
                                       @if($first)
                                            <b class="is-visible">
                                           @else
                                                    <b>
                                           @endif
                                       {{ $role }}</b>

                                               <?php $first = false ?>
                                        @endforeach
                                </span>
                                </h1>
                            </section>
                            <!-- cd-intro -->
                            <!-- /.slider -->
                            <h2 class="wow fadeInUp animated" data-wow-delay=".6s">
                                Notre concours existe depuis 2008, avec plus de 1200 participants à l'édition de Janvier
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
                <div class="col-md-6 col-sm-12">
                    <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                        <h2> A Propos
                        </h2>

                        <p>
                            Fondé en 2008 par Thomas Terriel et Mélanie Cotine, le concours Web-Challenge a su fédérer
                            depuis lors de nombreux développeurs débutants et étudiants du monde du Web.

                            L'événement consiste d'abord en une phase de sélection/développement en ligne,
                            puis une grande finale directement à Paris, dans le XIVe arrondissement.
                            5 gagnants ressortiront alors avec une invitation dans les plus grands incubateurs français
                            pour continuer leur projet.

                        </p>

                        <p>
                            La dernière édition a su attirer plus de 1200 participants, 234 projets dont 15 ayant été
                            sélectionnés pour participer à la grande finale à Paris. Cette dernière a eu lieu le 23 mars
                            et aura été une formidable expérience pour nos candidats ainsi que nos partenaires.
                        </p>
                    </div>

                </div>
                <div class="col-md-6 col-sm-12" id="col-image-front">
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

                <p class="wow fadeInDown centered-text" data-wow-delay=".5s">

                    La liste de nos partenaires pour l'édition 2017
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms"
                            data-wow-delay="0ms">
                        <div class="img-wrapper">
                            <img src="images/portfolio/item-1.jpg" class="img-responsive" alt="this is a title">

                            <div class="overlay">
                                <div class="buttons">
                                    <a rel="gallery" href="images/portfolio/item-1.jpg">Orange</a>
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
                                Premier opérateur en France, Orange est le leader français des télécommunications.</br>
                                Partenaire depuis 2009.
                            </p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="img-wrapper">
                            <img src="images/portfolio/item-2.png" class="img-responsive" alt="this is a title">

                            <div class="overlay">
                                <div class="buttons">
                                    <a rel="gallery" class="fancybox" href="images/portfolio/item-2.png">Laravel</a>
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
                                Premier framework web aux USA, Laravel offre une solution rapide et élégante à beaucoup de problématiques du web aujourd'hui.</br>
                                Partenaire depuis 2013.
                            </p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="img-wrapper">
                            <img src="images/portfolio/item-3.jpg" class="img-responsive" alt="">

                            <div class="overlay">
                                <div class="buttons">
                                    <a rel="gallery" class="fancybox" href="images/portfolio/item-3.jpg">Github</a>
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
                                Github est là pour rendre notre concours open-source et accessible à tous.</br>
                                Partenaire depuis 2010.
                            </p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="img-wrapper">
                            <img src="images/portfolio/item-4.jpg" class="img-responsive" alt="">

                            <div class="overlay">
                                <div class="buttons">
                                    <a rel="gallery" class="fancybox" href="images/portfolio/item-4.jpg">Photoshop</a>
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
                                Le web-design, ça ne s'invente pas. Photoshop reste le logiciel que nous privilégeons pour réaliser la maquette de votre site.</br>
                                Partenaire depuis 2011.
                            </p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6  col-xs-12">
                    <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms">
                        <div class="img-wrapper">
                            <img src="images/portfolio/item-5.png" class="img-responsive" alt="">

                            <div class="overlay">
                                <div class="buttons">
                                    <a rel="gallery" class="fancybox" href="images/portfolio/item-5.jpg">SourceTree</a>
                                </div>
                            </div>
                        </div>
                        <figcaption>
                            <h4>
                                <a href="#">
                                    Source Tree
                                </a>
                            </h4>

                            <p>
                                SourceTree est l'interface graphique que nous recommandons pour gérer votre répertoire Git ou Mercurial.
                                Concentrez-vous sur l'essentiel : le code.</br>
                                Partenaire depuis 2013.
                            </p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                        <div class="img-wrapper">
                            <img src="images/portfolio/item-6.jpg" class="img-responsive" alt="">

                            <div class="overlay">
                                <div class="buttons">
                                    <a rel="gallery" class="fancybox" href="images/portfolio/item-6.jpg">Docker</a>
                                </div>
                            </div>
                        </div>
                        <figcaption>
                            <h4>
                                <a href="#">
                                    Docker
                                </a>
                            </h4>

                            <p>
                                Docker est LA solution qui vous permettra de
                                garantir la portabilité et la sécurité de vos projets, où que vous deviez les déployer.</br>
                                Partenaire depuis 2015.

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
                <h1 class="title wow fadeInDown" data-wow-delay=".3s">Un concours innovant </h1>

                <p class="wow fadeInDown centered-text" data-wow-delay=".5s">
                    Notre concours vise à stimuler votre créativité
                    tout en vous divertissant de façon originale. <br/>
                    Alors, à vos cerveaux et que les meilleurs gagnent !
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
                            <h4 class="media-heading">Curiosité</h4>

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
                            <h4 class="media-heading">Créativité</h4>

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
                            <h4 class="media-heading">Innovation</h4>

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
                            <h4 class="media-heading">Challenge</h4>

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
                            <h4 class="media-heading">Esprit d'équipe</h4>

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
                            <h4 class="media-heading">Compréhension</h4>

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
                        <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">Alors,
                            convaincu?</h1>
                            <p class="wow fadeInDown centered-text" data-wow-delay=".5s" data-wow-duration="500ms">
                                N'hésitez plus, participez et tentez votre chance. Vous serez peut-être le prochain gagnant!
                            </p>
                            <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown"
                               data-wow-delay=".7s" data-wow-duration="500ms">Contactez-nous</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection





