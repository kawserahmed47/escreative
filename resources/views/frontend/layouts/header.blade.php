<section class="top_menu">
    <div class="top-bg clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                   
                </div>
                <div class="col-md-6">
                    <div class="text-right">
                        <ul class="site-social-link">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            <li></li>
                        <li><a href="{{url('/dashboard')}}">Admin</a></li>
                        </ul>
                        {{-- <select>
                            <option value="">EN</option>
                            <option value="">JP</option>
                        </select> --}}
                    </div>
                  
                </div>
            </div>
        </div>
       

    </div>



    <div class="top-contact">
        <div class="">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                <div class="dt-site-logo text-center mb-3"><a href="{{route('index')}}" class="main-logo"><img
                                src="{{asset('public/frontend')}}/assets/img/esCreativeLogo.JPG" alt=""></a></div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="contact-details"><span><i class="fa fa-paper-plane"></i></span>
                            <p>Email Us (24/7)</p>
                        <p class="con-text"><a href="mailto:{{$about->email}}">{{$about->email}}</a></p>
                        </div>
                        <div class="contact-details"><span><i class="fa fa-phone"></i></span>
                            <p>Call Now</p>
                            <p></p>
                            <p class="con-text"><a href="tel:{{$about->mobile}}">{{$about->mobile}}</a></p>
                        </div>
                        <div class="contact-details"><span><i class="fa fa-map-marker"></i></span>
                            <p>Find Us</p>
                            <p class="address">【本社】〒343-0035 <br> &nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	 埼玉県越谷市大字510番地一階
                            </p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>

<header id="header_menu">
    <div class="">
    <div class="header-logo"><img src="{{asset('/')}}{{$about->logo}}" alt="logo"></div>
        <nav class="menu menu--juno">
            <ul class="menu__list">
            <li class="menu__item @if($menu=='Home')menu__item--current @endif"><a href="{{route('index')}}" class="menu__link"><h4>Home</h4></a></li>
            <li class="menu__item  @if($menu=='About')menu__item--current @endif"  ><a href="{{route('about')}}" class="menu__link"><h4>About <i class="fa fa-caret-down" aria-hidden="true"></i></h4></a>
                    <ul class="child-menu">
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li><a href="{{route('ceoMessage')}}">Message of CEO</a></li>
                        <li><a href="{{route('profile')}}">Profile</a></li>
                        <li><a href="{{route('mission')}}">Our Mission</a></li>
                        <li><a href="{{route('vision')}}">Our Vision</a></li>
                        <li><a href="{{route('history')}}">History</a></li>
                        <li><a href="{{route('esGallery')}}">Gallery</a></li>
                        <li><a href="{{route('esFaq')}}">FAQ</a></li>
                    </ul>
                </li>
                <li class="menu__item @if($menu=='Service')menu__item--current @endif"><a href="{{route('services')}}" class="menu__link"><h4>Services <i class="fa fa-caret-down" aria-hidden="true"></i> </h4></a>
                    <ul class="child-menu">
                        @foreach ($services as $service)
                        <li><a href="{{route('service.show', $service->id)}}">{{$service->title}}</a></li>
                            
                        @endforeach
                    </ul>
                </li>
            <li class="menu__item @if($menu=='Project')menu__item--current @endif"><a href="{{route('projects')}}" class="menu__link"><h4>Projects</h4></a></li>
            <li class="menu__item @if($menu=='News')menu__item--current @endif"><a href="{{route('newsView')}}" class="menu__link"><h4>News</h4></a></li>
            <li class="menu__item @if($menu=='Contact')menu__item--current @endif"><a href="{{route('esContact')}}" class="menu__link"><h4>Contact Us</h4></a></li>
            </ul>
        </nav> 
    </div>
</header>

<div id="mobile-header"><a class="main-logo" href="{{route('index')}}"><h3 class="text-success">ES Creative 工業株式会社</h3></a>
    <div class="menu-container">
        <div class="menu-toggle toggle-menu menu-right push-body">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>



<div id="mobile-wrapper" class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
    <div class="mobile-menu-container">
     
        <nav id="accordian">
            <ul class="accordion-menu">
                <li class="single-link"><a href="{{route('index')}}">Home</a></li>
                  <li><a href="#0" class="dropdownlink">About Us <i class="fa fa-chevron-down"
                            aria-hidden="true"></i></a>
                    <ul class="submenuItems">
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li><a href="{{route('ceoMessage')}}">Message of CEO</a></li>
                        <li><a href="{{route('profile')}}">Profile</a></li>
                        <li><a href="{{route('mission')}}">Our Mission</a></li>
                        <li><a href="{{route('vision')}}">Our Vision</a></li>
                        <li><a href="{{route('history')}}">History</a></li>
                        <li><a href="{{route('esGallery')}}">Gallery</a></li>
                        <li><a href="{{route('esFaq')}}">FAQ</a></li>
                    </ul>
                </li>
                 <li><a href="#0" class="dropdownlink">Services <i class="fa fa-chevron-down"
                            aria-hidden="true"></i></a>
                    <ul class="submenuItems">
                       <li><a href="{{route('serviceDetails')}}">住宅リフォームの施工・管理</a></li>
                        <li><a href="{{route('serviceDetails')}}">リフォーム後のメンテナンス</a></li>
                        <li><a href="{{route('serviceDetails')}}">内装工事</a></li>
                        <li><a href="{{route('serviceDetails')}}">防犯工事</a></li>
                        <li><a href="{{route('serviceDetails')}}"> 外装工事 </a></li>
                        <li><a href="{{route('serviceDetails')}}">防火工事 </a></li>
                        <li><a href="{{route('serviceDetails')}}"> 付帯設備工事</a></li>
                        <li><a href="{{route('serviceDetails')}}">■ 耐震補強</a></li>
                    </ul>
                </li>
                <li class="single-link"><a href="{{route('projects')}}">Projects</a></li>
                <li class="single-link"><a href="{{route('newsView')}}">News</a></li>
                  <li class="single-link"><a href="{{route('esContact')}}">Contact Us</a></li>
            </ul>
        </nav>
    </div>
</div>
