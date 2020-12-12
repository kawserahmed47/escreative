@extends('backend.master')

@section('content')




 <!-- Content Header (Page header) -->
 <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Testimonial view</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Testimonial view</li>
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
                  <h3 class="card-title">Testimonial View</h3>
                  @if (Session::get('success'))
                <p class="text-success">{{Session::get('success')}}</p>
                  @endif
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>                  
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Comment</th>
                      
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if ($testimonials)
                        @foreach ($testimonials as $key=>$testimonial)
                          <tr>
                          <td>{{++$key}}</td>
                          <td>{{$testimonial->name}}</td>
                          <td>
                             {!!$testimonial->comment!!}
                          </td>
                        
                            <td>
                              @if ($testimonial->status == 0)
                                <span class="badge bg-danger">Inactive</span>
                              @elseif($testimonial->status == 1)
                                <span class="badge bg-success">Active</span>
                              @endif
                             
                            </td>
                          <td>
                          <a class="btn btn-info" href="{{route('testimonial.edit', $testimonial->id)}}">Edit</a>

                          <form action="{{route('testimonial.destroy', $testimonial->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button onclick="return confirm('Are you sure?')" class="btn btn-danger" type="submit">Delete</button>
                          </form>
                            


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