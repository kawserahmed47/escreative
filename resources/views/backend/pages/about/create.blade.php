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
                <h3 class="card-title">About Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               
                    <form role="form" id="newsInsertForm" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">About</label> 
                                        <div class="mb-3">
                                            <textarea class="form-control" required name="about"  placeholder="Place some text here"
                                                   row="30" col="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Image</label><br>
                                        <input type="file" required name="about_img"  >
                                        <img style="height: 100px; width:100px" src="" id="previewImgAbout" alt="Preview">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Message of CEO</label> 
                                        <div class="mb-3">
                                            <textarea class="form-control" required name="message"  placeholder="Place some text here"
                                                   row="30" col="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Image</label><br>
                                        <input type="file" required name="message_img"  >
                                        <img style="height: 100px; width:100px" src="" id="previewImgMessage" alt="Preview">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Why Choose US</label> 
                                        <div class="mb-3">
                                            <textarea class="form-control" required name="why_choose"  placeholder="Place some text here"
                                                   row="30" col="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Image</label><br>
                                        <input type="file" required name="why_choose_img"  >
                                        <img style="height: 100px; width:100px" src="" id="previewImgWhyChoose" alt="Preview">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Why we best?</label> 
                                        <div class="mb-3">
                                            <textarea class="form-control" required name="why_best"  placeholder="Place some text here"
                                                   row="30" col="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Image</label><br>
                                        <input type="file" required name="why_best_img"  >
                                        <img style="height: 100px; width:100px" src="" id="previewImgWhyBest" alt="Preview">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mission</label> 
                                        <div class="mb-3">
                                            <textarea class="form-control" required name="mission"  placeholder="Place some text here"
                                                   row="30" col="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Image</label><br>
                                        <input type="file" required name="mission_img"  >
                                        <img style="height: 100px; width:100px" src="" id="previewImgMission" alt="Preview">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Vision</label> 
                                        <div class="mb-3">
                                            <textarea class="form-control" required name="vision"  placeholder="Place some text here"
                                                   row="30" col="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Image</label><br>
                                        <input type="file" required name="vision_img"  >
                                        <img style="height: 100px; width:100px" src="" id="previewImgVision" alt="Preview">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">History</label> 
                                        <div class="mb-3">
                                            <textarea class="form-control" required name="history"  placeholder="Place some text here"
                                                   row="30" col="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Image</label><br>
                                        <input type="file" required name="history_img"  >
                                        <img style="height: 100px; width:100px" src="" id="previewImgHistory" alt="Preview">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label> 
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mobile</label> 
                                        <input type="text" class="form-control" name="mobile">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label> 
                                        <input type="text" class="form-control" name="address">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Logo</label><br>
                                        <input type="file" required name="logo"  >
                                        <img style="height: 100px; width:100px" src="" id="previewImgLogo" alt="Preview">
                                    </div>
                                </div>
                            </div>
                          
                            
                        </div>
                        <!-- /.card-body -->
        
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
            
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