@extends('backend.master')

@section('content')




 <!-- Content Header (Page header) -->
 <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Contact Message</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Contact Message</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Contact Message</h3>
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
                        <th>Customer</th>
                        <th>Subject</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $key=>$contact)
                            <tr>
                            <td>{{++$key}}</td>
                                <td>{{$contact->name}} <br> {{$contact->email}} </td>
                                <td>{{$contact->subject}}</td>
                                <td>{{$contact->message}}</td>
                                <td>
                                  @if ($contact->status == 1)
                                  <span class="text-info">New</span>
                                @elseif($contact->status == 2) 
                                  <span class="text-primary"> Pending</span>
                                @elseif($contact->status == 3) 
                                  <span class="text-seconday"> Seen</span>
                                @elseif($contact->status == 4) 
                                  <span class="text-success"> Successful</span>
                                @endif
                                </td>
                                <th>
                                  <a href="" class="btn btn-primary contact-modal" data-toggle="modal" data-target="#modal-contact" data-id="{{$contact->id}}" data-name="{{$contact->name}}" data-status="{{$contact->status}}">Change Status </a>
                                    <form action="{{route('contact.destroy', $contact->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button onclick="return confirm('Are you sure?')" class="btn btn-danger" type="submit">Delete</button>
                                    </form></th>
                            </tr>                      
                        @endforeach
                     
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

  

    <div class="modal fade" id="modal-contact">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Change Admin Role</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{route('changeContactStatus')}}" method="POST">
            @csrf
          <div class="modal-body">
            <p id="modalName"></p>

         
              
                <input type="hidden" name="id" id="contactID" value="">
                <select class="form-control" name="status" id="selectStatus">
                  <option value="">Select Status</option>
                  <option value="1">New</option>
                  <option value="2">Pending</option>
                  <option value="3">Seen</option>
                  <option value="4">Successful</option>
              </select>

          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update Role</button>
          </div>
        </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>



@endsection

@section('script')
<script>
  $(document).ready(function(){
        console.log("Getting");
      $(".contact-modal").on("click",function(){
  
        var id = $(this).data('id');
        var name =$(this).data('name');
        var status =$(this).data('status');
        console.log(id+name+status);
        $("#modalName").html(name);
        $("#selectStatus").val(status);
        $("#contactID").val(id);
  
      });
  })
  </script>
    
@endsection