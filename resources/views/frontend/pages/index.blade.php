@extends('frontend.master')

@section('content')

        {{-- Slider --}}
        @include('frontend.layouts.slider')

        @include('frontend.layouts.banner')



        <section id="about" class="" data-bg-image="{{asset('public/frontend')}}/media/about/1.jpg">
            <div class="container "  >
                <div class="tab">
                    <div class="row">
                        <div class="col-md-3">
                            <ul class="tabs">
                                <li><a href="#">Message Of CEO</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Why Choose Us</a></li>
                                <li><a href="#">Why We Best</a></li>
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <div class="tab_content">
                            <div class="tabs_item clearfix"><img src="{{asset('/')}}{{$about->message_img}}" alt="Choose">
                                    <div class="content">
                                        <h4>Message of CEO</h4><br>
                                        <p>{{$about->message}}</p>
                                        <br>
                                        <p class="text-right">ES Creative 工業株式会社 <br> 代表取締役社長　高橋　忍</p>
                                      
                                    </div>
                                </div>
                                <div class="tabs_item clearfix"><img src="{{asset('/')}}{{$about->about_img}}" alt="Choose">
                                    <div class="content">
                                        <h4>About Us</h4>
                                    <p>{{$about->about}}</p>
                                        {{-- <ul class="list">
                                            <li><img src="{{asset('public/frontend')}}/media/about/3.png" alt="icon"> We Are the best for
                                                constraction you know</li>
                                            <li><img src="{{asset('public/frontend')}}/media/about/3.png" alt="icon"> Constraction is not only work
                                                it also passion</li>
                                            <li><img src="{{asset('public/frontend')}}/media/about/3.png" alt="icon"> We have 10000+ skilld and
                                                greatest worker</li>
                                            <li><img src="{{asset('public/frontend')}}/media/about/3.png" alt="icon"> You can see our previous work
                                                form gallery</li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="tabs_item clearfix"><img src="{{asset('/')}}{{$about->why_choose_img}}" alt="Choose">
                                    <div class="content">
                                        <h4>Why Choose Us?</h4>
                                    <p>{{$about->why_choose}}</p>
                                        {{-- <ul class="list">
                                            <li><img src="{{asset('public/frontend')}}/media/about/3.png" alt="icon"> We Are the best for
                                                constraction you know</li>
                                            <li><img src="{{asset('public/frontend')}}/media/about/3.png" alt="icon"> Constraction is not only work
                                                it also passion</li>
                                            <li><img src="{{asset('public/frontend')}}/media/about/3.png" alt="icon"> We have 10000+ skilld and
                                                greatest worker</li>
                                            <li><img src="{{asset('public/frontend')}}/media/about/3.png" alt="icon"> You can see our previous work
                                                form gallery</li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="tabs_item clearfix"><img src="{{asset('/')}}{{$about->why_best_img}}" alt="Choose">
                                    <div class="content">
                                        <h4>Why Are We Best?</h4>
                                    <p>{{$about->why_best}}</p>
                                        {{-- <ul class="list">
                                            <li><img src="{{asset('public/frontend')}}/media/about/3.png" alt="icon"> We Are the best for
                                                constraction you know</li>
                                            <li><img src="{{asset('public/frontend')}}/media/about/3.png" alt="icon"> Constraction is not only work
                                                it also passion</li>
                                            <li><img src="{{asset('public/frontend')}}/media/about/3.png" alt="icon"> We have 10000+ skilld and
                                                greatest worker</li>
                                            <li><img src="{{asset('public/frontend')}}/media/about/3.png" alt="icon"> You can see our previous work
                                                form gallery</li>
                                        </ul> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{-- Services --}}
        @include('frontend.layouts.services')


       @include('frontend.layouts.banner')


        {{-- Working Process --}}

        
        <section id="popular-service">
            <div class="container">
                <h2 class="section-title text-center " >Our Working <span class="text-dark">Process</span></h2>
                {{-- <p class="sub-title " data-wow-delay="200ms">Here is show our popular service for
                    our clients, who want to create<br>building from us, and who have huge money for spend.</p> --}}
                <div class="row "  >

                    <div class="col-md-3 col-sm-6 mb-2">
                        <div class="pop-service"><img style="height: 300px; width:370px" src="{{asset('public/frontend/media')}}/prosses/1111.jpg" alt="service">
                            <div class="service-details">
                                <p>Counseling</p>
                                <a><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 mb-2">
                        <div class="pop-service"><img style="height: 300px; width:370px" src="{{asset('public/frontend/media')}}/prosses/22.jpg" alt="service">
                            <div class="service-details">
                                <p>Contract</p>
                                <a><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 mb-2">
                        <div class="pop-service"><img style="height: 300px; width:370px" src="{{asset('public/frontend/media')}}/prosses/333.jpg" alt="service">
                            <div class="service-details">
                                <p>Complete Work</p>
                                <a><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 mb-2">
                        <div class="pop-service"><img style="height: 300px; width:370px" src="{{asset('public/frontend/media')}}/prosses/44.jfif" alt="service">
                            <div class="service-details">
                                <p>Delivery</p>
                                <a><i class="fa fa-long-arrow-up"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>




        {{-- Send Quotation --}}
        <section id="team" data-bg-image="{{asset('public/frontend')}}/media/rev-banner/officeloop_cover.jpg" >
            <div class="container">
                <h2 class="section-title text-center" >Get free quotaion</h2>
                <p class="sub-title text-dark">Send us about your estimate.</p>
                <div class="row ">
                   <div class="col-md-2 col-lg-2 col-sm-12"></div>
                    <div class="col-md-8 col-lg-8 col-sm-12">
                        <form id="quotationForm-1" method="POST">
                            @csrf
                                <div>
                                    <table class="table text-dark  bg-light">
                                        <tr>
                                            <td>Choose your necessary option <br>
                                                <span class="text-danger">[必須]</span>
                                            </td>
                                            <td>
                                                <label for=""><input name="quotation"  type="checkbox" value="1"> Quotation</label> &nbsp;
                                                <label for=""><input name="visit"   type="checkbox" value="1"> Visit Reservation</label> &nbsp;
                                                 <label for=""><input name="diagnosis"  type="checkbox" value="1"> Diagnosis</label>&nbsp;
                                                 <label for=""><input name="consultation" type="checkbox" value="1"> Consultation</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Name <span class="text-danger">[必須]</span></td>
                                            <td>
                                                <input name="name" id="inputName" required maxlength="50" class="form-control" placeholder="Enter your name" type="text">
                                                <span id="err_name" class="text-danger">Name Invalid</span>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Email <span class="text-danger">[必須]</span></td>
                                            <td>
                                                <input required maxlength="50" id="inputEmail" name="email" class="form-control" placeholder="Enter you email" type="email">
                                                <span id="err_email" class="text-danger">Email Invalid</span>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Mobile <span class="text-danger">[必須]</span></td>
                                           <td>
                                               <input required name="mobile" id="inputMobile" class="form-control" placeholder="Enter your mobile number" type="text">
                                               <span id="err_mobile" class="text-danger">Mobile Invalid</span>
                                            </td>
                                          
                                        </tr>
                                        <tr>
                                            <td>Subject <span class="text-danger">[必須]</span></td>
                                            <td><input required maxlength="50" name="subject"  class="form-control" placeholder="Enter your subject" type="text"></td>
                                        </tr>
                                        <tr>
                                            <td>Message <span class="text-danger">[必須]</span></td>
                                            <td><textarea required name="message" id="" class="form-control" cols="30" rows="5"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><button type="submit" class="btn btn-primary float-right">Submit</button></td>
                                        </tr>

                                    </table>
                                </div>                         
                        </form>
                        
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-12"></div>

                </div>
            </div>
        </section>

        {{-- Recent Projects --}}
        <section id="recent_project">
            <div class="container">
                <h2 class="section-title text-center " >Recent Project</h2>
                <p class="sub-title " data-wow-delay="200ms">Here i show our main services you ca
                    see this if you need, we are the boos of the constraction industry so you can order any service
                    without any hisitetion, why late</p>
                <div class="row fadeInBottom">
                    @foreach ($projects as $project)
                    <div class="col-md-4 col-sm-6 ">
                    <div class="project"><img style="height: 380px; withd:400px" src="{{asset('/')}}{{$project->image}}" alt="project">
                            <div class="project-intro">
                            <h3>{{$project->title}}</h3>
                            <p>{{substr($project->description,0,50)}}...</p><a href="{{route('project.show', $project->id)}}" class="dt-btn bg-transpernt">More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                   
                </div>
            </div>
        </section>

        <section id="popular-service">
            <div class="container">
                <h2 class="section-title text-center " >Happy <span class="text-dark">Clients</span></h2>
                
                <div class="row "  >

                    <div class="col-md-3 col-sm-6 mb-2">
                        <div class="pop-service"><img style="height: 300px; width:370px; border-radius: 50%;" src="{{asset('public/frontend/media')}}/happy/a1.JPG" alt="service">
                            <div class="service-details" style="text-align: center">
                                <p>Total Projects</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 mb-2">
                        <div class="pop-service"><img style="height: 300px; width:370px ;border-radius: 50%" src="{{asset('public/frontend/media')}}/happy/a2.JPG" alt="service">
                            <div class="service-details" style="text-align: center">
                                <p>Successfull Projects</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 mb-2">
                        <div class="pop-service"><img style="height: 300px; width:370px ;border-radius: 50%" src="{{asset('public/frontend/media')}}/happy/a3.JPG" alt="service">
                            <div class="service-details" style="text-align: center">
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 mb-2">
                        <div class="pop-service"><img style="height: 300px; width:370px ; border-radius: 50%" src="{{asset('public/frontend/media')}}/happy/a4.JPG" alt="service">
                            <div class="service-details" style="text-align: center">
                                <p>Satisfiction</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
      

        {{-- Testimonial --}}
        <section id="testimonial" data-bg-image="{{asset('public/frontend')}}/media/rev-banner/desktopbg1.jpg" data-parallax="image" data-carousel="swiper">
            <div class="container">

                <h2 class="section-title text-center " >Testimonial</h2>

                <p class="sub-title  text-dark " data-wow-delay="200ms">Here i show our main services you ca
                    see this if you need, we are the boos of the constraction industry so you can order any service
                    without any hisitetion, why late</p>

                <div class="testimonial-slider">
                    <div class="swiper-container" data-swiper="container" data-items="2" data-space="70"
                        data-loop="true" data-autoplay="5000" data-speed="600"
                        data-breakpoints='{"5000": {"slidesPerView": 2}, "1024": {"slidesPerView": 2}, "768": {"slidesPerView": 1}, "480": {"slidesPerView": 1}}'>
                        <div class="swiper-wrapper">
                            @foreach ($testimonial as $testimoni)
                            <div class="swiper-slide">
                                <div class="testimonial clearfix">
                                    <div class="content">
                                        <!--<div class="testi-thumb"><img src="{{asset('public/frontend')}}/media/testimonial/3.jfif" alt="Testi"></div>-->
                                    <p class="text-dark">{{$testimoni->comment}}</p>
                                        <ul class="star">
                                            <li><i class="fa fa-star text-warning"></i></li>
                                            <li><i class="fa fa-star text-warning"></i></li>
                                            <li><i class="fa fa-star text-warning"></i></li>
                                            <li><i class="fa fa-star text-warning"></i></li>
                                            <li><i class="fa fa-star text-warning"></i></li>
                                        </ul>
                                    </div>
                                    <div class="user-details text-right">
                                    <h3 class="name">{{$testimoni->name}}</h3>
                                    </div>
                                </div>
                            </div>
                            @endforeach   
                        </div>
                    </div>
                </div>
                <div class="testi-pagination text-center" data-swiper="pagination"></div>
            </div>
        </section>



        @include('frontend.layouts.banner')





        {{-- Blog --}}
        <section id="blog">
            <div class="container">
                <h2 class="section-title text-center " >Latest News</h2>
                <p class="sub-title text-center " data-wow-delay="200ms">Here i show our main
                    services you ca see this if you need, we are the boos of the constraction industry so you can order
                    any service without any hisitetion, why late :)</p>
                <div class="row">
                    @foreach ($news as $new)
                    <div class="col-md-4 col-sm-6">
                        <div class="blog-grid wow animated fadeInLeft">
                            <div class="blog-thumb">
                                <a href="{{route('news.show', $new->id)}}"><img style="height: 300px; width:100%" src="{{asset('/')}}{{$new->image}}" alt="blog thumb"></a>
                                <div class="post-meta clearfix">
                                    <a href="#" class="author text-left" style="padding: 2px" ><i class="fa fa-user"></i>Admin</a>
                                    <a href="#" class="date text-right"><i class="fa fa-clock-o"></i>{{date('d-m-Y', strtotime($new->updated_at))}}</a>
                                </div>
                                </div>
                            <div class="blog-content">
                            <h3 class="blog-title"><a href="{{route('news.show', $new->id)}}">{{$new->title}}</a></h3>
                            <p>{{substr($new->description,0,50)}}</p>
                            <a href="{{route('news.show', $new->id)}}" class="dt-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                  
                </div>
            </div>
        </section>

        <section id="choice">
            <div class="container">
                <div class="choice clearfix">
                    <h4>Are You Want a Awesome Construction Agency?</h4>
                <h2>We are the right choice for your project you know.</h2><a href="{{route('quotation.create')}}" class="dt-btn">Get Quotation</a>
                </div>
            </div>
        </section>
@endsection



@section('script')
    <script>
        $(document).ready(function(){
            console.log("Jquery Getting");

            $("#err_name").hide();
            $("#err_email").hide();
            $("#err_mobile").hide();

            var err_name = false;
            var err_email = false;
            var err_mobile = false;


            $("#inputName").focusout(function(){
                check_name();
            });

            $("#inputEmail").focusout(function() {
                check_email();
            });

            $("#inputMobile").focusout(function() {
                check_mobile();
            });


            function check_name() {
                var pattern = /^[a-zA-Z ]*$/;
                var name = $("#inputName").val();
                if (pattern.test(name) && name !== '') {
                $("#err_name").hide();
                $("#inputName").css("border","1px solid #34F458");
                } else {
                $("#err_name").html("Contain Characters Only");
                $("#err_name").show();
                $("#inputName").css("border","1px solid #F90A0A");
                err_name = true;
                console.log("name assigning true");
                }
                console.log("getting name check");
            }


            function check_email() {
                var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                var email = $("#inputEmail").val();
                if (pattern.test(email) && email !== '') {
                $("#err_email").hide();
                $("#inputEmail").css("border","1px solid #34F458");
                } else {
                $("#err_email").html("Invalid Email");
                $("#err_email").show();
                $("#inputEmail").css("border","1px solid #F90A0A");
                err_email = true;
                }
            
            }

            function check_mobile() {
                var pattern = /^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/g;
                var mobile = $("#inputMobile").val();
                if (pattern.test(mobile) && mobile !== '') {
                $("#err_mobile").hide();
                $("#inputMobile").css("border","1px solid #34F458");
                } else {
                $("#err_mobile").html("Invalid Number");
                $("#err_mobile").show();
                $("#inputMobile").css("border","1px solid #F90A0A");
                err_mobile = true;
                }
            }





            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $("#quotationForm-1").on('submit', function(e){
                e.preventDefault();

                err_name = false;
                err_email = false;
                err_mobile = false;

                check_name();
                check_email();
                check_mobile();

                console.log(err_name);
                console.log(err_email);
                console.log(err_mobile);
                
                if (err_name === false && err_email === false && err_mobile === false) {
                $.ajax({
                    type: "POST",
                    url: "{{url('/quotation')}}",
                    data:new FormData(this),
                    dataType: "json",
                    contentType:false,
                    cache:false,
                    processData:false,
                    success: function (response) {
                        toastr.success('Successful');
                        location.reload();
                    },
                    
                });
                }else {
                    toastr.error('Invalid Form Submission');
                }


            })  
        })
    </script>
@endsection