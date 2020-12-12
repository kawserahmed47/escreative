
<section id="popular-service">
    <div class="container">
        <h2 class="section-title text-center wow animated fadeInUp" data-wow-delay="0ms">Popular Service</h2>
        <p class="sub-title wow animated fadeInUp" data-wow-delay="200ms">Here is show our popular service for
            our clients, who want to create<br>building from us, and who have huge money for spend.</p>
        <div class="row wow animated fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">

            @foreach ($services as $service)
                <div class="col-md-3 col-sm-6 mb-2">
                <div class="pop-service"> <a href="{{route('service.show',$service->id)}}"><img style="height: 300px; width:370px" src="{{asset('/')}}{{$service->image}}" alt="service"></a> 
                        <div class="service-details">
                        <p>{{$service->title}}</p>
                            {{-- <a href="#"><i class="fa fa-long-arrow-right"></i></a> --}}
                        </div>
                    </div>
                </div>

            @endforeach
       
           

        </div>
    </div>
</section>