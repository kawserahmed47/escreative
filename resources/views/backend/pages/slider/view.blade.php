@extends('backend.master')

@section('content')




 <!-- Content Header (Page header) -->
 <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Slider view</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Slider view</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-10">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Slider View</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>                  
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if ($sliders)
                        @foreach ($sliders as $key=>$slider)
                          <tr>
                          <td>{{++$key}}</td>
                          <td>{{$slider->title}}</td>
                          <td>{{$slider->subtitle}}</td>
                          <td><img src="{{asset('/')}}{{$slider->image}}" height="100" width="200" alt="Preview"></td>
                            <td>
                              @if ($slider->status == 0)
                                <span class="badge bg-danger">Inactive</span>
                              @elseif($slider->status == 1)
                                <span class="badge bg-success">Active</span>
                              @endif
                             
                            </td>
                          <td>
                          <a class="btn btn-info" href="{{route('slider.edit', $slider->id)}}">Edit</a>
                            <a onclick="return confirm('Are you sure?')" class="btn btn-danger" href="{{route('sliderDelete', $slider->id)}}">Delete</a>
                          </td>
                          </tr>
                        @endforeach
                      @endif
                     
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
    </section>

  



@endsection

@section('script')

    
@endsection