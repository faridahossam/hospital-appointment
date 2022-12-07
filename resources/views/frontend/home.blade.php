@extends('frontend.headerFooter')
@section('content')
<!-- MENU -->
<section class="navbar navbar-default navbar-static-top" role="navigation">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>

               <!-- lOGO TEXT HERE -->
               <a href="index.html" class="navbar-brand"><i class="fa fa-h-square"></i>ealth Center</a>
          </div>

          <!-- MENU LINKS -->
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li><a href="#top" class="smoothScroll">Home</a></li>
                    <li><a href="#about" class="smoothScroll">About Us</a></li>
                    <li><a href="#team" class="smoothScroll">Doctors</a></li>
                    <li><a href="#footer" class="smoothScroll">Contact</a></li>
                    @if (Auth::user()->hasRole('Admin'))
                    <li class="nav-item">
                    <a href="{{url('admin')}}" class="smoothScroll">Dashboard</a></li>
                    </li>
                    @endif
                    <li class="appointment-btn"><a href="#appointment">Make an appointment</a></li>
                    <li class="logout-btn">
                         <form id="logout-form" action="{{ url('logout') }}" method="POST">
                              {{ csrf_field() }}
                              <a href="{{ url('logout') }}"
                                   onclick="event.preventDefault(); this.closest('form').submit();">Log out</a>
                         </form>
                    </li>
               </ul>
          </div>

     </div>
</section>


<!-- HOME -->
<section id="home" class="slider" data-stellar-background-ratio="0.5">
     <div class="container">
          @if(session()->has('message'))

          <div class="alert alert-success">
               <button type="button" class="close" data-dismiss="alert">
                    x
               </button>
               {{session()->get('message')}}
          </div>
          @endif
          <div class="row">

               <div class="owl-carousel owl-theme">
                    <div class="item item-first">
                         <div class="caption">
                              <div class="col-md-offset-1 col-md-10">
                                   <h3>Let's make your life happier</h3>
                                   <h1>Healthy Living</h1>
                                   <a href="#team" class="section-btn btn btn-default smoothScroll">Meet Our Doctors</a>
                              </div>
                         </div>
                    </div>

                    <div class="item item-second">
                         <div class="caption">
                              <div class="col-md-offset-1 col-md-10">
                                   <h1>New Lifestyle</h1>
                                   <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">More About
                                        Us</a>
                              </div>
                         </div>
                    </div>

                    <div class="item item-third">
                         <div class="caption">
                              <div class="col-md-offset-1 col-md-10">
                                   <h1>Your Health Benefits</h1>
                              </div>
                         </div>
                    </div>
               </div>

          </div>
     </div>
</section>


<!-- ABOUT -->
<section id="about">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-6">
                    <div class="about-info">
                         <h2 class="wow fadeInUp" data-wow-delay="0.6s">Welcome to Your <i
                                   class="fa fa-h-square"></i>ealth Center</h2>
                         <figure class="profile wow fadeInUp" data-wow-delay="1s">
                              <img src="images/author-image.jpg" class="img-responsive" alt="">
                              <figcaption>
                                   <h3>Dr. Neil Jackson</h3>
                                   <p>General Principal</p>
                              </figcaption>
                         </figure>
                    </div>
               </div>

          </div>
     </div>
</section>


<!-- TEAM -->
<section id="team" data-stellar-background-ratio="1">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-6">
                    <div class="about-info">
                         <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Doctors</h2>
                    </div>
               </div>

               <div class="clearfix"></div>

               <div class="col-md-4 col-sm-6">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                         <img src="images/team-image1.jpg" class="img-responsive" alt="">

                         <div class="team-info">
                              <h3>Nate Baston</h3>
                              <p>General Practice</p>
                              <div class="team-contact-info">
                                   <p><i class="fa fa-phone"></i> 010-020-0120</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">general@company.com</a></p>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                   <li><a href="#" class="fa fa-envelope-o"></a></li>
                              </ul>
                         </div>

                    </div>
               </div>

               <div class="col-md-4 col-sm-6">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                         <img src="images/team-image2.jpg" class="img-responsive" alt="">

                         <div class="team-info">
                              <h3>Jason Stewart</h3>
                              <p>Pediatrics</p>
                              <div class="team-contact-info">
                                   <p><i class="fa fa-phone"></i> 010-070-0170</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">pediatrics@company.com</a></p>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square"></a></li>
                                   <li><a href="#" class="fa fa-envelope-o"></a></li>
                                   <li><a href="#" class="fa fa-flickr"></a></li>
                              </ul>
                         </div>

                    </div>
               </div>

               <div class="col-md-4 col-sm-6">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                         <img src="images/team-image3.jpg" class="img-responsive" alt="">

                         <div class="team-info">
                              <h3>Miasha Nakahara</h3>
                              <p>Radiology</p>
                              <div class="team-contact-info">
                                   <p><i class="fa fa-phone"></i> 010-040-0140</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">radiology@company.com</a></p>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-envelope-o"></a></li>
                              </ul>
                         </div>

                    </div>
               </div>

          </div>
     </div>
</section>


<!-- MAKE AN APPOINTMENT -->
<section id="appointment" data-stellar-background-ratio="3">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-6">
                    <img src="images/appointment-image.jpg" class="img-responsive" alt="">
               </div>

               <div class="col-md-6 col-sm-6">
                    <!-- CONTACT FORM HERE -->
                    <form id="appointment-form" role="form" action="{{url('addAppointment')}}" method="post">
                         @csrf
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                              <h2>Make an appointment</h2>
                         </div>

                         <div class="wow fadeInUp" data-wow-delay="0.8s">

                              <!-- Date-->
                              <div class="col-md-6 col-sm-6">
                                   <label for="date">Select Date</label>
                                   <input type="date" name="date" value="" class="form-control">
                              </div>

                              <!--note:timepicker could be used but to make available waiting time and customize diagosis time I used select option-->
                              <!-- assuming diagnosis time takes 20 seconds and waiting time 10 minutes-->
                              <div class="col-md-6 col-sm-6">
                                   <label for="time">Select Time</label>
                                   <div>
                                        <select name="time" style="text-align:center; width:60%;">
                                             <option value="12:00-12:20">12:00-12:20 PM</option>
                                             <option value="12:30-12:50">12:30-12:50 PM</option>
                                             <option value="13:00-13:20">13:00-13:20 PM</option>
                                             <option value="13:30-13:50">13:30-13:50 PM</option>
                                             <option value="14:00-14:20">14:00-14:20 PM</option>
                                             <option value="14:30-14:50">14:30-14:50 PM</option>
                                             <option value="15:00-15:20">15:00-15:20 PM</option>
                                             <option value="16:30-16:50">16:30-16:50 PM</option>
                                             <option value="17:00-17:20">17:00-17:20 PM</option>
                                             <option value="17:30-17:50">17:30-17:50 PM</option>
                                             <option value="18:00-18:20">18:00-18:20 PM</option>
                                             <option value="18:30-18:50">18:30-18:50 PM</option>
                                             <option value="19:00-19:20">19:00-19:20 PM</option>
                                             <option value="19:30-19:50">19:30-19:50 PM</option>
                                             <option value="20:00-20:20">20:00-20:20 PM</option>
                                             <option value="20:30-20:50">20:30-20:50 PM</option>
                                        </select>
                                   </div>
                              </div>

                              <!--specialization-->
                              <div>
                                   <label for="select" style="width:60%; text-align:left;">Select Specialization</label>
                                   <select class="form-control" name="speciality">
                                        @foreach($speciality as $specialities)
                                        <option value="{{$specialities->id}}">{{$specialities->name}}</option>
                                        @endforeach
                                   </select>
                              </div>
                              <button type="submit" class="form-control" id="cf-submit" name="submit">Submit</button>
                         </div>
                    </form>
               </div>

          </div>
     </div>
</section>
@stop