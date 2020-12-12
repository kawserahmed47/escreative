@extends('backend.master')

@section('style')
@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>About</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">About</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About View</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">About</label> 
                                        <div class="mb-3">
                                            <p>{!! $about->about !!}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">About Image</label><br>
                                    <img style="height: 100px; width:100px" src="{{asset('/')}}{{$about->about_img}}" id="previewImgAbout" alt="Preview">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Message of CEO</label> 
                                        <div class="mb-3">
                                           {!!$about->message!!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">CEO Image</label><br>
                                    <img style="height: 100px; width:100px" src="{{asset('/')}}{{$about->message_img}}" id="previewImgMessage" alt="Preview">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Why Choose US</label> 
                                        <div class="mb-3">
                                           {!!$about->why_choose!!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Why Choose Us Image</label><br>
                                    
                                    <img style="height: 100px; width:100px" src="{{asset('/')}}{{$about->why_choose_img}}" id="previewImgWhyChoose" alt="Preview">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Why we best?</label> 
                                        <div class="mb-3">
                                            {!!$about->why_best!!}
                                    
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Why we best Image</label><br>
                                    <img style="height: 100px; width:100px" src="{{URL::to($about->why_best_img)}}" id="previewImgWhyBest" alt="Preview">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mission</label> 
                                        <div class="mb-3">
                                            {!!$about->mission!!}
                                      
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Misstion Image</label><br>
                                     
                                    <img style="height: 100px; width:100px" src="{{URL::to($about->mission_img)}}" id="previewImgMission" alt="Preview">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Vision</label> 
                                        <div class="mb-3">
                                            {!! $about->vision !!}
                    
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Vision Image</label><br>
                                    <img style="height: 100px; width:100px" src="{{URL::to($about->vision_img)}}" id="previewImgVision" alt="Preview">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">History</label> 
                                        <div class="mb-3">
                                            {!!$about->history!!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">History Image</label><br>
                                       
                                    <img style="height: 100px; width:100px" src="{{URL::to($about->historyImg)}}" id="previewImgHistory" alt="Preview">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label> 
                                        <p>{{$about->email}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mobile</label> 
                                        <p>{{$about->mobile}}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label> 
                                        <p>{{$about->address}}</p>
                                        
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Logo</label><br>
                                        
                                    <img style="height: 100px; width:100px" src="{{URL::to($about->logo)}}" id="previewImgLogo" alt="Preview">
                                    </div>
                                </div>
                            </div>
                          
                            
                        </div>
                        <!-- /.card-body -->
        
                        <div class="card-footer">
                        <a href="{{route('about.edit',$about->id)}}" class="btn btn-primary">Edit</a>
                        </div>
                
            
              </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    {{-- Form section --}}


@endsection


@section('script')
    <script>
        $(document).ready(function(){
            console.log("Jquery Getting");

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

         

            $("#newsInsertForm").on('submit', function(e){
                e.preventDefault();

                $.ajax({
                    type: "POST",
                    url: "{{url('/about')}}",
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

            })



        })
    </script>


<script>

  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#previewImg').attr('src', e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
      }
  }



  $("#inputImg").change(function(){
      readURL(this);
  });
  </script>
@endsection