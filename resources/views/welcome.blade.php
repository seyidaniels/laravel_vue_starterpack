@extends('layouts.index')
@section('content')
<div class="wrapper">
    <div class="page-header page-header-custom clear-filter">
        <div class="page-header-image bg-overlay"  id="particles-js" data-parallax="true">
        </div>
        <div class="container">
            <div class="content-center brand text-left">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="mb-4 exh ">Professor Ogundipe <span class="text-orange">Innovative</span> Challenge</h2>
                        <p class="text-white">Do you have an innovative idea or technology-driven solution? Apply for POIC</p>


                        <h5 class="m-4">Application opens in <span id="countdown" class="text-orange" ></span> </h5>

                        <!-- <a class=" btn btn-lg btn-orange text-left" href="{{URL('dashboard')}}"> Apply Now
                            <span class="pull-right fa fa-chevron-right"></span>
                        </a>
                        <a class=" text-orange text-left ml-4" href="{{URL('dashboard')}}"> Learn More
                            </a> -->
                    </div>
                    <div class="col-md-4">
                        <img style="height: 600px; width: 350px" src="/landing/assets/img/home-head.png" class="img-fluid land-illust" alt="">
                    </div>
                </div>

            </div>
        </div>
        <button href="#" id="arrow-down" class="float">
                <i class="fa fa-arrow-down my-float"></i>
        </button>
    </div>
    <div class="main">
        <div class="about" id="about">
                <div class="container">
                        <div class="row">
                                <div class="col-md-12">
                                   <div class="bio-border">
                                       <div class="row">
                                           <div class="col-md-4">
                                                <h2 class="font-weight-bold mt-1">Who is Professor Ogundipe?</h2>
                                                <img src="/dashboard_assets/assets/img/covers/aut-size-cover.png"  class="img-fluid img-responsive" alt="">
                                           </div>

                                           <div class="col-md-8">

                                                <p class="text-justify"> Proffesor Oluwatoyin Temitayo Ogundipe (born 31 May 1960) is a Nigerian academic, author and a Professor of botany. </p>
                                                <p class="text-justify"> He is the 12th substantive Vice-Chancellor of University of Lagos. He attended the University of Ife (now Obafemi Awolowo University) where he obtained a Bachelor of science (B.Sc.) degree in Botany. He holds a master's degree in Botany from the University of Ife and Doctorate degree (Ph.D.) from the same University. Thereafter, he obtained a master's degree in Business Administration from the University of Lagos and bagged a certificate of attendance from University of Reading in 1998.</p>
                                                   <p class="text-justify"> Professor Ogundipe began his academic career at the University of Lagos as a lecturer where he rose to the rank of professor of Botany in 2002. He was Dean, School of Postgraduate Studies from August 2007 to July 2011 and Director, Academic Planning Unit April 2012 to April 2016. He was appointed as the vice chancellor of the University of Lagos in November 2017 having emerged highest in the interview conducted, beating Professor Olukayode Amund, and Professor Ayodeji Olukoju to the post.</p>
                                                    <p class="text-justify"> Until his appointment in November, he was the deputy vice chancellor of the University of Lagos. </p>
                                                      <p class="text-justify"> Toyin Ogundipe is married with children</p>

                                           </div>
                                       </div>



                                   </div>
                                </div>

                            </div>
                </div>

        </div>

        <div class="about-poic">

             <div class="container-fluid">
                    <div class="row">
                            <div class="col-md-4">
                               <img src="/landing/assets/img/layer.png" alt="">
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-5 mt-4">
                                   <h3 class="mb-0 font-weight-bold text-right underline"  > About the challenge </h3>
                                   <div class="container mt-4">
                                       <p class="text-justify">
                                            Over the years, in a bid to make sure their idea come to life, Nigerian students become outbound thereby sourcing out their potentials. A staggering amount of 170,000+ students Left the country between year 2015-2018.
                                       </p>
                                       <p class="text-justify">
                                            Now narrowing it down to our faculty. Early November, after it was discovered that the annual Faculty Of Science Lecture wouldn’t hold for 2018/19 academic session. We were tasked with the challenge of creating an engaging program and at the same time solving. a societal problem. A lot of thinking went into this process.
                                       </p>
                                       <p class="text-justify">
                                            We reiterated a couple of times before finally concluding on an innovation challenge. This will help in engaging the minds of students and at the same time broaden their horizon when it comes to thinking. The Power of an innovative mind is one that can’t be overemphasized.
                                       </p>
                                   </div>
                            </div>
                        </div>
             </div>

        </div>

        <div class="need-cash">
            <div class="container">
                <div class="cash-content text-center text-white">
                    <h3 class="mb-0 font-weight-bold">Got a Ground Breaking Innovative Idea ?</h3>
                    <p>Compete with over 200 Students from Nigerian Universities to win the grand prize of  <span class="text-orange">3 Million Naira</span> </p>
                     <a class=" btn btn-lg btn-orange text-center" href="{{URL('dashboard')}}">See Rules and Guidlines
                            <span class="pull-right fa fa-chevron-right"></span>
                        </a>
                </div>
            </div>
        </div>

        <div class="questions">
            <div class="container">
                <div class="questions-content text-center">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mt-5 mb-0 font-weight-bold">got Inquiries?</h3>
                            <p>For Sponsorship and Contact details, we are ready to heed your calls</p>
                            <a class=" btn btn-lg btn-orange text-center" data-toggle="modal" data-target="#contactForm" >Message
                                </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


    <!-- Contact Modal -->
                <!-- Modal Core -->
                <div class="modal fade" id="contactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Contact Us</h4>
                      </div>
                      <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <input type="text" class= "form-control-md form-control contact-input partss" placeholder="Name" ">
                            </div>
                            <div class="form-group">
                                <input type="email" class= "form-control-md form-control contact-input partss" placeholder="Email Address" ">
                            </div>
                            <div class="form-group"><!--
                                <input type="email" class= "form-control-md form-control contact-input partss" placeholder="Email Address" "> -->
                                <textarea class="form-control message-in" placeholder="Message" name="" rows="10"></textarea>
                            </div>
                            <button class="nav-link btn btn-lg btn-orange text-center btn-block">Send a Message</button>
                        </form>
                      </div>
                      <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-info btn-simple">Save</button>
                      </div> -->
                    </div>
                  </div>
                </div>

                <!-- Contact Modal -->

 </div>
@endsection
