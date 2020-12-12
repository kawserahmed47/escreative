@extends('frontend.master')

@section('content')
@include('frontend.layouts.pageBanner')

<section id="service_single">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <aside class="service-widgets">
                    <h3 class="widget-title">What We Do?</h3>
                    <ul class="servile-link">
                        @foreach ($services as $ser)
                        <a href="{{route('service.show',$ser->id)}}"><li>{{$ser->title}} <i class="fa fa-angle-right"></i> </li></a>
                         
                        @endforeach
                       
                    </ul>
                </aside>
                    @include('frontend.layouts.gallery')
            </div>
            <div class="col-md-9">
                <div class="service-single">
                <div class="service-thumb"><img style="width: 100% ; height:300px" src="{{asset('/')}}{{$service->image}}" alt="Service"></div>
                    <div class="service-content">
                    <h2>{{$service->title}}</h2>
                    <p>{{$service->description}}</p>
                     
                    </div>
                    {{-- <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="service-feature">
                                <div class="icon"><i class="icon dti-cup"></i></div>
                                <div class="content">
                                    <h4>Great Feature</h4>
                                    <p>Lorem ipsm dolor sit consectetur adipiscing elit. Suspendisse for a
                                        viverra mauris eget tortor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-feature">
                                <div class="icon"><i class="icon dti-gear"></i></div>
                                <div class="content">
                                    <h4>Great Feature</h4>
                                    <p>Lorem ipsm dolor sit consectetur adipiscing elit. Suspendisse for a
                                        viverra mauris eget tortor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-feature">
                                <div class="icon"><i class="icon dti-globe"></i></div>
                                <div class="content">
                                    <h4>Great Feature</h4>
                                    <p>Lorem ipsm dolor sit consectetur adipiscing elit. Suspendisse for a
                                        viverra mauris eget tortor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-feature">
                                <div class="icon"><i class="icon dti-home"></i></div>
                                <div class="content">
                                    <h4>Great Feature</h4>
                                    <p>Lorem ipsm dolor sit consectetur adipiscing elit. Suspendisse for a
                                        viverra mauris eget tortor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-feature">
                                <div class="icon"><i class="icon dti-pencil-ruler"></i></div>
                                <div class="content">
                                    <h4>Great Feature</h4>
                                    <p>Lorem ipsm dolor sit consectetur adipiscing elit. Suspendisse for a
                                        viverra mauris eget tortor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-feature">
                                <div class="icon"><i class="icon dti-settings"></i></div>
                                <div class="content">
                                    <h4>Great Feature</h4>
                                    <p>Lorem ipsm dolor sit consectetur adipiscing elit. Suspendisse for a
                                        viverra mauris eget tortor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 text-center"><a href="#" class="dt-btn"><i
                                    class="fa fa-cloud-download"></i> Download Brochure</a></div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection