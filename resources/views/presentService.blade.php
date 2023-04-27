<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - eNno Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets3/img/favicon.png" rel="icon">
  <link href="assets3/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets3/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets3/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets3/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets3/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets3/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets3/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eNno
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

 

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio Details</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="./imagesService/{{$dataService->file}}" alt="">
                </div>
              </div>
              <div class="swiper-pagination">comment</div>
              <section class="mb-4">

                  <!--Section heading-->
                  <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                  <!--Section description-->
                  <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
                      a matter of hours to help you.</p>

                  <div class="row">

                      <!--Grid column-->
                      <div class="col-md-9 mb-md-0 mb-5">
                          <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                              <!--Grid row-->
                              <div class="row">

                                  <!--Grid column-->
                                  <div class="col-md-6">
                                      <div class="md-form mb-0">
                                          <input type="text" id="name" name="name" class="form-control">
                                          <label for="name" class="">Your name</label>
                                      </div>
                                  </div>
                                  <!--Grid column-->

                                  <!--Grid column-->
                                  <div class="col-md-6">
                                      <div class="md-form mb-0">
                                          <input type="text" id="email" name="email" class="form-control">
                                          <label for="email" class="">Your email</label>
                                      </div>
                                  </div>
                                  <!--Grid column-->

                              </div>
                              <!--Grid row-->

                              <!--Grid row-->
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="md-form mb-0">
                                          <input type="text" id="subject" name="subject" class="form-control">
                                          <label for="subject" class="">Subject</label>
                                      </div>
                                  </div>
                              </div>
                              <!--Grid row-->

                              <!--Grid row-->
                              <div class="row">

                                  <!--Grid column-->
                                  <div class="col-md-12">

                                      <div class="md-form">
                                          <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                          <label for="message">Your message</label>
                                      </div>

                                  </div>
                              </div>
                              <!--Grid row-->

                          </form>

                          <div class="text-center text-md-left">
                              <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                          </div>
                          <div class="status"></div>
                      </div>
                      
                      

                  </div>

              </section> 
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>:{{$category}}</li>
                <li><strong>Client</strong>: {{$nameUser}}</li>
                
                <li><strong>Tel</strong> : {{$user[0]->tel}}</li>
                <li><strong>Whatsapp</strong>:{{$user[0]->whatsapp}}</li>
                <li><strong>Ville</strong>: {{$user[0]->ville}}</li>
                <li><strong>Adresse</strong>: {{$user[0]->adresse}}</li>
                <li><strong>Email</strong>: {{$user[0]->email}}</li>
                <li><strong>Project date</strong> : {{$dataService->created_at->format('d/m/Y')}}</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>{{$dataService->titre}}</h2>
              <p>{{$dataService->discription}} </p>
            </div>
            <h2>carte visite</h2>
            @if($carte !== null)
              <div class="row">
                @foreach($carte as $e)
                  
                    @if($e->N_Modele === "1")
                    
                        <div class="col-lg-6" number="1">
                              <div id="capture{{$e->id}}" class="m-2" style="{{$e->styleCarteA}}">
                                  <div id="background2" class="d-flex" style="{{$e->styleCarteB}}" >

                                      <img src="./imagesService/{{$e->file}}" alt="" style=" width:25%; height: 80%; border-radius: 50%; border:solid 4px #000000;margin:8px 0px 0px 13px ;">
                                    <div style="margin: 20px 0px 0px 70px;">
                                      <h3 id="style_titer" class="text-center" style="{{$e->tail_titre}}">{{$e->titre}}</h3>
                                      <p id="style_info" class=" text-center" style="{{$e->tail_info}}"><b>{{$user[0]->name}}</b></p>
                                      <p class="text-center"  style="{{$e->tail_info}}">{{$user[0]->profession}}</p>
                                    </div>  
                                  </div>
                                  <div class="d-flex mt-3" style="{{$e->tail_info}}">
                                    <div>
                                        <div class="my-2" >
                                          <p class="ms-2"><i class="bi bi-telephone me-2"></i>{{$user[0]->tel}}</p>
                                        </div>
                                        <div class="my-2" >
                                          <p class="ms-2"><i class="bi bi-whatsapp me-2"></i>{{$user[0]->whatsapp}}</p>
                                        </div>
                                    </div>
                                    <div>
                                      <div class="my-2" >
                                          <p class="ms-2"><i class="bi bi-geo-alt me-2"></i>{{$user[0]->adresse}}</p>
                                      </div>
                                      <div class=" my-2 " >
                                        <p class="ms-2"><i class="bi bi-envelope me-2"></i>{{$user[0]->email}}</p>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                              <div class="display:flex;">
                                    <!-- Facebook -->
                                    <a href="https://www.facebook.com/sharer/sharer.php?url={{url()->current()}}" target="_blank">
                                    <i class="bi bi-facebook" style="font-size:25px"></i>
                                    </a>

                                    <!-- Twitter -->
                                    <a href="https://twitter.com/intent/tweet?url={{url()->current()}}&text=twitter" target="_blank">
                                      <i class="bi bi-twitter" style="font-size:25px"></i>
                                    </a>

                                    <!-- LinkedIn -->
                                    <a href="https://www.linkedin.com/shareArticle?url={{url()->current()}}&summary=YOUR_WEBSITE_DESCRIPTION" target="_blank">
                                      <i class="bi bi-linkedin" style="font-size:25px"></i>
                                    </a>

                                    <!-- Pinterest -->
                                    <a href="https://pinterest.com/pin/create/button/?url={{url()->current()}}&description=YOUR_WEBSITE_DESCRIPTION" target="_blank">
                                      
                                      <i class="bi bi-pinterest" style="font-size:25px"></i>
                                    </a>

                                    <!-- WhatsApp -->
                                    <a href="https://api.whatsapp.com/send?url={{url()->current()}}" target="_blank">
                                      <i class="bi bi-whatsapp" style="font-size:25px"></i>
                                    </a>
                                  
                                   <i style="position: absolute;right: 50px;"  id="i" class="btn btn-outline-primary bi bi-download me-2" onclick="capture({{$e->id}})" ></i>    
                            
                                 </div>  
                        </div>
                        
                    @endif    
                    @if($e->N_Modele === "2")

                          <div class="col-lg-6" number="2">
                              <div id="capture{{$e->id}}" class=" d-flex m-2" style="{{$e->styleCarteA}} ">
                                  <div id="background2" class="letf"style="{{$e->styleCarteB}}">
                                        <img src="./imagesService/{{$e->file}}" alt="" style="width: 60%; height: 40%;margin: 55px 0px 5px 40px; border-radius:50%; border:solid 4px #000000">
                                    <h3 class="text-center" style="{{$e->tail_titre}}">{{$e->titre}}</h3>
                                  </div> 
                                  <div class="rigth" style="width: 60%; height: 100%; margin-top: 25px; ">
                                
                                    <p class=" text-center" style="{{$e->tail_info}}">{{$user[0]->name}}</b></p>
                                  
                                    <div class="my-2" >
                                        <p class="ms-2" style="{{$e->tail_info}}"><i class="bi bi-stars me-2"></i>{{$user[0]->profession}}</p>
                                    </div>
                                    <div class="my-2" >
                                      <p class="ms-2" style="{{$e->tail_info}}"><i class="bi bi-telephone me-2"></i>{{$user[0]->tel}}</p>
                                    </div>
                                    <div class="my-2" >
                                      <p class="ms-2" style="{{$e->tail_info}}"><i class="bi bi-whatsapp me-2"></i>{{$user[0]->whatsapp}}</p>
                                    </div>
                                    <div class="my-2 " >
                                      <p class="ms-2" style="{{$e->tail_info}}"><i class="bi bi-geo-alt me-2"></i>{{$user[0]->adresse}}</p>
                                    </div>
                                    <div class="my-2 " >
                                      <p class="ms-2" style="{{$e->tail_info}}"><i class="bi bi-envelope me-2"></i>{{$user[0]->email}}</p>
                                    </div>
                                  </div> 
                              </div>
                              <div class="display:flex;">
                                    <!-- Facebook -->
                                    <a href="https://www.facebook.com/sharer/sharer.php?url={{url()->current()}}" target="_blank">
                                    <i class="bi bi-facebook" style="font-size:25px"></i>
                                    </a>

                                    <!-- Twitter -->
                                    <a href="https://twitter.com/intent/tweet?url={{url()->current()}}&text=twitter" target="_blank">
                                      <i class="bi bi-twitter" style="font-size:25px"></i>
                                    </a>

                                    <!-- LinkedIn -->
                                    <a href="https://www.linkedin.com/shareArticle?url={{url()->current()}}&summary=YOUR_WEBSITE_DESCRIPTION" target="_blank">
                                      <i class="bi bi-linkedin" style="font-size:25px"></i>
                                    </a>

                                    <!-- Pinterest -->
                                    <a href="https://pinterest.com/pin/create/button/?url={{url()->current()}}&description=YOUR_WEBSITE_DESCRIPTION" target="_blank">
                                      
                                      <i class="bi bi-pinterest" style="font-size:25px"></i>
                                    </a>

                                    <!-- WhatsApp -->
                                    <a href="https://api.whatsapp.com/send?url={{url()->current()}}" target="_blank">
                                      <i class="bi bi-whatsapp" style="font-size:25px"></i>
                                    </a>
                                  
                                   <i style="position: absolute;right: 50px;"  id="i" class="btn btn-outline-primary bi bi-download me-2" onclick="capture({{$e->id}})" ></i>    
                            
                                 </div>
                          </div>
                          
                    @endif       
                    @if($e->N_Modele === "3") 
                      
                            <div class=" col-lg-6" number="3">
                                  <div id="capture{{$e->id}}" class=" d-flex m-2" style="{{$e->styleCarteA}}">
                                    <div id="background2" class="letf"style="{{$e->styleCarteB}}">
                                      <img src="./imagesService/{{$e->file}}" alt="" style="width: 60%; height: 40%;margin: 55px 0px 5px 40px; border-radius:50%; border:solid 4px #000000">
                                      <h3 class="text-center" style="{{$e->tail_titre}}">{{$e->titre}}</h3>
                                    </div> 
                                    <div class="rigth" style="width: 60%; height: 100%; #aefaf795; margin-top: 25px; ">
                                    
                                        <p class=" text-center" style="{{$e->tail_info}}"><b>{{$user[0]->name}}</b></p>
                                    
                                      <div class="my-2" >
                                        <p class="ms-2" style="{{$e->tail_info}}"><i class="bi bi-stars me-2"></i>{{$user[0]->profession}}</p>
                                      </div>
                                      <div class="my-2 " >
                                        <p class="ms-2" style="{{$e->tail_info}}"><i class="bi bi-telephone me-2"></i>{{$user[0]->tel}}</p>
                                      </div>
                                      <div class="my-2 " >
                                        <p class="ms-2" style="{{$e->tail_info}}"><i class="bi bi-whatsapp me-2"></i>{{$user[0]->whatsapp}}</p>
                                      </div>
                                      <div class="my-2 " >
                                          <p class="ms-2" style="{{$e->tail_info}}"><i class="bi bi-geo-alt me-2"></i>{{$user[0]->adresse}}</p>
                                      </div>
                                      <div class="my-2 " >
                                          <p class="ms-2" style="{{$e->tail_info}}"><i class="bi bi-envelope me-2"></i>{{$user[0]->email}}</p>
                                      </div>
                                    </div> 
                                  </div>
                                  <div class="display:flex;">
                                    <!-- Facebook -->
                                    <a href="https://www.facebook.com/sharer/sharer.php?url={{url()->current()}}" target="_blank">
                                    <i class="bi bi-facebook" style="font-size:25px"></i>
                                    </a>

                                    <!-- Twitter -->
                                    <a href="https://twitter.com/intent/tweet?url={{url()->current()}}&text=twitter" target="_blank">
                                      <i class="bi bi-twitter" style="font-size:25px"></i>
                                    </a>

                                    <!-- LinkedIn -->
                                    <a href="https://www.linkedin.com/shareArticle?url={{url()->current()}}&summary=YOUR_WEBSITE_DESCRIPTION" target="_blank">
                                      <i class="bi bi-linkedin" style="font-size:25px"></i>
                                    </a>

                                    <!-- Pinterest -->
                                    <a href="https://pinterest.com/pin/create/button/?url={{url()->current()}}&description=YOUR_WEBSITE_DESCRIPTION" target="_blank">
                                      
                                      <i class="bi bi-pinterest" style="font-size:25px"></i>
                                    </a>

                                    <!-- WhatsApp -->
                                    <a href="https://api.whatsapp.com/send?url={{url()->current()}}" target="_blank">
                                      <i class="bi bi-whatsapp" style="font-size:25px"></i>
                                    </a>
                                  
                                   <i style="position: absolute;right: 50px;"  id="i" class="btn btn-outline-primary bi bi-download me-2" onclick="capture({{$e->id}})" ></i>    
                            
                                 </div>
                            </div>
                          
                    @endif     
                @endforeach        
              </div>
            @else
              <p>non carte</p>
            @endif
          
          </div>

        </div>

      </div>
  
    </section><!-- End Portfolio Details Section -->
<!--Section: Contact v.2-->

<!--Section: Contact v.2-->
  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets3/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets3/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets3/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets3/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets3/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets3/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets3/js/main.js"></script>
  <script src="./html2canvas.min.js"></script>
  <script>

     function capture(i) {

          
            html2canvas( document.getElementById(`capture${i}`),{
        logging: true,
        letterRendering: 1,
        allowTaint: true,
        useCORS: true,
        scrollX: 0,
        scrollY: -window.scrollY,

        async: true,
      } ).then(canvas => { 
                canvas.toBlob(function(blob) {
                // Create an <a> element and set its download attribute to the filename
                var a = document.createElement("a");
                a.download = "invoice.jpg";
  
                // Set the href attribute to a URL created from the Blob object
                a.href = URL.createObjectURL(blob);
  
                // Trigger a click event on the <a> element to download the image
                a.click();
  
                // Clean up the URL object
                URL.revokeObjectURL(a.href);
              }, "image/jpeg", 0.8);
            

            })
          
        }
    
</script>
</body>

</html>