@extends('backend.master')


@section('style')


@endsection



@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Testimonial</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Testimonial</li>
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
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Testimonial</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            <form role="form" id="testimonialUpdateForm" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            <input type="hidden" name="id" id="testimonialID" value="{{$testimonial->id}}">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Commentator</label>
                  <input type="text" value="{{$testimonial->name}}" required name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name of Commentator">
                  </div>
                
                  <div class="form-group">
                    <label for="exampleInputPassword1">Comment</label>
                    <div class="mb-3">
                        <textarea class="form-control" required name="comment"  placeholder="Place some text here"
                  rows="5" cols="30">{!!$testimonial->comment!!}</textarea>
                      </div>
                  
                </div>
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
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

         

            $("#testimonialUpdateForm").on('submit', function(e){
                e.preventDefault();
                var  id = $("#testimonialID").val();
                $.ajax({
                    type: "POST",
                    url: "{{url('/testimonial')}}/"+id,
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
      // var imgSize = $("#inputImg").size;
      // console.log(imgSize);
  });
  </script>
@endsection