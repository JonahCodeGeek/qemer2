@extends("layouts.app")
@section('content')
@extends('template.navbar')
<div class="container">
    <div class="row col-md-2 mx-auto justify-content-center ">
<button  data-bs-toggle="modal" data-bs-target="#addSlide"
class="btn mybtn rounded-pill mb-4 h-1 fs-3 btn-outline-success  ">Add a new service
</button> 
</div>
</div>
 <div class="container">
      @forelse ($services as $service )
    <table class="table table-bordered"> 
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Icon</th>
            <th scope="col">Name</th>
            <th scope="col">Intro</th>
            <th scope="col">Body</th>
            <th scope="col">Edit</th>
            <th scope="col">delete</th>
           </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">{!! $service->id !!}</th>
            <td class="fs-5"><img src="{{ asset('storage/Service_icons/'.$service->Icon) }}" class="card-img-top   mx-auto  "  style="width:6rem;height:6rem;"  alt="..."></td>
            <td class="fs-5">{!! $service->Name !!}</td>
            <td class="fs-5">{!! $service->Intro!!}</td>
            <td class="fs-5">{!! $service->Body !!}</td>

            <td class="fs-5"> 
                <form id="" action="admin/service_items/{{ $service->id }}" method="POST">
                    @csrf
                @method('DELETE')
                <button  class="btn fas fa-trash fa-2x text-danger"></button>
                <td class="fs-5"> <a> <i data-bs-toggle="modal" data-bs-target="#edit"  class="btn fas fa-edit fa-2x text-success"></i></a> </td>
            </form>
          </td>
        </tr>
        </tbody>
      </table> 
      @empty
      <div class="container">
          <div class="row  p-4 gap-5 justify-content-between ">
              <h1 class="text-center fs-1"> No items available to show</h1>
          </div>
      </div>
@endforelse
</div>


 

<!-- Modal for adding a new service -->

<div class="modal fade" id="addSlide" tabindex="-5" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="admin/service_items/store" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="control-group col-12">
                                      <label for="Header">Name</label>
                                      <input type="text" class="form-control" name="Name" placeholder="Enter Slide Title Here"  required>
                                    </div>
                                    <div class="control-group col-12 mt-2">
                                      <label for="Intro">Intro</label>
                                      <textarea name="Intro"   type="text" class="form-control" placeholder="Enter The Body of Your Slide" required> </textarea>
                                    </div>
                                    <div class="control-group col-12 mt-2">
                                     <label for="Body">Body</label>
                                     <textarea name="Body"   type="text" class="form-control" placeholder="Enter The Body of Your Slide" required></textarea>
                                   </div>
                                  </div>
                                  <div class="control-group col-12 mt-2">
                                   <label for="Icon">Image</label>
                                   <input name="Icon"   type="file" class="form-control " required></input>
                                 </div>
                                  <div class="row mt-4  ">
                                    <div class="control-group col-12 text-center">
                                      <button type="submit" class=" fs-3 mx-auto btn btn-outline-success form-control">
                                        Save
                                      </button>
                                      
                                    </div>
                                  </div>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

@foreach ($services as $service )
  <!-- Modal for updating services-->
<div class="modal fade" id="edit" tabindex="-5" role="dialog" aria-labelledby="modelTitleId"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="admin/service_items/{{ $service->id }}"  method="POST" enctype="multipart/form-data" >
                          @csrf
                            @method('PUT')
                            <div class="row">
                              <div class="control-group col-12">
                                <label for="Header">Name</label>
                                <input type="text" class="form-control" name="Name" placeholder="Enter Slide Title Here" value="{{ $service->Name }}"  required>
                              </div>
                              <div class="control-group col-12 mt-2">
                                <label for="Intro">Intro</label>
                                <textarea name="Intro"   type="text" class="form-control" placeholder="Enter The Body of Your Slide" required>{{ $service->Intro }} </textarea>
                              </div>
         
                              <div class="control-group col-12 mt-2">
                               <label for="Body">Body</label>
                               <textarea name="Body"   type="text" class="form-control" placeholder="Enter The Body of Your Slide" required>{{ $service->Body}}</textarea>
                             </div>
                            </div>
                            <div class="control-group col-12 mt-2">
                             <label for="Icon">Image</label>
                             <input name="Icon"   type="file" class="form-control " required></input>
                           </div>
                            <div class="row mt-4  ">
                              <div class="control-group col-12 text-center">
                                <button type="submit" class=" fs-3 mx-auto btn btn-outline-success form-control">
                                  Save
                                </button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
        </div>
    </div>
</div>
</div>
@endforeach
@endsection
  