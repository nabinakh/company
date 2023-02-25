@extends('frontend/home')
@section('content')
<section class="iq-works main-bg position-relative">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <div class="section-title">
                <p class="mt-2 text-uppercase text-white iq-fw-3 iq-ls-3">it's perfect way</p>
                <h2 class="title text-white  iq-fw-8">How Does Markethon Works</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 text-center">
              <div class="iq-workinfo">
                <div class="service-shap  mb-4 iq-rmt-40">
                  <img src="{{asset('frontend/images/work/01.png')}}" class="img-fluid " alt="">
                </div>
                <h3 class="title text-white">1. Planning</h3>
                <span class="mb-0 text-uppercase text-white iq-fw-3 iq-ls-1">make you different</span>
              </div>
            </div>
            <div class="col-lg-4 text-center">
              <div class="iq-workinfo">
                <div class="service-shap  mb-4 iq-rmt-40">
                  <img src="{{asset('frontend/images/work/02.png')}}" class="img-fluid " alt="">
                </div>
                <h3 class="title text-white">2. Development</h3>
                <span class="mb-0 text-uppercase text-white iq-fw-3 iq-ls-1">make you different</span>
              </div>
            </div>
            <div class="col-lg-4 text-center">
              <div class="iq-workinfo">
                <div class="service-shap  mb-4 iq-rmt-40">
                  <img src="{{asset('frontend/images/work/03.png')}}" class="img-fluid " alt="">
                </div>
                <h3 class="title text-white">3. Launching</h3>
                <span class="mb-0 text-uppercase text-white iq-fw-3 iq-ls-1">make you different</span>
              </div>
            </div>
          </div>
        </div>
        <div class="iq-way">
          <img src="{{asset('frontend/images/work/2.png')}}" class="img-fluid"  alt="image">
        </div>
      </section>
      <!-- Works END -->
      <div class="iq-video overview-block-pb position-relative">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-9">
              <div class="position-relative">
                <img  src="{{asset('frontend/images/video/2.png')}}" class="img-fluid w-100" alt="">
                <div class="waves-box">
                  <a href="https://www.youtube.com/watch?v=0O2aH4XLbto" class="video-play  popup-youtube" ><i class="fas fa-play"></i></a>
                  <div class="iq-waves">
                    <div class="waves wave-1"></div>
                    <div class="waves wave-2"></div>
                    <div class="waves wave-3"></div>
                  </div>
                </div>
                <div class="video-people">
                  <div class="scrollme">
                    <img src="{{asset('frontend/images/video/1.png')}}" class="img-fluid one animateme"
                    data-when="span"
                    data-from="1"
                    data-to="0"
                    data-translatex="-300" alt="image">
                  </div>
                  <div class="scrollme">
                    <img src="{{asset('frontend/images/video/3.png')}}" class="img-fluid two animateme"
                    data-when="span"
                    data-from="1"
                    data-to="0"
                    data-translatex="300" alt="image">
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- Choose From  -->
      <section class="iq-choose-info">
        <div class="container">
          <div class="row flex-row-reverse">
            <div class="col-lg-6 align-self-center text-center">
              <img src="{{asset('frontend/images/others/3.png')}}" class="img-responsive img-fluid wow fadeInRight" id="img" alt="image">
            </div>
            <div class="col-lg-6 align-self-center img-fluid wow fadeInLeft">
              <h2 class="iq-fw-8 mb-2 iq-mt-40">Digital Marketing Principles</h2>
              <p class="mb-3">Progravida nibh vel velit auctor alinean sollicitudin, lorem quis bibendum auctor.</p>

              <ul class="iq-project-info">
                <li>
                  <div class="media service-info mt-0 mb-0">
                    <div class="service-shap"><i class="ion-ios-cloud-download-outline"></i></div>
                    <div class="media-body ml-3">
                      <h5 class="mt-0 mb-2 iq-fw-8"><a href="service-detail.html">Data Analysis</a></h5>
                      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur auctor alinean sollicitudin, lorem quis bibendum auctor</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media service-info mt-0 mb-0">
                    <div class="service-shap"><i class="ion-ios-pie-outline"></i></div>
                    <div class="media-body ml-3">
                      <h5 class="mt-0 mb-2 iq-fw-8"><a href="service-detail.html">PPC Marketing</a></h5>
                      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur auctor alinean sollicitudin, lorem quis bibendum auctor</p>
                    </div>
                  </div>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- Choose From END -->
      <!-- Choose From  -->
      <section class="iq-solutions position-relative iq-rmt-40">
        <div class="container">
          <div class="row flex-row-reverse">
            <div class="col-lg-6 align-self-center wow fadeInRight">
              <h2 class="iq-fw-8 mb-2">Content Marketing Is A Commitment</h2>
              <p class="mb-3">Progravida nibh vel velit auctor alinean sollicitudin, lorem quis bibendum auctor.</p>

              <div class="progressbar text-center " data-animate="false">
                <div class="circle green" data-percent="76">
                  <div>76%</div>
                  <p class="iq-progress-bar-text mt-3 font-c iq-fw-8 text-black">Marketing</p>
                </div>
              </div>
              <div class="progressbar text-center light-purple" data-animate="false">
                <div class="circle light-purple" data-percent="62">
                  <div>62%</div>
                  <p class="iq-progress-bar-text mt-3 font-c iq-fw-8 text-black">Analytics</p>
                </div>
              </div>
              <div class="progressbar text-center purple" data-animate="false">
                <div class="circle purple" data-percent="84">
                  <div>84%</div>
                  <p class="iq-progress-bar-text mt-3 font-c iq-fw-8 text-black">Planning</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 text-center wow fadeInLeft">
              <img src="{{asset('frontend/images/others/2.jpg')}}" class="img-fluid iq-rmt-40" alt="image">
            </div>
          </div>
        </div>
      </section>
      <!-- Choose From END -->
      <!-- Project  -->
      <section class="iq-project position-relative pt-0">
        <div class="scrollme">
          <img src="{{asset('frontend/images/others/13.png')}}" class="img-fluid project-overlay-left animateme"
          data-when="enter"
          data-from="0.5"
          data-to="0"
          data-translatey="100" alt="image">
        </div>
        <div class="container">
          <div class="row mb-3 align-items-center">
            <div class="col-lg-6 ">
              <h2  class="display-2  iq-fw-9 d-inline-block title"><span class="counter">1520</span> <sup class=" d-inline-block">+</sup></h2>
              <h3 class="d-inline-block  iq-fw-8">Project Done.</h3>
            </div>
            <div class="col-lg-6 ">
              <a class="slide-button button float-right explore-btn" href="portfolio.html">
                <div class="first">Explore All</div>
                <div class="second">Explore All</div>
              </a>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div id="portfolio-carousel" class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="false" data-items="4" data-items-laptop="3" data-items-tab="3" data-items-mobile="1" data-items-mobile-sm="1" data-margin="30">
                <div class="item">
                  <div class="iq-portfolio">
                    <img src="{{asset('frontend/images/project/1.png')}}" class="img-fluid" alt="image">
                    <div class="portfolio-info">
                      <a href="#"><span class="text-black">Design Concept</span></a>
                      <a href="#" class="text-uppercase text-gray float-right">Design</a>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="iq-portfolio">
                    <img src="{{asset('frontend/images/project/2.png')}}" class="img-fluid" alt="image">
                    <div class="portfolio-info">
                      <a href="#"><span class="text-black">Design Concept</span></a>
                      <a href="#" class="text-uppercase text-gray float-right">Design</a>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="iq-portfolio">
                    <img src="{{asset('frontend/images/project/3.png')}}" class="img-fluid" alt="image">
                    <div class="portfolio-info">
                      <a href="#"><span class="text-black">Design Concept</span></a>
                      <a href="#" class="text-uppercase text-gray float-right">Design</a>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="iq-portfolio">
                    <img src="{{asset('frontend/images/project/4.png')}}" class="img-fluid" alt="image">
                    <div class="portfolio-info">
                      <a href="#"><span class="text-black">Design Concept</span></a>
                      <a href="#" class="text-uppercase text-gray float-right">Design</a>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="iq-portfolio">
                    <img src="{{asset('frontend/images/project/1.png')}}" class="img-fluid" alt="image">
                    <div class="portfolio-info">
                      <a href="#"><span class="text-black">Design Concept</span></a>
                      <a href="#" class="text-uppercase text-gray float-right">Design</a>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="iq-portfolio">
                    <img src="{{asset('frontend/images/project/2.png')}}" class="img-fluid" alt="image">
                    <div class="portfolio-info">
                      <a href="#"><span class="text-black">Design Concept</span></a>
                      <a href="#" class="text-uppercase text-gray float-right">Design</a>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="iq-portfolio">
                    <img src="{{asset('frontend/images/project/3.png')}}" class="img-fluid" alt="image">
                    <div class="portfolio-info">
                      <a href="#"><span class="text-black">Design Concept</span></a>
                      <a href="#" class="text-uppercase text-gray float-right">Design</a>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="iq-portfolio">
                    <img src="{{asset('frontend/images/project/4.png')}}" class="img-fluid" alt="image">
                    <div class="portfolio-info">
                      <a href="#"><span class="text-black">Design Concept</span></a>
                      <a href="#" class="text-uppercase text-gray float-right">Design</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Project END -->
      <!-- Works -->
      <section class="iq-works position-relative pt-0">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <div class="section-title">
                <p class="mt-2 text-uppercase iq-fw-3 iq-ls-3">Best Ever Services</p>
                <h2 class="title  iq-fw-8">What We Offer</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="services purple " >
                <div class="services-info">
                  <div class="service-shap purple"><i class="ion-ios-cloud-download-outline"></i></div>
                  <h5 class="float-left mt-4">Data Analysis</h5>
                  <div class="clearfix"></div>
                  <p class="mt-3 mb-0">Progravida nibh vel velit auctor alinean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.</p>
                </div>
                <a href="service.html" class="button-info">Read More <span class="float-right">. . .</span></a>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="services purple " >
                <div class="services-info">
                  <div class="service-shap purple"><i class="ion-ios-bookmarks-outline"></i></div>
                  <h5 class="float-left mt-4">PPC Marketing</h5>
                  <div class="clearfix"></div>
                  <p class="mt-3 mb-0">Progravida nibh vel velit auctor alinean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.</p>
                </div>
                <a href="service.html" class="button-info">Read More <span class="float-right">. . .</span></a>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="services purple mb-lg-0 " >
                <div class="services-info">
                  <div class="service-shap purple"><i class="ion-ios-pie-outline"></i></div>
                  <h5 class="float-left mt-4">Business Analytics</h5>
                  <div class="clearfix"></div>
                  <p class="mt-3 mb-0">Progravida nibh vel velit auctor alinean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.</p>
                </div>
                <a href="service.html" class="button-info">Read More <span class="float-right">. . .</span></a>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="services purple mb-lg-0" >
                <div class="services-info">
                  <div class="service-shap purple"><i class="ion-ios-world-outline"></i></div>
                  <h5 class="float-left mt-4">Social media marketing</h5>
                  <div class="clearfix"></div>
                  <p class="mt-3 mb-0">Progravida nibh vel velit auctor alinean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.</p>
                </div>
                <a href="service.html" class="button-info">Read More <span class="float-right">. . .</span></a>
              </div>
            </div>
          </div>
        </div>
        <img src="{{asset('frontend/images/others/16.png')}}" class="img-fluid iqwork-two" alt="image">
      </section>
      <!-- Works END -->
      <!-- Our Clients -->
      <section class="iq-ourclients iq-rmt-40">
        <div class="scrollme">
          <img src="{{asset('frontend/images/service/1.png')}}"  class="img-fluid service-one animateme"
          data-when="enter"
          data-from="0.5"
          data-to="0"
          data-translatey="500" alt="image">
        </div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <div class="section-title">
                <p class="mt-2 text-uppercase iq-fw-3 iq-ls-3">Testimonial</p>
                <h2 class="title  iq-fw-8">Our Client Say</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div id="testimonial-slider" class="owl-carousel owl-theme owl-loaded iq-mt-50" data-dots="true" data-nav="true" data-items="1" data-xs-items="1" data-sm-items="1" data-md-items="1" data-lg-items="1" data-autoplay="true">
                <div class="testimonial-box">
                  <img src="{{asset('frontend/images/testimonials/01.jpg ')}}" class="img-fluid mb-3 img-shap " alt="">
                  <p class="description">
                    Progravida nibh vel velit auctor alinean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.
                  </p>
                  <h6>Nik Jorden <span><strong class="text-black">CEO -</strong><span class="iq-fw-4 ml-0"> Markethon</span></span></h6>
                </div>
                <div class="testimonial-box">
                  <img src="{{asset('frontend/images/testimonials/02.jpg')}}" class="img-fluid mb-3 img-shap " alt="">
                  <p class="description">
                    Progravida nibh vel velit auctor alinean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.
                  </p>
                  <h6>Kips Leo <span><strong class="text-black">CEO -</strong><span class="iq-fw-4 ml-0"> Markethon</span></span></h6>
                </div>
                <div class="testimonial-box">
                  <img src="{{asset('frontend/images/testimonials/03.jpg')}}" class="img-fluid mb-3 img-shap " alt="">
                  <p class="description">
                    Progravida nibh vel velit auctor alinean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.
                  </p>
                  <h6>Haris Morgan <span><strong class="text-black">CEO -</strong><span class="iq-fw-4 ml-0"> Markethon</span></span></h6>
                </div>
                <div class="testimonial-box">
                  <img src="{{asset('frontend/images/testimonials/04.jpg')}}" class="img-fluid mb-3 img-shap " alt="">
                  <p class="description">
                    Progravida nibh vel velit auctor alinean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.
                  </p>
                  <h6>JD Scot<span><strong class="text-black">CEO -</strong><span class="iq-fw-4 ml-0"> Markethon</span></span></h6>
                </div>
                <div class="testimonial-box">
                  <img src="{{asset('frontend/images/testimonials/05.jpg')}}" class="img-fluid mb-3 img-shap " alt="">
                  <p class="description">
                    Progravida nibh vel velit auctor alinean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.
                  </p>
                  <h6>Nils Wilson <span><strong class="text-black">CEO -</strong><span class="iq-fw-4 ml-0"> Markethon</span></span></h6>
                </div>
                <div class="testimonial-box">
                  <img src="{{asset('frontend/images/testimonials/06.jpg')}}" class="img-fluid mb-3 img-shap " alt="">
                  <p class="description">
                    Progravida nibh vel velit auctor alinean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.
                  </p>
                  <h6>Larry Page <span><strong class="text-black">CEO -</strong><span class="iq-fw-4 ml-0"> Markethon</span></span></h6>
                </div>
                <div class="testimonial-box">
                  <img src="{{asset('frontend/images/testimonials/07.jpg')}}" class="img-fluid mb-3 img-shap " alt="">
                  <p class="description">
                    Progravida nibh vel velit auctor alinean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.
                  </p>
                  <h6>Haris Morgan <span><strong class="text-black">CEO -</strong><span class="iq-fw-4 ml-0"> Markethon</span></span></h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Our Clients END -->
      <!-- Pricing -->
      <section class="iq-pricingplan">
        <div class="container">
          <div class="row">

            <div class="col-sm-12 text-center">
              <div class="section-title">
                <p class="mt-2 text-uppercase iq-fw-3 iq-ls-3">Best Ever Price</p>
                <h3 class="title iq-fw-8">Our Flexible Pricing Plans</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row  no-gutters ">
            <div class="col-lg-12">
              <div class=" pricing-info">
                <div class="row">
                  <div class="col-lg-2 col-sm-12"> <img src="{{asset('frontend/images/pricing/1.png')}}" class="img-fluid" alt="image"></div>
                  <div class="col-lg-7 col-sm-12 align-self-center">
                    <div class="pricing-plan">
                      <div class="section-title mb-3">
                        <h3 class="title iq-fw-8 ">Starter</h3>
                      </div>
                      <div class="row ">
                        <div class="col-sm-12">
                          <ul class="pricing-list">
                            <li class="item"><i class="fa fa-check-circle text-green mr-2"></i>Email Marketing</li>
                            <li class="item"><i class="fas fa-times-circle main-color mr-2"></i>Content Marketing</li>
                            <li class="item"><i class="fa fa-check-circle  text-green mr-2"></i>Voice Optimize</li>
                            <li class="item"><i class="fas fa-times-circle main-color mr-2"></i>SEO Consulting</li>
                            <li class="item"><i class="fas fa-times-circle main-color mr-2"></i>Video Marketing</li>
                            <li class="item"><i class="fa fa-check-circle text-green mr-2"></i>Advertising</li>
                          </ul>
                        </div>
                      </div>
                    </div>


                  </div>
                  <div class="col-lg-3 col-sm-12 text-center align-self-center">
                    <h2 class="price iq-fw-8">$29 <span class="text-gray iq-font-18 iq-fw-6">/ Per Month </span></h2>
                    <a class="slide-button button" href="#">
                      <div class="first">Purchase</div>
                      <div class="second">Purchase</div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class=" pricing-info active border-top-0 border-bottom-0">
                <div class="row">
                  <div class="col-lg-2 col-sm-12"> <img src="{{asset('frontend/images/pricing/2.png')}}" class="img-fluid" alt="image"></div>
                  <div class="col-lg-7 col-sm-12 align-self-center">
                    <div class="pricing-plan">
                      <div class="section-title mb-3">
                        <h3 class="title iq-fw-8 ">Enterprice</h3>
                      </div>
                      <div class="row ">
                        <div class="col-sm-12">
                          <ul class="pricing-list">
                            <li class="item"><i class="fa fa-check-circle text-green mr-2"></i>Email Marketing</li>
                            <li class="item"><i class="fa fa-check-circle text-green mr-2"></i>Content Marketing</li>
                            <li class="item"><i class="fa fa-check-circle text-green mr-2"></i>Voice Optimize</li>
                            <li class="item"><i class="fas fa-times-circle main-color mr-2"></i>SEO Consulting</li>
                            <li class="item"><i class="fas fa-times-circle main-color mr-2"></i>Video Marketing</li>
                            <li class="item"><i class="fa fa-check-circle text-green mr-2"></i>Advertising</li>
                          </ul>
                        </div>
                      </div>
                    </div>


                  </div>
                  <div class="col-lg-3 col-sm-12 text-center align-self-center">
                    <h2 class="price iq-fw-8">$49 <span class="text-gray iq-font-18 iq-fw-6">/ Per Month </span></h2>
                    <a class="slide-button button" href="#">
                      <div class="first">Purchase</div>
                      <div class="second">Purchase</div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class=" pricing-info">
                <div class="row">
                  <div class="col-lg-2 col-sm-12"> <img src="{{asset('frontend/images/pricing/3.png')}}" class="img-fluid" alt="image"></div>
                  <div class="col-lg-7 col-sm-12 align-self-center">
                    <div class="pricing-plan">
                      <div class="section-title mb-3">
                        <h3 class="title iq-fw-8 ">Professional</h3>
                      </div>
                      <div class="row ">
                        <div class="col-sm-12">
                          <ul class="pricing-list">
                            <li class="item"><i class="fa fa-check-circle text-green mr-2"></i>Email Marketing</li>
                            <li class="item"><i class="fa fa-check-circle text-green mr-2"></i>Content Marketing</li>
                            <li class="item"><i class="fa fa-check-circle  text-green mr-2"></i>Voice Optimize</li>
                            <li class="item"><i class="fa fa-check-circle  text-green mr-2"></i>SEO Consulting</li>
                            <li class="item"><i class="fa fa-check-circle text-green mr-2"></i>Video Marketing</li>
                            <li class="item"><i class="fa fa-check-circle text-green mr-2"></i>Advertising</li>
                          </ul>
                        </div>
                      </div>
                    </div>


                  </div>
                  <div class="col-lg-3 col-sm-12 text-center align-self-center">
                    <h2 class="price iq-fw-8">$99 <span class="text-gray iq-font-18 iq-fw-6">/ Per Month </span></h2>
                    <a class="slide-button button" href="#">
                      <div class="first">Purchase</div>
                      <div class="second">Purchase</div>
                    </a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
      <!-- Pricing END -->
      <!-- Our Blog -->
      <section class="iq-blogs position-relative iq-rmt-40">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <div class="section-title">
                <p class="mb-0 text-uppercase iq-fw-5 iq-ls-2">Latest Articles</p>
                <h2 class="title iq-fw-8">Our Stories Post</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="owl-carousel"  data-loop="true" data-nav="false" data-dots="false" data-items="3" data-items-laptop="3" data-items-tab="2" data-items-mobile="1" data-items-mobile-sm="1">
                <div class="item">
                  <div class="main-blog">
                    <div class="blog-img">
                      <img src="{{asset('frontend/images/blog/01.jpg')}}" class="img-fluid" alt="image">
                    </div>
                    <div class="blog-detail">
                      <a class="main-color iq-fw-8" href="blog-details-left-sidebar.html">Design Concept</a>
                      <a href="blog-details-left-sidebar.html"><h5 class="mt-1 iq-fw-8">Fully dedicated finding.</h5></a>
                      <p class="mb-0">Progravida nibh vel velit auctor alinean sollicitudin.</p>
                      <div class="blog-info">
                        <a href="#"><img src="{{asset('frontend/images/blog/clients/01.jpg')}}" class="img-fluid rounded-circle mr-3 user-img" alt="image"><span class="iq-fw-8 font-c iq-font-18">John Deo</span></a>
                        <ul class="d-inline-block float-right">
                          <li class="d-inline-block"><a href="#"><i class="far fa-thumbs-up"></i> <span class="iq-fw-8 iq-font-14">90</span></a></li>
                          <li class="d-inline-block"><a href="#"><i class="far fa-comment-alt"></i> <span class="iq-fw-8 iq-font-14">120</span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="main-blog">
                    <div class="blog-img">
                      <img src="{{asset('frontend/images/blog/02.jpg')}}" class="img-fluid" alt="image">
                    </div>
                    <div class="blog-detail">
                      <a class="main-color iq-fw-8" href="blog-details-left-sidebar.html">Design Concept</a>
                      <a href="blog-details-left-sidebar.html"><h5 class="mt-1 iq-fw-8">Progravida nibh vel.</h5></a>
                      <p class="mb-0">Progravida nibh vel velit auctor alinean sollicitudin.</p>
                      <div class="blog-info">
                        <a href="#"><img src="{{asset('frontend/images/blog/clients/02.jpg')}}" class="img-fluid rounded-circle mr-3 user-img" alt="image"><span class="iq-fw-8 font-c iq-font-18">Kips Leo</span></a>
                        <ul class="d-inline-block float-right">
                          <li class="d-inline-block"><a href="#"><i class="far fa-thumbs-up"></i> <span class="iq-fw-8 iq-font-14">90</span></a></li>
                          <li class="d-inline-block"><a href="#"><i class="far fa-comment-alt"></i> <span class="iq-fw-8 iq-font-14">120</span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="main-blog">
                    <div class="blog-img">
                      <img src="{{asset('frontend/images/blog/03.jpg')}}" class="img-fluid" alt="image">
                    </div>
                    <div class="blog-detail">
                      <a class="main-color iq-fw-8" href="blog-details-left-sidebar.html">Design Concept</a>
                      <a href="blog-details-left-sidebar.html"><h5 class="mt-1 iq-fw-8">Auctor alinean.</h5></a>
                      <p class="mb-0">Progravida nibh vel velit auctor alinean sollicitudin.</p>
                      <div class="blog-info">
                        <a href="#"><img src="{{asset('frontend/images/blog/clients/03.jpg')}}" class="img-fluid rounded-circle mr-3 user-img" alt="image"><span class="iq-fw-8 font-c iq-font-18">Glen Jax </span></a>
                        <ul class="d-inline-block float-right">
                          <li class="d-inline-block"><a href="#"><i class="far fa-thumbs-up"></i> <span class="iq-fw-8 iq-font-14">90</span></a></li>
                          <li class="d-inline-block"><a href="#"><i class="far fa-comment-alt"></i> <span class="iq-fw-8 iq-font-14">120</span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="main-blog">
                    <div class="blog-img">
                      <img src="{{asset('frontend/images/blog/04.jpg')}}" class="img-fluid" alt="image">
                    </div>
                    <div class="blog-detail">
                      <a class="main-color iq-fw-8" href="blog-details-left-sidebar.html">Design Concept</a>
                      <a href="blog-details-left-sidebar.html"><h5 class="mt-1 iq-fw-8">Alinean sollicitudin.</h5></a>
                      <p class="mb-0">Progravida nibh vel velit auctor alinean sollicitudin.</p>
                      <div class="blog-info">
                        <a href="#"><img src="{{asset('frontend/images/blog/clients/04.jpg')}}" class="img-fluid rounded-circle mr-3 user-img" alt="image"><span class="iq-fw-8 font-c iq-font-18">JD Scot</span></a>
                        <ul class="d-inline-block float-right">
                          <li class="d-inline-block"><a href="#"><i class="far fa-thumbs-up"></i> <span class="iq-fw-8 iq-font-14">90</span></a></li>
                          <li class="d-inline-block"><a href="#"><i class="far fa-comment-alt"></i> <span class="iq-fw-8 iq-font-14">120</span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="main-blog">
                    <div class="blog-img">
                      <img src="{{asset('frontend/images/blog/02.jpg')}}" class="img-fluid" alt="image">
                    </div>
                    <div class="blog-detail">
                      <a class="main-color iq-fw-8" href="blog-details-left-sidebar.html">Design Concept</a>
                      <a href="blog-details-left-sidebar.html"><h5 class="mt-1 iq-fw-8">Fully dedicated finding.</h5></a>
                      <p class="mb-0">Progravida nibh vel velit auctor alinean sollicitudin.</p>
                      <div class="blog-info">
                        <a href="#"><img src="{{asset('frontend/images/blog/clients/05.jpg')}}" class="img-fluid rounded-circle mr-3 user-img" alt="image"><span class="iq-fw-8 font-c iq-font-18">Nils Leo</span></a>
                        <ul class="d-inline-block float-right">
                          <li class="d-inline-block"><a href="#"><i class="far fa-thumbs-up"></i> <span class="iq-fw-8 iq-font-14">90</span></a></li>
                          <li class="d-inline-block"><a href="#"><i class="far fa-comment-alt"></i> <span class="iq-fw-8 iq-font-14">120</span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="scrollme">
          <img src="{{asset('frontend/images/blog/05.png')}}" class="img-fluid blog-one animateme" data-when="exit"
          data-from="0.5"
          data-to="0"
          data-translatex="50"
          alt="#">
        </div>
      </section>
      <!-- Our Blog END -->
      <div class="iq-clients overview-block-ptb w-100  pt-0 d-inline-block">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <div class="section-title">
                <p class="mb-0 text-uppercase iq-fw-5 iq-ls-2">our partners</p>
                <h2 class="title iq-fw-8">Customers who love us</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div id="clients-slider" class="owl-carousel owl-theme owl-loaded " data-dots="false" data-nav="false" data-items="5" data-items-laptop="5" data-items-tab="4" data-items-mobile="3" data-items-mobile-sm="2" data-autoplay="true" data-margin="30">
              <div class="clients-box">
                <img src="{{asset('frontend/images/clients/9.png')}}" class="img-fluid " alt="">
              </div>
              <div class="clients-box">
                <img src="{{asset('frontend/images/clients/10.png')}}" class="img-fluid " alt="">
              </div>
              <div class="clients-box">
                <img src="{{asset('frontend/images/clients/11.png')}}" class="img-fluid " alt="">
              </div>
              <div class="clients-box">
                <img src="{{asset('frontend/images/clients/12.png')}}" class="img-fluid " alt="">
              </div>
              <div class="clients-box">
                <img src="{{asset('frontend/images/clients/9.png')}}" class="img-fluid " alt="">
              </div>
              <div class="clients-box">
                <img src="{{asset('frontend/images/clients/10.png')}}" class="img-fluid " alt="">
              </div>
              <div class="clients-box">
                <img src="{{asset('frontend/images/clients/11.png')}}" class="img-fluid " alt="">
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection