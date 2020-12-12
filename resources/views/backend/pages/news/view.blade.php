@extends('backend.master')

@section('content')




 <!-- Content Header (Page header) -->
 <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>News view</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">News view</li>
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
                  <h3 class="card-title">News View</h3>
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
                        <th>Title</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if ($news)
                        @foreach ($news as $key=>$item)
                          <tr>
                          <td>{{++$key}}</td>
                          <td>{{$item->title}}</td>
                          <td>
                              category- {{$item->news_category}}
                          </td>
                          <td>
                            {!! $item->description !!}
                        </td>
                          <td><img src="{{asset('/')}}{{$item->image}}" height="100" width="200" alt="Preview"></td>
                            <td>
                              @if ($item->status == 0)
                                <span class="badge bg-danger">Inactive</span>
                              @elseif($item->status == 1)
                                <span class="badge bg-success">Active</span>
                              @endif
                             
                            </td>
                          <td>
                          <a class="btn btn-info" href="{{route('news.edit', $item->id)}}">Edit</a>

                          <form action="{{route('news.destroy', $item->id)}}" method="POST">
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