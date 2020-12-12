@extends('backend.master')


@section('style')


@endsection



@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>News</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit News</li>
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
                <h3 class="card-title">Edit News</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            <form role="form" id="newsUpdateForm" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" id="newsID" name="id" value="{{$news->id}}">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                  <input type="text" required name="title" value="{{$news->title}}" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <select required class="form-control" name="news_category" id="news_category">
                        <option value="">Select Category</option>
                        <option value="1">Category 1</option>
                        <option value="2">Category 2</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Descripton</label>
                    <div class="mb-3">
                        <textarea class="form-control" required name="description"  placeholder="Place some text here"
                                rows="5" cols="30">{!! $news->description !!}</textarea>
                      </div>
                  
                </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Image input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" id="inputImg" accept=".jpg, .jpeg, .png"  name="image" >
                      </div>
                    </div>
                <img style="height: 100px; width:100px" src="{{asset('/')}}{{$news->image}}" id="previewImg" alt="Preview">
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
         
            $("#news_category").val({{$news->news_category}})

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

         

            $("#newsUpdateForm").on('submit', function(e){
                e.preventDefault();
                var  newsID = $("#newsID").val();
                $.ajax({
                    type: "POST",
                    url: "{{url('/news')}}/"+newsID,
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