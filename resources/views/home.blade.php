@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!--*********************************************************************************************************-->
<!--************ CONTENT ************************************************************************************-->
<!--*********************************************************************************************************-->
<main id="ts-content">

    <!--MY SERVICES ***********************************************************************************-->
    <section id="my-services" class="ts-block ts-xs-text-center pb-0">
        <div class="container">
            <div class="ts-title text-center">
                <h2>My Services</h2>
            </div>
            <!--end ts-title-->
            <div class="row">
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="ts-item" data-animate="ts-fadeInUp">
                        <div class="ts-item-content">
                            <div class="ts-item-header">
                                <figure class="icon">
                                    <img src="{{asset('assets/img/icon-brushes.png')}}" alt="Web Design Icon">
                                </figure>
                                <!--end icon-->
                            </div>
                            <!--end ts-item-header-->
                            <div class="ts-item-body">
                                <h4>Web Design</h4>
                                <p class="mb-0">
                                    I specialize in creating visually appealing and user-friendly websites that reflect
                                    your brand's
                                    essence. From concept to execution, I ensure each design resonates with your
                                    audience.
                                </p>
                            </div>
                            <!--end ts-item-body-->
                            <div class="ts-item-footer">
                                <a href="#" data-toggle="modal" data-target="#modal" class="ts-link-arrow-effect">
                                    <span>Read More</span>
                                </a>
                            </div>
                            <!--end ts-item-footer-->
                        </div>
                        <!--end ts-item-content-->
                    </div>
                    <!--end ts-item-->
                </div>
                <!--end col-xl-4-->
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="ts-item" data-animate="ts-fadeInUp" data-delay=".1s">
                        <div class="ts-item-content">
                            <div class="ts-item-header">
                                <figure class="icon">
                                    <img src="{{asset('assets/img/icon-pencil.png')}}" alt="Copywriting Icon">
                                </figure>
                                <!--end icon-->
                            </div>
                            <!--end ts-item-header-->
                            <div class="ts-item-body">
                                <h4>Copywriting</h4>
                                <p class="mb-0">
                                    With a knack for words, I craft compelling copy that engages and converts. Whether
                                    it's website
                                    content, blogs, or marketing materials, I ensure your message stands out.
                                </p>
                            </div>
                            <!--end ts-item-body-->
                            <div class="ts-item-footer">
                                <a href="#" data-toggle="modal" data-target="#modal" class="ts-link-arrow-effect">
                                    <span>Read More</span>
                                </a>
                            </div>
                            <!--end ts-item-footer-->
                        </div>
                        <!--end ts-item-content-->
                    </div>
                    <!--end ts-item-->
                </div>
                <!--end col-xl-4-->
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="ts-item" data-animate="ts-fadeInUp" data-delay=".2s">
                        <div class="ts-item-content">
                            <div class="ts-item-header">
                                <figure class="icon">
                                    <img src="{{asset('assets/img/icon-lcd.png')}}" alt="Coding Icon">
                                </figure>
                                <!--end icon-->
                            </div>
                            <!--end ts-item-header-->
                            <div class="ts-item-body">
                                <h4>Coding</h4>
                                <p class="mb-0">
                                    I develop robust and scalable applications using the latest technologies. From
                                    frontend interfaces
                                    to backend solutions, I ensure your software meets high standards of performance and
                                    usability.
                                </p>
                            </div>
                            <!--end ts-item-body-->
                            <div class="ts-item-footer">
                                <a href="#" data-toggle="modal" data-target="#modal" class="ts-link-arrow-effect">
                                    <span>Read More</span>
                                </a>
                            </div>
                            <!--end ts-item-footer-->
                        </div>
                        <!--end ts-item-content-->
                    </div>
                    <!--end ts-item-->
                </div>
                <!--end col-xl-4-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <!--END MY SERVICES *************************************************************************************-->

    <section id="about-me" class="ts-block pb-4">
        <div class="container">
            <div class="ts-title text-center">
                <h2>About Me</h2>
            </div>
            <!--end ts-title-->
            <div class="row ts-align__vertical">
                <div class="col-md-6">
                    <img src="{{asset('assets/img/pic.jpg')}}" alt="" class="mw-100 mb-5">
                </div>
                <div class="col-md-6">
                    <h4 class="ts-bubble-border">Hi There</h4>
                    <p>
                        Hello, I'm Fawad Khan from Buner, PK. I am a dedicated PHP/Laravel Developer and Frontend
                        Specialist
                        with a passion for building dynamic and user-friendly web solutions. With a Bachelor’s degree in
                        Computer Science from the University of Buner and extensive hands-on experience in HTML, CSS,
                        JavaScript, and Bootstrap, I excel in creating seamless web experiences. My goal is to leverage
                        my
                        skills to contribute to innovative projects and collaborate with forward-thinking teams.
                    </p>
                    <dl class="ts-column-count-2">
                        <dt>Name:</dt>
                        <dd>Fawad Khan</dd>
                        <dt>Phone:</dt>
                        <dd>+92 3197376043</dd>
                        <dt>Email:</dt>
                        <dd>fawadgul311@gmail.com</dd>
                        <dt>Twitter:</dt>
                        <dd>freelancer9</dd>
                    </dl>
                    <hr class="ts-hr-light mb-5">
                    <a href="#contact" class="ts-btn-effect mr-2">
                        <span class="ts-visible btn btn-primary ts-btn-arrow">Contact Me</span>
                        <span class="ts-hidden btn btn-primary ts-btn-arrow" data-bg-color="#d44729">Contact Me</span>
                    </a>
                    <!--<a href="#contact" class="btn btn-primary ts-btn-arrow mr-2">Contact Me</a>-->
                    <!--<a href="#contact" class="btn btn-outline-light ts-btn-border-light">-->
                    <!--<i class="fa fa-download small mr-2"></i>-->
                    <!--Download CV-->
                    <!--</a>-->
                    <a href="resume/fawadkhan.pdf" class="ts-btn-effect mr-2">
                        <span class="ts-visible btn btn-outline-light">
                            <i class="fa fa-download small mr-2"></i>
                            Download CV
                        </span>
                        <span class="ts-hidden btn btn-light bg-white">
                            <i class="fa fa-download small mr-2"></i>
                            Download CV
                        </span>
                    </a>

                    <a href="https://github.com/fawadkhan781" class="ts-btn-effect mr-2">
                        <span class="ts-visible btn btn-outline-light">
                            <i class="fab fa-github small mr-2"></i>
                            View GitHub
                        </span>
                        <span class="ts-hidden btn btn-light bg-white">
                            <i class="fab fa-github small mr-2"></i>
                            View GitHub
                        </span>
                    </a>
                </div>
            </div>
            <!--end row-->
        </div>
    </section>

    <section class="ts-block">
        <div class="container">
            <div class="text-center px-5 pt-5 position-relative">
                <h3 class="my-3">
                    Let’s Work Together On Your Next Project!
                </h3>
                <a href="#contact" class="btn btn-primary mr-2 ts-push-down__50 ts-has-talk-arrow">Hire Me Now!</a>
                <div class="ts-background ts-opacity__20" data-bg-image="{{asset('assets/img/bg-keyboard.jpg')}}"></div>
            </div>
        </div>
    </section>

    <section id="my-skills" class="ts-block pb-5">
        <div class="container">
            <div class="ts-title text-center">
                <h2>My Skills</h2>
            </div>
            <!--end ts-title-->
            <h4>Every Day is a New Challenge</h4>
            <div class="row">
                <div class="col-md-6">
                    <p>
                        Each day presents new challenges that drive my passion for web development. I thrive on solving
                        complex
                        problems with innovative solutions, ensuring every project I undertake is a testament to
                        precision and
                        creativity.
                    </p>
                    <p>
                        With a meticulous approach, I blend technical expertise in HTML5, CSS, JavaScript, Bootstrap,
                        and
                        Laravel with a keen eye for design. This synergy allows me to deliver seamless user experiences
                        and
                        robust solutions that exceed expectations.
                    </p>
                    <a href="https://www.linkedin.com/in/fawad-khan-458527174" class="btn btn-outline-light mb-5">Hire
                        Me</a>
                </div>
                <!--end col-md-6-->
                <div class="col-md-6">
                    <!-- Skills Progress Bars (Include your specific skills here) -->
                    <div class="progress" data-progress-width="60%">
                        <h5 class="ts-progress-title">Laravel</h5>
                        <figure class="ts-progress-value"></figure>
                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100" style="width: 100%;">
                        </div>
                    </div>
                    <!--end progress-->
                    <div class="progress" data-progress-width="90%">
                        <h5 class="ts-progress-title">HTML5</h5>
                        <figure class="ts-progress-value"></figure>
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                            aria-valuemax="100" style="width: 90%;">
                        </div>
                    </div>
                    <!--end progress-->
                    <div class="progress" data-progress-width="90%">
                        <h5 class="ts-progress-title">CSS</h5>
                        <figure class="ts-progress-value"></figure>
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                            aria-valuemax="100" style="width: 90%;">
                        </div>
                    </div>
                    <!--end progress-->
                    <div class="progress" data-progress-width="50%">
                        <h5 class="ts-progress-title">JavaScript</h5>
                        <figure class="ts-progress-value"></figure>
                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                            aria-valuemax="100" style="width: 85%;">
                        </div>
                    </div>
                    <!--end progress-->
                    <div class="progress" data-progress-width="80%">
                        <h5 class="ts-progress-title">Bootstrap</h5>
                        <figure class="ts-progress-value"></figure>
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                            aria-valuemax="100" style="width: 80%;">
                        </div>
                    </div>
                    <!--end progress-->
                </div>
                <!--end col-md-6-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <section class="ts-block pb-5" id="portfolio">
        <div class="container">
            <div class="ts-title">
                <h2>Portfolio</h2>
            </div>
            <!--end ts-title-->
            <div class="card-columns ts-gallery ts-column-count-4">

                <a href="{{asset('assets/img/Home-TechBackers-IT-Services.png')}}"
                    class="card ts-gallery__item popup-image" data-animate="ts-fadeInUp">
                    <div class="ts-gallery__image">
                        <div class="ts-gallery__item-description">
                            <h6 class="ts-opacity__50">Webdesign</h6>
                            <h4>TechSource Managed Services</h4>
                        </div>
                        <img src="{{asset('assets/img/Home-TechBackers-IT-Services.png')}}" class="card-img" alt="">
                        <!--end ts-gallery__item-description-->
                    </div>
                    <!--end ts-gallery__image-->
                </a>


                <!--end card ts-gallery__item-->
                <a href="{{asset('assets/img/homepage_pages-to-jpg-0001.jpg')}}"
                    class="card ts-gallery__item popup-image" data-animate="ts-fadeInUp">
                    <div class="ts-gallery__image">
                        <img src="{{asset('assets/img/homepage_pages-to-jpg-0001.jpg')}}" class="card-img" alt="">
                        <div class="ts-gallery__item-description">
                            <h6 class="ts-opacity__50">Coding</h6>
                            <h4>reactjt-shop</h4>
                        </div>
                        <!--end ts-gallery__item-description-->
                    </div>
                    <!--end ts-gallery__image-->
                </a>
                <!--end card ts-gallery__item-->
                <a href="{{asset('assets/img/1706809483844.jpg')}}" class="card ts-gallery__item popup-image"
                    data-animate="ts-fadeInUp">
                    <div class="ts-gallery__image">
                        <img src="{{asset('assets/img/1706809483844.jpg')}}" class="card-img" alt="">
                        <div class="ts-gallery__item-description">
                            <h6 class="ts-opacity__50">Webdesign</h6>
                            <h4>Autoline.pk</h4>
                        </div>
                        <!--end ts-gallery__item-description-->
                    </div>
                    <!--end ts-gallery__image-->
                </a>
                <!--end card ts-gallery__item-->
                <a href="{{asset('assets/img/revivee.jpg')}}" class="card ts-gallery__item popup-image"
                    data-animate="ts-fadeInUp">
                    <div class="ts-gallery__image">
                        <img src="{{asset('assets/img/revivee.jpg')}}" class="card-img" alt="">
                        <div class="ts-gallery__item-description">
                            <h6 class="ts-opacity__50">PHP laravel</h6>
                            <h4>Revivee</h4>
                        </div>
                        <!--end ts-gallery__item-description-->
                    </div>
                    <!--end ts-gallery__image-->
                </a>
                <!--end card ts-gallery__item-->
                <a href="{{asset('assets/img/revivee1.jpg')}}" class="card ts-gallery__item popup-image"
                    data-animate="ts-fadeInUp">
                    <div class="ts-gallery__image">
                        <img src="{{asset('assets/img/revivee1.jpg')}}" class="card-img" alt="">
                        <div class="ts-gallery__item-description">
                            <h6 class="ts-opacity__50">Product Design</h6>
                            <h4>Revivee</h4>
                        </div>
                        <!--end ts-gallery__item-description-->
                    </div>
                    <!--end ts-gallery__image-->

                    <!--end card ts-gallery__item-->
            </div>
            <!--end ts-gallery-->
        </div>
        <!--end container-->
    </section>
    <!--end portfolio-->

    <section class="ts-block" data-bg-image="{{asset('assets/img/bg-man-sitting.jpg')}}">
        <div class="container ts-promo-numbers">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="ts-promo-number text-center">
                        <figure class="odometer" data-odometer-final="">0</figure>
                        <h5>Clients</h5>
                    </div>
                    <!--end ts-promo-number-->
                </div>
                <!--end col-md-3-->
                <div class="col-sm-6 col-md-3">
                    <div class="ts-promo-number text-center">
                        <figure class="odometer" data-odometer-final="5">0</figure>
                        <h5>Projects</h5>
                    </div>
                    <!--end ts-promo-number-->
                </div>
                <!--end col-md-3-->
                <div class="col-sm-6 col-md-3">
                    <div class="ts-promo-number text-center">
                        <figure class="odometer" data-odometer-final="2">0</figure>
                        <h5>Awards</h5>
                    </div>
                    <!--end ts-promo-number-->
                </div>
                <!--end col-md-3-->
                <div class="col-sm-6 col-md-3">
                    <div class="ts-promo-number text-center">
                        <figure class="odometer" data-odometer-final="1">0</figure>
                        <h5>Years Experience</h5>
                    </div>
                    <!--end ts-promo-number-->
                </div>
                <!--end col-md-3-->
            </div>
        </div>
    </section>
    <!--end ts-block-->

    </div>
</main>
<!--end #content-->



</div>
<!--end page-->

<!-- Modal -->
<div class="modal fade text-dark" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content border-0 rounded-0">
            <div class="modal-header bg-light px-5 pt-0 pb-5">
                <div class="ts-title mb-0">
                    <figure class="ts-circle__md bg-dark rounded-0">
                        <img src="{{asset('assets/img/icon-brushes.png')}}" alt="">
                    </figure>
                    <h4 class="mb-0">Web Design</h4>
                </div>

                <button type="button" class="close position-absolute ts-top__0 ts-right__0 m-2" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body p-5">
                <h5 class="mb-4">Latest Works</h5>
                <div class="owl-carousel" data-owl-dots="1">
                    <div class="slide">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{asset('assets/img/img-work-detail-01.jpg')}}" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h4 class="mb-3">Creative Lights</h4>
                                    <p>
                                        In id nulla magna. Nullam posuere fermentum mattis. Nunc id dui at sapien
                                        faucibus
                                        fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est
                                        ultricies.
                                    </p>
                                    <a href="#" class="mb-4 text-dark d-block">
                                        <i class="fa fa-globe ts-opacity__50 mr-2"></i>
                                        www.example.com
                                    </a>
                                    <hr>
                                    <h6>Services Included</h6>
                                    <ul class="list-unstyled ts-opacity__50">
                                        <li>Design</li>
                                        <li>Coding</li>
                                        <li>SEO Optimization</li>
                                        <li>Hosting</li>
                                    </ul>
                                </div>
                                <!--end col-md-8-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-fluid-->
                    </div>
                    <!--end slide-->
                    <div class="slide">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{asset('assets/img/img-work-detail-02.jpg')}}" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h4 class="mb-3">Wood Ceiling</h4>
                                    <p>
                                        Phasellus volutpat velit nec purus elementum feugiat. Nunc feugiat fringilla
                                        turpis.
                                        Nam sed facilisis sem. Vestibulum vitae orci nec purus fringilla condimentum.
                                        Pellentesque id augue rhoncus, finibus sapien ut, commodo eros. Maecenas in nibh
                                        augue. Nunc rutrum blandit massa eu aliquet. Nulla facilisi. Aenean luctus ipsum
                                        in orci sagittis auctor vel sit amet ex
                                    </p>
                                    <a href="#" class="mb-4 text-dark d-block">
                                        <i class="fa fa-globe ts-opacity__50 mr-2"></i>
                                        www.example.com
                                    </a>
                                    <hr>
                                    <h6>Services Included</h6>
                                    <ul class="list-unstyled ts-opacity__50">
                                        <li>Design</li>
                                        <li>Coding</li>
                                        <li>SEO Optimization</li>
                                        <li>Hosting</li>
                                    </ul>
                                </div>
                                <!--end col-md-8-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-fluid-->
                    </div>
                    <!--end slide-->
                </div>
                <!--end owl-carousel-->
            </div>
            <!--end modal-body-->
        </div>
        <!--end modal-content-->
    </div>
    <!--end modal-dialog-->
</div>
<!--end modal-->

<!--end modal-->

@endsection