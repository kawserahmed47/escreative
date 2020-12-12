@extends('backend.master')

@section('content')




 <!-- Content Header (Page header) -->
 <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quotation Message</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Quotation Message</li>
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
                  <h3 class="card-title">Quotation Message</h3>
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
                        <th>Types</th>
                        <th>Subject</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($quotations as $key=>$quotation)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$quotation->name}} <br>{{$quotation->mobile}} <br> {{$quotation->email}} </td>
                        <td>
                            @if($quotation->quotation)
                            <span>Quotation</span>
                            @endif
                            @if($quotation->visit)
                            <span>Visit</span>
                            @endif
                            @if($quotation->diagnosis)
                            <span>Diagnosis</span>
                            @endif
                            @if($quotation->consultation)
                            <span>Consultation</span>
                            @endif
                        </td>
                    <td>{{$quotation->subject}}</td>
                    <td>{{$quotation->message}}</td>
                            <td>
                                @if ($quotation->status == 1)
                                  <span class="text-info">New</span>
                                @elseif($quotation->status == 2) 
                                  <span class="text-primary"> Pending</span>
                                @elseif($quotation->status == 3) 
                                  <span class="text-seconday"> Seen</span>
                                @elseif($quotation->status == 4) 
                                  <span class="text-success"> Successful</span>
                                @endif
                            </td>
                            <th>
                              <a href="" class="btn btn-primary quotation-modal" data-toggle="modal" data-target="#modal-quotation" data-id="{{$quotation->id}}" data-name="{{$quotation->name}}" data-status="{{$quotation->status}}">Change Status </a>
                                <form action="{{route('quotation.destroy', $quotation->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button onclick="return confirm('Are you sure?')" class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </th>
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

  
    <div class="modal fade" id="modal-quotation">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Change Quotation Status</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{route('changeQuotationStatus')}}" method="POST">
            @csrf
          <div class="modal-body">
            <p id="modalName"></p>
     
                <input type="hidden" name="id" id="quotationID" value="">
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
            <button type="submit" class="btn btn-primary">Update Status</button>
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
      $(".quotation-modal").on("click",function(){
  
        var id = $(this).data('id');
        var name =$(this).data('name');
        var status =$(this).data('status');
        console.log(id+name+status);
        $("#modalName").html(name);
        $("#selectStatus").val(status);
        $("#quotationID").val(id);
  
      });
  })
</script>
    
@endsection