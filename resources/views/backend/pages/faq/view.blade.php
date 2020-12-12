@extends('backend.master')

@section('content')




 <!-- Content Header (Page header) -->
 <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>FAQ view</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">FAQ view</li>
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
                  <h3 class="card-title">FAQ View</h3>
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
                        <th>Question</th>
                        <th>Answer</th>
                      
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if ($faqs)
                        @foreach ($faqs as $key=>$faq)
                          <tr>
                          <td>{{++$key}}</td>
                          <td>{{$faq->question}}</td>
                          <td>
                             {!!$faq->answer!!}
                          </td>
                        
                            <td>
                              @if ($faq->status == 0)
                                <span class="badge bg-danger">Inactive</span>
                              @elseif($faq->status == 1)
                                <span class="badge bg-success">Active</span>
                              @endif
                             
                            </td>
                          <td>
                          <a class="btn btn-info" href="{{route('faq.edit', $faq->id)}}">Edit</a>

                          <form action="{{route('faq.destroy', $faq->id)}}" method="POST">
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