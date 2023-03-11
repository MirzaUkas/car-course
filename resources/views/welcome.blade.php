<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Car Course</title>

    <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">Car Course<em> Corp</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.html" class="active">Home</a></li>
                            <li><a href="trainer.html">Trainer</a></li>
                            <li><a href="cars.html">Cars</a></li>
                            <li><a href="contact.html">Contact</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="{{asset('/images/video.mp4')}}" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Kursus Mengemudi Terbaik di Indonesia</h6>
                <h2>Belajar <em>Mobil</em> dengan Mudah dan Murah!</h2>
                <div class="main-button">
                    <a href="contact.html">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

   <!-- ***** Cars Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Jenis <em>Mobil</em></h2>
                        <img src="{{asset('/images/line-dec.png')}}" alt="">
                        <p>Pilih mobil yang anda inginkan, automatic atau manual kami ada</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{asset('/images/product-1-720x480.jpg')}}" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup>$</sup>11999 </del> &nbsp; <sup>$</sup>11779
                            </span>

                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                            <p>
                                <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> 1800 cc &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                            </p>

                            <ul class="social-icons">
                                <li><a href="car-details.html">+ View Car</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{asset('/images/product-2-720x480.jpg')}}" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup>$</sup>11999 </del> &nbsp; <sup>$</sup>11779
                            </span>

                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                            <p>
                                <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> 1800 cc &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                            </p>

                            <ul class="social-icons">
                                <li><a href="car-details.html">+ View Car</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{asset('/images/product-3-720x480.jpg')}}" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup>$</sup>11999 </del> &nbsp; <sup>$</sup>11779
                            </span>

                            <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                            <p>
                                <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> 1800 cc &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                            </p>

                            <ul class="social-icons">
                                <li><a href="car-details.html">+ View Car</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="main-button text-center">
                <a href="cars.html">View Cars</a>
            </div>
        </div>
    </section>
    <!-- ***** Cars Ends ***** -->

    <section class="section section-bg" id="schedule" style="background-image: url({{asset('/images/about-fullscreen-1-1920x700.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Baca <em>Tentang Kami</em></h2>
                        <img src="{{asset('/images/line-dec.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                        <p>Car Course adalah perusahaan yang bergerak di bidang kursus mobil yang memiliki reputasi baik dan diakui sebagai salah satu perusahaan terbaik di Indonesia. Car Course menyediakan kursus mengemudi dengan standar internasional, instruktur berpengalaman dan berkualifikasi, serta fasilitas yang memadai.</p>

                        <p>Car Course menawarkan berbagai jenis kursus yang sesuai dengan kebutuhan pelanggan, mulai dari kursus pemula hingga kursus lanjutan untuk pengemudi yang sudah berpengalaman. Pelanggan dapat memilih kursus yang sesuai dengan tingkat kemampuan dan pengalaman mereka dalam mengemudi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Blog Start ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Pilih <em>Trainer</em></h2>
                        <img src="{{asset('/images/line-dec.png')}}" alt="">
                        <p>Instruktur Car Course adalah orang yang berpengalaman dan terlatih untuk memberikan pelatihan mengemudi yang efektif dan efisien. Mereka mampu memberikan panduan tentang teknik mengemudi yang benar dan memberikan umpan balik secara terus-menerus untuk membantu pelanggan meningkatkan keterampilan mereka.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{asset('/images/team-image-1-646x680.jpg')}}" alt="">
                        </div>
                        <div class="down-content">
                            <span>2 Tahun Pengalaman</span>
                            <h4>John Doe</h4>
                            <p>Vestibulum id est eu felis vulputate hendrerit. Suspendisse dapibus turpis in dui pulvinar imperdiet. Nunc consectetur.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{asset('/images/team-image-2-646x680.jpg')}}" alt="">
                        </div>
                        <div class="down-content">
                            <span>3 Tahun Pengalaman</span>
                            <h4>Jane Smith</h4>
                            <p>Vestibulum id est eu felis vulputate hendrerit. Suspendisse dapibus turpis in dui pulvinar imperdiet. Nunc consectetur.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{asset('/images/team-image-3-646x680.jpg')}}" alt="">
                        </div>
                        <div class="down-content">
                            <span>1 Tahun Pengalaman</span>
                            <h4>Kate Johnson</h4>
                            <p>Vestibulum id est eu felis vulputate hendrerit. Suspendisse dapibus turpis in dui pulvinar imperdiet. Nunc consectetur.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{asset('/images/team-image-4-646x680.jpg')}}" alt="">
                        </div>
                        <div class="down-content">
                            <span>3 Tahun Pengalaman</span>
                            <h4>Mark Green</h4>
                            <p>Vestibulum id est eu felis vulputate hendrerit. Suspendisse dapibus turpis in dui pulvinar imperdiet. Nunc consectetur.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url({{asset('/images/banner-image-1-1920x500.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Pilih Jadwal <em>Belajarmu</em></h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
                       
                    </div>
                </div>
                
            </div>                          

            <div class="row" id="tabs">
                <div class="col-lg-4">
                  <ul>
                    <li><a href='#tabs-1'>Senin – Jumat : 08.00 – 16.00 WIB</a></li>
                    <li><a href='#tabs-2'>Sabtu  : 08.00 – 16.00 WIB</a></li>
                    <li><a href='#tabs-3'>Minggu : 08.00 – 15.00 WIB</a></li>
                  </ul>
                </div>
                <div class="col-lg-8">
                  <section class='tabs-content'>
                    <article id='tabs-1'>
                        <div style="background: #fff;border-radius: 5px; padding: 30px 30px">
                            <ul>
                                <li>5 kali pertemuan  : Rp530.000</li>
                                <li>8 kali pertemuan  : Rp780.000</li>
                                <li>12 kali pertemuan : Rp1.060.000 (diskon 10%)</li>
                                <li>16 kali pertemuan : Rp1.350.000 (diskon 10%)</li>
                              </ul>
                        </div>
                    </article>
                    <article id='tabs-2'>
                        <div style="background: #fff;border-radius: 5px; padding: 30px 30px">
                            <ul>
                                <li>5 kali pertemuan  : Rp630.000</li>
                                <li>8 kali pertemuan  : Rp880.000</li>
                                <li>12 kali pertemuan : Rp1.160.000 (diskon 10%)</li>
                                <li>16 kali pertemuan : Rp1.450.000 (diskon 10%)</li>
                              </ul>
                        </div>
                    </article>
                    <article id='tabs-3'>
                        <div style="background: #fff;border-radius: 5px; padding: 30px 30px">
                            <ul>
                                <li>5 kali pertemuan  : Rp630.000</li>
                                <li>8 kali pertemuan  : Rp880.000</li>
                                <li>12 kali pertemuan : Rp1.160.000 (diskon 10%)</li>
                                <li>16 kali pertemuan : Rp1.450.000 (diskon 10%)</li>
                              </ul>
                        </div>
                    </article>
                  </section>
                </div>
              </div>
            
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>contact <em> info</em></h2>
                        <img src="{{asset('/images/line-dec.png')}}" alt="waves">
                        
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-phone"></i>
                    </div>

                    <h5><a href="#">+62 812 4040 5566</a></h5>

                    <br>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                    </div>

                    <h5><a href="#">contact@carcourse.com</a></h5>

                    <br>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i>
                    </div>

                    <h5>East Jakarta, Indonesia</h5>

                    <br>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->
   
    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us" style="margin-top: 0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div id="map">
                      <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form section-bg" style="background-image: url({{asset('/images/contact-1-720x480.jpg')}})">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Subject">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Send Message</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->
    
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2020 Car Course Corp
                    </p>
                </div>
            </div>
        </div>
    </footer>
        <!-- jQuery -->
        <script src="{{asset('/js/jquery-2.1.0.min.js')}}"></script>

        <!-- Bootstrap -->
        <script src="{{asset('/js/popper.js')}}"></script>
        <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    
        <!-- Plugins -->
        <script src="{{asset('/js/scrollreveal.min.js')}}"></script>
        <script src="{{asset('/js/waypoints.min.js')}}"></script>
        <script src="{{asset('/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('/js/imgfix.min.js')}}"></script> 
        <script src="{{asset('/js/mixitup.js')}}"></script> 
        <script src="{{asset('/js/accordions.js')}}"></script>
        
        <!-- Global Init -->
        <script src="{{asset('/js/custom.js')}}"></script>
  </body>
</html>