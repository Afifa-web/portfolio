@extends('layouts.master')
@section('content')


  <!-- PRE LOADER -->
  <section class="preloader">
       <div class="spinner">
            <span class="spinner-rotate"></span>
       </div>
  </section>


  <!-- MENU -->
  <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
       <div class="container">

            <div class="navbar-header">
                 <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="icon icon-bar"></span>
                      <span class="icon icon-bar"></span>
                      <span class="icon icon-bar"></span>
                 </button>

                 <!-- lOGO TEXT HERE -->
                 <a href="#" class="navbar-brand">AFIFA</a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                 <ul class="nav navbar-nav navbar-nav-first">
                      <li><a href="#home" class="smoothScroll">Home</a></li>
                      <li><a href="#about" class="smoothScroll">About</a></li>
                      <li><a href="#blog" class="smoothScroll">Education</a></li>
                      <li><a href="#skills" class="smoothScroll">Skills</a></li>
                      <li><a href="#project" class="smoothScroll">Project</a></li>
                      <li><a href="#work" class="smoothScroll">My Work</a></li>
                      <li><a href="#experience" class="smoothScroll">My Experience</a></li>
                      <li><a href="#reference" class="smoothScroll">Reference</a></li>

                      <li><a href="#contact" class="smoothScroll">Contacts</a></li>
                 </ul>

                 <ul class="nav navbar-nav navbar-right">
                      <li><a href="https://www.facebook.com/afifa.adil.5"><i class="fa fa-facebook-square"></i></a></li>
                      {{-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li> --}}
                      {{-- <li><a href="afifauttara444@gmail.com"><i class="fa fa-instagram"></i></a></li>  --}}

                      {{-- <li class="section-btn"><a href="#" data-toggle="modal" data-target="#modal-form">Sign in / Join</a></li> --}}
                 </ul>
            </div>

       </div>
  </section>


  <!-- HOME -->
  <section id="home" data-stellar-background-ratio="0.5">
       <div class="overlay"></div>
       <div class="container">
            <div class="row">

                 <div class="col-md-6 col-sm-12">
                      <div class="home-info">
                           <h1>I make beautiful websites for all people.</h1>
                           <a href="#about" class="btn section-btn smoothScroll">Start a project</a>
                           <span>
                                CALL ME (+88) 01771567123 <br>
                                Mail: afifauttara444@gmail.com
                                <small>For Contact With Me</small>
                           </span>
                      </div>
                 </div>

                 <div class="col-md-6 col-sm-12">
                      <div class="home-video">
                           <div class="embed-responsive embed-responsive-16by9">
                                {{-- <iframe src="https://www.youtube.com/embed/AqcjdkPMPJA" frameborder="0" allowfullscreen></iframe> --}}
                           </div>
                      </div>
                 </div>

            </div>
       </div>
  </section>


  <section id="about" data-stellar-background-ratio="0.5">
       <div class="container">
            <div class="row">

                 <div class="col-md-5 col-sm-6">
                      <div class="about-info">
                           <div class="section-title">
                                <h2 style="color:#CE3232;" >I am Afifa</h2>
                                <span class="line-bar">...</span>
                           </div>
                           <p><span class="line-bar" style="color:#40AFC0;" >My Career Objects:</span> To build career in a large software institution where my competency can best be exerted, implemented, Voiced and delivered for institutional and personal attainment.</p>
                            <p><span class="line-bar" style="color:#40AFC0;" >Personal:</span> Well- mannered, Smart, Structured, Discipline, Punctual. Honest and Sincere. Good team worker and can work under presser. Ability to work across the cultures organizational boundaries and always willing to learn. Leadership initiative and committed to achieve the goal. </p>
                      </div>
                 </div>

                 <div class="col-md-3 col-sm-6">
                      <div class="about-info skill-thumb">

                           <strong>Web Design</strong>
                                <span class="pull-right">85%</span>
                                     <div class="progress">
                                          <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                                     </div>

                           <strong>Web Development</strong>
                                <span class="pull-right">90%</span>
                                     <div class="progress">
                                          <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                     </div>

                           <strong>Management System</strong>
                                <span class="pull-right">75%</span>
                                     <div class="progress">
                                          <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                                     </div>

                           <strong>Machine Learning</strong>
                                <span class="pull-right">70%</span>
                                     <div class="progress">
                                          <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                     </div>

                      </div>
                 </div>

                 <div class="col-md-4 col-sm-12">
                      <div class="about-image">
                           <img src="{{ asset('frontend/assets/images/afifa1.png')}}" class="img-responsive" alt="">
                      </div>
                 </div>

            </div>
       </div>
  </section>


  <!-- BLOG -->
  <section id="blog" data-stellar-background-ratio="0.5">
       <div class="container">
            <div class="row">

                 <div class="col-md-12 col-sm-12">
                      <div class="section-title">
                           <h2>Education</h2>
                           <span class="line-bar">...</span>
                      </div>
                 </div>

                 <div class="col-md-6 col-sm-6">
                      <!-- BLOG THUMB -->
                      <div class="media blog-thumb">
                           {{-- <div class="media-object media-left">
                                <a href="blog-detail.html"><img src="images/blog-image1.jpg" class="img-responsive" alt=""></a>
                           </div> --}}
                           <div class="media-body blog-info">
                                <small style="color:#40AFC0;"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Graduation (B.S.C)</small>

                                <h4>BACHELOR OF SCIENCE IN COMPUTER SCIENCE AND ENGINEERING [last semester]</h4>
                                <p>Result: GPA: 3.5/4.0</p>
                                <p>Institution: <span style="color:#40AFC0;">Uttara University</span></p>
                           </div>
                      </div>
                 </div>

                 <div class="col-md-6 col-sm-6">
                      <!-- BLOG THUMB -->
                      <div class="media blog-thumb">
                           {{-- <div class="media-object media-left">
                                <a href="blog-detail.html"><img src="images/blog-image1.jpg" class="img-responsive" alt=""></a>
                           </div> --}}
                           <div class="media-body blog-info">
                                <small style="color:#40AFC0;"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Higher Secondary School Certification: </small>

                                <p> Group: Science</p>
                                <p>  Year of Examination: 2014 </p>
                                <p>  Result: G.P.A- 3.10 (In the scale of 5)  </p>
                                <p>Institution: <span style="color:#40AFC0;"> Govt. Kishoreganj Mohila College  </span></p>
                           </div>
                      </div>
                 </div>


               <div class="col-md-6 col-sm-6">
                    <!-- BLOG THUMB -->
                    <div class="media blog-thumb">
                         {{-- <div class="media-object media-left">
                              <a href="blog-detail.html"><img src="images/blog-image1.jpg" class="img-responsive" alt=""></a>
                         </div> --}}
                         <div class="media-body blog-info">
                              <small style="color:#40AFC0;"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Secondary School Certification: </small>

                              <p> Group: Science</p>
                              <p>  Year of Examination: 2011 </p>
                              <p>  Result: G.P.A- 4.69 (In the scale of 5)   </p>
                              <p>Institution: <span style="color:#40AFC0;">Barmi Bazar High School   </span></p>
                         </div>
                    </div>
               </div>
               <div class="col-md-6 col-sm-6">
                    <!-- BLOG THUMB -->
                    <div class="media blog-thumb">
                         {{-- <div class="media-object media-left">
                              <a href="blog-detail.html"><img src="images/blog-image1.jpg" class="img-responsive" alt=""></a>
                         </div> --}}
                         <div class="media-body blog-info">
                              <small style="color:#40AFC0;"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Web Development course:</small>


                              <p>Institution: <span style="color:#40AFC0;"> Creative It institute </span></p>
                         </div>
                    </div>
               </div>

            </div>
       </div>
  </section>


  <section id="skills" data-stellar-background-ratio="0.5">
       <div class="container">
            <div class="row">

                 <div class="col-md-12 col-sm-12">
                      <div class="section-title">
                           <h2> Skills</h2>
                           <span class="line-bar">...</span>
                      </div>
                 </div>

                 <div class="col-md-6 col-sm-6">
                      <!-- BLOG THUMB -->
                      <div class="media blog-thumb">

                           <div class="media-body blog-info">
                               <h3><small style="color:#40AFC0;"><i class="fa fa-code"></i> Programming Skills </small></h3>
                                <br>
                                <p>Programming Language:<span style="color:#40AFC0;"> PHP, python </span></p>
                                <p>Frameworks    :	<span style="color:#40AFC0;">Laravel [expert v.8]</span></p>
                                <p>Php Cms     :   <span style="color:#40AFC0;"> Wordpress [customization]</span> </p>
                                <p>Others     :    <span style="color:#40AFC0;"> html5, css3, j-query, bootstrap4, business innovative planning, presentation</span></p>
                                <p>Web Site : <span style="color:#40AFC0;"> Ecommerce site, Multi-Vendor Ecommerce Site, Management System.</span></p>
                           </div>
                      </div>
                 </div>

                 <div class="col-md-6 col-sm-6">
                      <!-- BLOG THUMB -->
                      <div class="media blog-thumb">

                           <div class="media-body blog-info">
                               <h3><small style="color:#40AFC0;"><i class="fa fa-desktop" aria-hidden="true"></i>Other Skills </small></h3>
                                <br>
                                <p>Language Skills: <span style="color:#40AFC0;"> Bangla: Speaking, Reading and Writing.<br>
                                              English: Speaking, Reading and Writing.
                                             </span></p>
                                <p>Computer Skills: :	<span style="color:#40AFC0;">Office Applications: MS Word, MS Excel, MS Power Point, MS Access. Internet: Browsing & E-mail literacy. </span></p>

                           </div>
                      </div>
                 </div>

            </div>
       </div>
  </section>

  <section id="project" data-stellar-background-ratio="0.3">
       <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                      <div class="about-info">
                           <div class="section-title">
                                <h3 style="color:#CE3232;text-align:center;" >Project</h3>
                                <span class="line-bar">...</span>
                           </div>

                 </div>
                 <div class="col-md-6 col-sm-6">
                      <!-- BLOG THUMB -->
                      <div class="media blog-thumb">

                           <div class="media-body blog-info">
                               <h3><small style="color:#40AFC0;"> Machine Learning </small></h3>
                                <br>
                                <p><span style="color:#40AFC0;"> 1. </span> Predict Capital Income and Predict Salary Using <span style="color:#40AFC0;">Linear Regression </span></p>
                                <p><span style="color:#40AFC0;"> 2. </span>Diabetes Detection Using<span style="color:#40AFC0;"> Multiple Linear Regression </span></p>
                                <p><span style="color:#40AFC0;"> 3. </span>Autistic Spectrum Disorder Detection Using<span style="color:#40AFC0;"> Decision Tree </span></p>
                                <p><span style="color:#40AFC0;"> 3. </span>Heart Diseases Detection Using<span style="color:#40AFC0;"> KNN </span></p>
                      </div>
                  </div>
            </div>
            <div class="col-md-6 col-sm-6">
                 <!-- BLOG THUMB -->
                 <div class="media blog-thumb">

                      <div class="media-body blog-info">
                          <h3><small style="color:#40AFC0;"> Web Application </small></h3>
                           <br>
                           <p><span style="color:#40AFC0;"> 1. </span> Multi-Vendor <span style="color:#40AFC0;">E-Ecommerce </span> Web-site </p>
                           <p><span style="color:#40AFC0;"> 2. </span><span style="color:#40AFC0;"> E-Ecommerce </span>Web-site</p>
                           <p><span style="color:#40AFC0;"> 3. </span>Varsity<span style="color:#40AFC0;"> ERP </span>Management-System</p>

                 </div>
             </div>
       </div>
       </div>
  </section>

  <!-- WORK -->
  <section id="work" data-stellar-background-ratio="0.5">
       <div class="container">
            <div class="row">

                 <div class="col-md-12 col-sm-12">
                      <div class="section-title">
                           <h2>My work</h2>
                           <span class="line-bar">...</span>
                      </div>
                 </div>

                 <div class="col-md-3 col-sm-6">
                      <!-- WORK THUMB -->
                      <div class="work-thumb">
                           <a href="{{ asset('frontend/assets/images/protfolio1.jpg')}}" class="image-popup">
                                <img src="{{ asset('frontend/assets/images/protfolio1.jpg')}}" class="img-responsive" alt="Work">

                                <div class="work-info">
                                     <h3>Varsity,Management</h3>
                                     <small>Frontend & Backend</small>
                                </div>
                           </a>
                      </div>
                 </div>

                 <div class="col-md-3 col-sm-6">
                      <!-- WORK THUMB -->
                      <div class="work-thumb">
                           <a href="{{ asset('frontend/assets/images/protfolio5.jpg')}}" class="image-popup">
                                <img src="{{ asset('frontend/assets/images/protfolio5.jpg')}}" class="img-responsive" alt="Work">

                                <div class="work-info">
                                     <h3>ERP,Admin Panel</h3>
                                     <small>Backend</small>
                                </div>
                           </a>
                      </div>
                 </div>

                 <div class="col-md-3 col-sm-6">
                      <!-- WORK THUMB -->
                      <div class="work-thumb">
                           <a href="{{ asset('frontend/assets/images/protfolio3.jpg')}}" class="image-popup">
                                <img src="{{ asset('frontend/assets/images/protfolio3.jpg')}}" class="img-responsive" alt="Work">

                                <div class="work-info">
                                     <h3>E-Ecommerce</h3>
                                     <small>Signature,BD</small>
                                </div>
                           </a>
                      </div>
                 </div>

                 <div class="col-md-3 col-sm-6">
                      <!-- WORK THUMB -->
                      <div class="work-thumb">
                           <a href="{{ asset('frontend/assets/images/protfolio4.jpg')}}" class="image-popup">
                                <img src="{{ asset('frontend/assets/images/protfolio4.jpg')}}" class="img-responsive" alt="Work">

                                <div class="work-info">
                                     <h3>Multi Vendor, E-Ecommerce</h3>
                                     <small>Frontend & Backend</small>
                                </div>
                           </a>
                      </div>
                 </div>


            </div>
       </div>
  </section>
  <section id="experience" data-stellar-background-ratio="0.5">
       <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                      <div class="about-info">
                           <div class="section-title">
                                <h3 style="color:#CE3232;text-align:center;" >Experience</h3>
                                <span class="line-bar">...</span>
                           </div>

                    </div>
                 <div class="col-md-6 col-sm-6">
                      <!-- BLOG THUMB -->
                      <div class="media blog-thumb">

                           <div class="media-body blog-info">
                               <h3><small style="color:#40AFC0;"> As a mentor </small></h3>
                                <br>
                                <p><span style="color:#ce3232;"> UU freelancing club [Uttara University]</span></p>
                                <p> <span style="color:#40AFC0;">  I was there as a mentor of web development for 1 year.  </span></p>

                                <p></span>Other: <span style="color:#40AFC0;">    I have experience for work with team in local project.</span></p>
                      </div>
                 </div>

            </div>
                 <div class="col-md-6 col-sm-6">
                      <!-- BLOG THUMB -->
                      <div class="media blog-thumb">

                             <div class="media-body blog-info">
                                 <h3><small style="color:#40AFC0;"> Machine Learning </small></h3>
                                  <br>
                                  <p><span style="color:#ce3232;">6 Projects</span></p>
                                  <p> <span style="color:#40AFC0;"> Experience: for 6 months </span></p>
                           </div>

                   </div>

              </div>
       </div>
  </section>
  <section id="reference" data-stellar-background-ratio="0.5">
       <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                      <div class="about-info">
                           <div class="section-title">
                                <h3 style="color:#CE3232;text-align:center;" >Reference</h3>
                                <span class="line-bar">...</span>
                           </div>

                    </div>
                 <div class="col-md-6 col-sm-6">
                      <!-- BLOG THUMB -->
                      <div class="media blog-thumb">

                           <div class="media-body blog-info">
                               {{-- <h3><small style="color:#40AFC0;"> As a mentor </small></h3> --}}
                                <br>
                                <p>Name: Riasaad Haque Aneek</span></p>
                                <p> Senior Lecturer </p>
                                <p> Department of CSE, Uttara University </p>

                                <p></span> Mail: <span style="color:#40AFC0;">   aneek.cse@uttarauniversity.edu.bd</span></p>
                                <p></span> Phone: <span style="color:#40AFC0;">     01921462466</span></p>
                      </div>
                 </div>

            </div>
                 <div class="col-md-6 col-sm-6">
                      <!-- BLOG THUMB -->
                      <div class="media blog-thumb">

                        <div class="media-body blog-info">
                            {{-- <h3><small style="color:#40AFC0;"> As a mentor </small></h3> --}}
                             <br>
                             <p>Name: Riasaad Haque Aneek</span></p>
                             <p> Senior Lecturer </p>
                             <p> Department of CSE, Uttara University </p>

                             <p></span> Mail: <span style="color:#40AFC0;">   aneek.cse@uttarauniversity.edu.bd</span></p>
                             <p></span> Phone: <span style="color:#40AFC0;">     01921462466</span></p>
                       </div>

                   </div>

              </div>
       </div>
  </section>

  <!-- CONTACT -->
  {{-- @extends('frontend.index')
  @section('contact')

  @endsection --}}
  <section id="contact" data-stellar-background-ratio="0.5">
       <div class="container">
            <div class="row">

                 <div class="col-md-12 col-sm-12">
                      <div class="section-title">
                           <h2>Contact Me</h2>
                           <span class="line-bar">...</span>
                      </div>
                 </div>

                 <div class="col-md-8 col-sm-8">
                   @if(Session::has('message_sent'))
                     <div class="alert alert-success" role="alert">
                        {{ Session::get('message_sent') }}
                     </div>
                   @endif

                      <!-- CONTACT FORM HERE -->
                      <form id="contact-form" role="form" action="{{ route('contact.send') }}" method="post" enctype="multipart/form-data">
                        @csrf
                           <div class="col-md-6 col-sm-6">
                                <input type="text" class="form-control" placeholder="Full Name" id="cf-name" name="name" required="">
                           </div>

                           <div class="col-md-6 col-sm-6">
                                <input type="email" class="form-control" placeholder="Your Email" id="cf-email" name="email" required="">
                           </div>

                           <div class="col-md-6 col-sm-6">
                                <input type="tel" class="form-control" placeholder="Your Phone" id="cf-number" name="phone" required="">
                           </div>

                           {{-- <div class="col-md-6 col-sm-6">
                                <select class="form-control" id="cf-budgets" name="budgets">
                                     <option>Budget Level</option>
                                     <option>$500 to $1,000</option>
                                     <option>$1,000 to $2,200</option>
                                     <option>$2,200 to $4,500</option>
                                     <option>$4,500 to $7,500</option>
                                     <option>$7,500 to $12,000</option>
                                     <option>$12,000 or more</option>
                                </select>
                           </div> --}}

                           <div class="col-md-12 col-sm-12">
                                <textarea class="form-control" rows="6" placeholder="Your requirements" id="cf-message" name="message" required=""></textarea>
                           </div>

                           <div class="col-md-4 col-sm-12">
                                <input type="submit" class="form-control" name="submit" value="Send Message">
                           </div>

                      </form>
                 </div>

                 <div class="col-md-4 col-sm-4">
                      <div class="google-map">
  <!-- How to change your own map point
         1. Go to Google Maps
         2. Click on your location point
         3. Click "Share" and choose "Embed map" tab
         4. Copy only URL and paste it within the src="" field below
  -->
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" allowfullscreen></iframe>
                      </div>
                 </div>

            </div>
       </div>
  </section>

   {{-- @include('frontend.layouts.contact-me') --}}
{{-- @yield('contact') --}}

  <!-- FOOTER -->
  <footer data-stellar-background-ratio="0.5">
       <div class="container">
            <div class="row">

                 <div class="col-md-3 col-sm-3">
                      <div class="footer-thumb">
                           <h2>Menu</h2>

                           <ul class="footer-link">
                                 <li><a href="#about">About</a></li>
                                <li><a href="#reference">Reference</a></li>
                                <li><a href="#skills">Skills</a></li>
                                <li><a href="#project">Project</a></li>
                                <li><a href="#work">My Work</a></li>
                                <li><a href="#experience">My Experience</a></li>
                           </ul>
                      </div>
                 </div>

                 <div class="col-md-3 col-sm-3">
                      <div class="footer-thumb">
                           <h2>Services</h2>
                           <ul class="footer-link">
                                <li><a href="#">Web-site Design</a></li>
                                <li><a href="#">Web-site Development</a></li>
                                <li><a href="#">Management System</a></li>
                                <li><a href="#">Machine Learning</a></li>
                           </ul>
                      </div>
                 </div>

                 <div class="col-md-3 col-sm-3">
                      <div class="footer-thumb">
                           <h2>Find me</h2>
                           <p>House No : 99/2,<br>Road No : 04   </p>
                           <p>Badda, Dhaka: 1212 <br> Adarshanagar, Middle Badda,  </p>
                           <p>afifauttara444@gmail.com</p>
                      </div>
                 </div>

                 <div class="col-md-12 col-sm-12">
                      <div class="footer-bottom">
                           <div class="col-md-6 col-sm-5">
                                <div class="copyright-text">
                                     <p>Copyright &copy; 2021 Afifa Protfolio</p>
                                </div>
                           </div>
                           <div class="col-md-6 col-sm-6">
                                <div class="phone-contact">
                                     <p>Call me <span>(+88) 01771567123, 01632060939 </span></p>
                                </div>

                                <ul class="social-icon">

                                     <li><a href="https://www.facebook.com/afifa.adil.5"><i class="fa fa-facebook-square"></i></a></li>

                                </ul>
                           </div>
                      </div>
                 </div>

            </div>
       </div>
  </footer>


  <!-- MODAL -->
  <section class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-lg">
            <div class="modal-content modal-popup">

                 <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                      </button>
                 </div>

                 <div class="modal-body">
                      <div class="container-fluid">
                           <div class="row">

                                <div class="col-md-12 col-sm-12">
                                     <div class="modal-title">
                                          <h2>Hydro Co</h2>
                                     </div>

                                     <!-- NAV TABS -->
                                     <ul class="nav nav-tabs" role="tablist">
                                          <li class="active"><a href="#sign_up" aria-controls="sign_up" role="tab" data-toggle="tab">Create an account</a></li>
                                          <li><a href="#sign_in" aria-controls="sign_in" role="tab" data-toggle="tab">Sign In</a></li>
                                     </ul>

                                     <!-- TAB PANES -->
                                     <div class="tab-content">
                                          <div role="tabpanel" class="tab-pane fade in active" id="sign_up">
                                               <form action="#" method="post">
                                                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                                                    <input type="telephone" class="form-control" name="telephone" placeholder="Telephone" required>
                                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                    <input type="submit" class="form-control" name="submit" value="Submit Button">
                                               </form>
                                          </div>

                                          <div role="tabpanel" class="tab-pane fade in" id="sign_in">
                                               <form action="#" method="post">
                                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                    <input type="submit" class="form-control" name="submit" value="Submit Button">
                                                    <a href="https://www.facebook.com/templatemo">Forgot your password?</a>
                                               </form>
                                          </div>
                                     </div>
                                </div>

                           </div>
                      </div>
                 </div>

            </div>
       </div>
  </section>

{{-- @include('frontend.layouts.footer') --}}



@endsection
