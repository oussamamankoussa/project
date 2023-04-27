
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->

  <!-- Template Main CSS File -->
  <!-- <link href="assets6/css/style.css" rel="stylesheet"> -->

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="./bootstrap.min.css.css"   rel="stylesheet"  />
        <!-- package -->
        <link href="assets3/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets3/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets3/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets3/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets3/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets3/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}" /> 
        <!-- Template Main CSS File -->
        <link href="assets3/css/style.css" rel="stylesheet">
        <!-- Styles -->
       
  <link href="assets4/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets4/css/style.css" rel="stylesheet">
        <style>
            #header{
                display:flex; 
                 
            }
            .article{
                display:flex;
            }
            .nav{
                margin:0% 0% 0% 70%;
              
            }
            
        </style>
    </head>

     <body>
        
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="/">eNno</a></h1>
            <!-- Uncomment below if you prefer to use an image logo-->
            <a href="/" class="logo " style="margin-right: 100px;"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
                
                    @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right mx-2">
                            @auth
                                <a href="{{ url('/pageDashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mx-2" >Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mx-2 d-inline">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mx-2 d-inline">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                    </i>
            </nav> 
            <!-- .navbar-->

            </div>
        </header>

        <section id="hero" class="d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1>Elegant and creative solutions</h1>
                        <h2>We are team of talented designers making websites with Bootstrap</h2>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img">
                       <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Counts Section ======= -->
        @if(isset($N_user) && count($N_user) > 0)
        <section id="counts" class="counts">
          <div class="container">

            <div class="row counters">

              <div class="col-lg-4 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="{{$N_user[0]->user_count}}" data-purecounter-duration="1" class="purecounter"></span>
                <p>Clients</p>
              </div>

              <div class="col-lg-4 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="{{$N_service[0]->service_count}}" data-purecounter-duration="1" class="purecounter"></span>
                <p>Services</p>
              </div>

              <div class="col-lg-4 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="{{$N_carte[0]->carte_count}}" data-purecounter-duration="1" class="purecounter"></span>
                <p>Cartes</p>
              </div>

            </div>

          </div>
        </section> 
        @endif
        <!-- End Counts Section -->
        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
          <div class="container">

            <div class="section-title">
              <span>Services</span>
              <h2>Services</h2>
              <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
            </div>

            <div class="row">
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="icon-box">
                  <div class="icon"><i class="bx bxl-dribbble"></i></div>
                  <h4>Lorem Ipsum</h4>
                  <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-file"></i></div>
                  <h4>Sed ut perspiciatis</h4>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-tachometer"></i></div>
                  <h4>Magni Dolores</h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <h4>Nemo Enim</h4>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-slideshow"></i></div>
                  <h4>Dele cardo</a</h4>
                  <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-arch"></i></div>
                  <h4>Divera don</h4>
                  <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                </div>
              </div>

            </div>

          </div>
        </section>
        <!-- End Services Section -->    
        <!-- ======= portfolio======= -->
        <section id="portfolio" class="portfolio">
          <div class="container">
              <div class="section-title">
                <span>Portfolio</span>
                <h2>Portfolio</h2>
                <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
              </div>
              @if(isset($tableVille) && count($tableVille) >0 )
                <form action="{{route('profession')}}" method="post"  style="width: 40%;margin-left:30%" >
                  @csrf
                        <div class="input-group mb-3">
                          <div class="form-floating mb-3">
                              <select class="form-select" name="ville" id="ville" >
                                <option value="tout">tout</option>
                                @foreach($tableVille as $e)
                                <option value="{{$e->ville}}">{{$e->ville}}</option>
                                @endforeach
                              </select>
                              <label>recherche par ville:</label>
                          </div> 
                          <span class="input-group-text" style="height: 58px;" id="basic-addon2">
                            <button type="submit" class="btn btn-primary" name="submit">recherche</button>
                          </span>
                        </div>
                      
                </form>
              @endif
              @if(!isset($_POST['submit']))
              @if(empty($_POST['ville']))
                <h3>list de profession par tout les ville </h3>
              <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                  <ul class="result" id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    
                        @foreach($tableProfession as $e)
                    <li data-filter=".filter-{{$e->profession}}">{{$e->profession}}</li>
                        @endforeach
                    
                    
                  </ul>
                </div>
              </div>

              <div class="row portfolio-container">
                @foreach($dataUser as $e)
                  @foreach($dataService as $serv)
                      @if($e->id == $serv->user_id)
        
                        <div class="col-lg-4 col-md-6 portfolio-item filter-{{$e->profession}}">
                          <img src="./imagesService/{{$serv->file}}" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <h4>{{$serv->titre}}</h4>
                            <p>{{$serv->discription}}</p>
                            <a href="./imagesService/{{$serv->file}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="{{route('presentService',['id'=>$serv->id,'nameUser'=>$e->name ,'category'=>$e->profession ])}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                          </div>
                        </div>

                      @endif
                  @endforeach
                @endforeach
              
              </div>
              @endif
              @endif

              @if(isset($_POST['submit']))  
                @if(!empty($_POST['ville']))

                  @if($_POST['ville'] == 'tout')
                    <h3>list de profession par tout les ville</h3>
                  @else   
                    <h3>list de profession par ville :{{$_POST['ville']}}</h3>
                  @endif   
              <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                  <ul class="result" id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    
                        @foreach($tableProfession as $e)
                    <li data-filter=".filter-{{$e->profession}}">{{$e->profession}}</li>
                        @endforeach
                    
                    
                  </ul>
                </div>
              </div>

              <div class="row portfolio-container">
                @foreach($dataUser as $e)
                  @foreach($dataService as $serv)
                      @if($e->id == $serv->user_id)
        
                        <div class="col-lg-4 col-md-6 portfolio-item filter-{{$e->profession}}">
                          <img src="./imagesService/{{$serv->file}}" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <h4>{{$serv->titre}}</h4>
                            <p>{{$serv->discription}}</p>
                            <a href="./imagesService/{{$serv->file}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="{{route('presentService',['id'=>$serv->id,'nameUser'=>$e->name ,'category'=>$e->profession ])}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                          </div>
                        </div>

                      @endif
                  @endforeach
                @endforeach
              
              </div>
              @endif
              @endif
          </div>
        </section>
        <!-- End portfolio -->   
        <!-- ======= contacte======= -->
        <section id="contact" class="contact">
          <div class="container">

            <div class="section-title">
              <span>Contact</span>
              <h2>Contact</h2>
              <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
          </div>
          
            <div class="row">
            @if(isset($dataAdmin) && count($dataAdmin)>0)
              <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                  <div class="address">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Location:</h4>
                    <p>{{$dataAdmin[0]->adresse}}</p>
                  </div>

                  <div class="email">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>{{$dataAdmin[0]->email}}</p>
                  </div>

                  <div class="phone">
                    <i class="bi bi-phone"></i>
                    <h4>Call:</h4>
                    <p>{{$dataAdmin[0]->tel}}</p>
                  </div>

                </div>

              </div>
            @endif
              <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="name">Your Name</label>
                      <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="form-group col-md-6 mt-3 mt-md-0">
                      <label for="name">Your Email</label>
                      <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <label for="name">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <label for="name">Message</label>
                    <textarea class="form-control" name="message" rows="10" required></textarea>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
              </div>

            </div>

          </div>
        </section>
        <!-- End contacte --> 
    <!-- ======= Footer ======= -->

        
    

    
   
  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span>FlexStart</span>
            </a>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


        
        <!-- Vendor JS Files -->
        <script src="assets3/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets3/vendor/aos/aos.js"></script>
        <script src="assets3/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets3/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets3/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets3/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets3/vendor/php-email-form/validate.js"></script>

        
        
  <!-- Template Main JS File -->
  <script src="assets6/js/main.js"></script>
  <script src="./jquery-3.6.0.min.js"></script>
  <script src="./welcome.js"></script>

 
 
    </body>
</html>
