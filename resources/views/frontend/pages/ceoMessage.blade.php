@extends('frontend.master')
@section('content')
@include('frontend.layouts.pageBanner')

<section id="ab-content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="ab-thumb wow animated fadeInRight" data-wow-delay="300ms"
            data-wow-duration="1500ms"><img src="{{asset('/')}}{{$about->message_img}}" alt="about"></div>
            </div>
            <div class="col-md-6">
                <div class="ab-content wow animated fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <h2 class="section-title">人と街にやさしい住まいを </h2>

                    {{$about->message}}
                    <P class="text-right">ES Creative 工業株式会社 <br> 代表取締役社長　高橋　忍</P>
                 
                </div>
            </div>
          
        </div>
    </div>
</section>

    @include('frontend.layouts.banner')
@endsection