  <!--NAVIGATION ******************************************************************************************-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white">
      <div class="container">
          <a class="navbar-brand ts-push-down__50 position-absolute ts-bottom__0 bg-white pb-0 ts-z-index__1 ts-scroll"
              href="#page-top">
              <img src="{{asset('assets/img/logo.png')}}" alt="">
          </a>
          <!--end navbar-brand-->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
              aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <!--end navbar-toggler-->
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav d-block d-lg-flex ml-auto text-right">
                  <a class="nav-item nav-link active ts-scroll" href="#page-top">Home <span
                          class="sr-only">(current)</span></a>
                  <a class="nav-item nav-link ts-scroll" href="#my-services">Services</a>
                  <a class="nav-item nav-link ts-scroll" href="#about-me">About Me</a>
                  <a class="nav-item nav-link ts-scroll" href="#my-skills">Skills</a>
                  <a class="nav-item nav-link ts-scroll" href="#portfolio">Portfolio</a>
                  <a class="nav-item nav-link ts-scroll mr-2" href="#contact">Contact</a>
              </div>
              <!--end navbar-nav-->
          </div>
          <!--end collapse-->
      </div>
      <!--end container-->
  </nav>
  <!--end navbar-->
  <!--*********************************************************************************************************-->
  <!--************ HERO ***************************************************************************************-->
  <!--*********************************************************************************************************-->
  <div id="ts-hero" class="ts-animate-hero-items">

      <!--HERO CONTENT ****************************************************************************************-->
      <div class="container position-relative h-100 ts-align__vertical">
          <div class="row w-100">
              <div class="col-md-8">
                  <!--SOCIAL ICONS-->
                  <figure class="ts-social-icons mb-4">
                      <a href="#" class="mr-3">
                          <i class="fab fa-facebook"></i>
                      </a>
                      <a href="#" class="mr-3">
                          <i class="fab fa-twitter"></i>
                      </a>
                      <a href="#" class="mr-3">
                          <i class="fab fa-pinterest"></i>
                      </a>
                      <a href="#" class="mr-3">
                          <i class="fab fa-slack"></i>
                      </a>
                      <a href="#" class="mr-3">
                          <i class="fab fa-instagram"></i>
                      </a>
                  </figure>

                  <!--TITLE -->
                  <h1>I am Fawad Khan</h1>
                  <h1 class="ts-bubble-border">
                      <span class="ts-title-rotate">
                          <span class="active">Web Developer</span>
                          <span>PHP Laravel Developer</span>
                          <span>Frontend developer</span>
                          <span>Creative Person</span>
                      </span>
                  </h1>

              </div>
              <!--end col-md-8-->
          </div>
          <!--end row-->
          <a href="#my-services" class="ts-btn-effect position-absolute ts-bottom__0 ts-left__0 ts-scroll ml-3 mb-3">
              <span class="ts-visible ts-circle__sm rounded-0 ts-bg-primary">
                  <i class="text-white fa fa-arrow-down"></i>
              </span>
              <span class="ts-hidden ts-circle__sm rounded-0">
                  <i class="fa fa-arrow-down text-white"></i>
              </span>
          </a>

      </div>
      <!--end container-->
      <!--END HERO CONTENT ************************************************************************************-->

      <!--HERO BACKGROUND *************************************************************************************-->
      <div class="ts-background ">
          <div class="ts-background-image" data-bg-image="{{asset('assets/img/pexels-goumbik-574069.jpg')}}"></div>
      </div>
      <!--END HERO BACKGROUND *********************************************************************************-->

      <!-- Modal -->
      <div class="modal fade text-dark" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content border-0 rounded-0" height="50%">
                  <div class="modal-header bg-light px-3 pt-0 pb-2">
                      <div class="ts-title mb-0">
                          <figure class="ts-circle__md bg-dark rounded-0">
                              <img src="{{asset('assets/img/icon-brushes.png')}}" alt="">
                          </figure>
                          <h4 class="mb-0">Web Design</h4>
                      </div>

                      <button type="button" class="close position-absolute ts-top__0 ts-right__0 m-2"
                          data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true" class="text-white">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body p-5">
                      <h5 class="mb-4">Latest Works</h5>
                      <div class="owl-carousel" data-owl-dots="1">
                          <div class="slide">
                              <div class="container">
                                  <div class="row">
                                      <div class="col-md-4">
                                          <img src="{{asset('assets/img/Home-TechBackers-IT-Services.png')}}" alt="">
                                      </div>
                                      <div class="col-md-8">
                                          <h4 class="mb-3">web design</h4>
                                          <p>
                                              "Excited to be interning at TechSource Managed Services, where I'm
                                              contributing to cutting-edge IT solutions. From network security to cloud
                                              management, I'm gaining hands-on experience in delivering proactive
                                              support and maintenance to empower businesses. #Internship #AtlantisTech
                                              #IT"
                                          </p>
                                          <a href="https://techbackersit.com/index.php" class="mb-4 text-dark d-block">
                                              <i class="fa fa-globe ts-opacity__50 mr-2"></i>
                                              https://techbackersit.com/home.php
                                          </a>
                                          <hr>
                                          <h6>Services Included</h6>
                                          <ul class="list-unstyled ts-opacity__50">
                                              <li>Design</li>
                                              <li>Coding</li>
                                              <li>SEO Optimization</li>
                                              <li>Hosting</li>
                                              <li>Email Marketing</li>
                                              <li>bootstrap5</li>
                                              <li>jQuery</li>
                                              <li>PHP</li>
                                              <li>Git</li>
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
                                          <img src="{{asset('assets/img/1706809483844.jpg')}}" alt="">
                                      </div>
                                      <div class="col-md-8">
                                          <h4 class="mb-3">Autoline.pk</h4>
                                          <p>
                                              I created my final year project Autoline.pk, an online platform
                                              facilitating the buying and selling of automotive products. Implemented
                                              user-friendly features, secure payment processing, and an intuitive
                                              product. Technologies Used: custom php, HTML/CSS, pure JavaScript,
                                              bootstrap, Ajax, PhpMyAdmin sql database. [my project marks (86 A grade)]

                                              Successfully acquired programming skills through my brother muhammad zahid
                                              (full stack web developer) & online courses from Code with Harry, a
                                              renowned programming tutorial channel on YouTube. i learn programming
                                              languages from YouTube big achievements for me such as HTML,
                                              CSS,BOOTSTRAP,JAVASCRIPT,BASIC PHP,BASIC REACT & NODEJS.
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

                          <div class="slide">
                              <div class="container-fluid">
                                  <div class="row">
                                      <div class="col-md-4">
                                          <img src="{{asset('assets/img/homepage_pages-to-jpg-0001.jpg')}}" alt="">
                                      </div>
                                      <div class="col-md-4">
                                          <img src="{{asset('assets/img/signlepage_page-0001.jpg')}}" alt="">
                                      </div>
                                      <div class="col-md-8">
                                          <h4 class="mb-3 my-3 d-flex justify-content-center">React-shop</h4>
                                          <p>
                                              I have created a frontend simple demo ecommerce site using ReactJS. on the
                                              home page, i have display some sample products. when we click on each
                                              product then it goes to a single page with more details about that
                                              product.

                                              Keys:
                                              1 Dummy API: I have used fakestoreapi.com to get sample data for the shop
                                              on home page and single page.
                                              2 Functional Components: I built the site using functional components in
                                              React.
                                              3 State Management: I have used hooks like useState and useEffect to
                                              manage the state in my functional components.
                                              4 Routing: I used react-router-dom to handle navigation btw pages of the
                                              site.

                                              i have also push it to my github, so you can also download it from there.
                                              https://github.com/fawadkhan781/reactjt-shop.git
                                              On GitHub: the project is uploaded without the node_modules folder.

                                              On Google Drive: The full project is available including the node_modules
                                              folder
                                              i have already share link with you,
                                              https://drive.google.com/drive/folders/1OOjh2PqLTORt9FTiM7ky3WzwXXZqxaJ3?usp=sharing
                                          </p>
                                          <a href="https://github.com/fawadkhan781/reactjt-shop.git"
                                              class="mb-4 text-dark d-block">
                                              <i class="fa fa-globe ts-opacity__50 mr-2"></i>
                                              https://github.com/fawadkhan781/reactjt-shop.git
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

  </div>
  <!--end #hero-->