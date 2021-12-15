@extends("layouts.app")
@section('content')
@extends('template.navbar')
 
<div class="container">
    <div class="row    justify-content-center ">
       <div class="card mb-5 p-0 shadow-sm"style="width: 65rem;" data-aos="fade-right" data-aos-offset="100">
         <img src="{{ asset('storage/slider_images/'.$single->slide_image) }}" class="card-img-top d-block mx-auto " alt="...">
         <div class="card-body">
            <h1 class="card-title text-center mb-3 "><b>Title:</b>  {{ $single->Header }}</h1>
            <h1 class="card-subtitle mb-2  text-center"><b>body:</b>  {!! $single->body !!}</h1>
           <div class="d-flex flex-row justify-content-evenly ">
            <a href="/carousel_items"> <i class="btn fas fa-backward fa-4x text-dark"></i></a>
            <a> <i   data-bs-toggle="modal" data-bs-target="#edit"  class="btn fas fa-edit fa-4x text-success"></i></a> 
            <form id=" " action="" method="POST">
              @method('DELETE')
              @csrf
              <button class="btn fas fa-trash fa-4x text-danger"></button>
          </form>
           </div>
         </div>
       </div>
    </div>
</div>   
    
 </div>
</div>

 
<!-- Modal -->
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
                        <form  method="POST" enctype="multipart/form-data" >
                          @csrf
                            @method('PUT')
                           
                            <div class="row">
         
                              <div class="control-group col-12">
                                <label for="Header">Header</label>
                                <input type="text" class="form-control" name="Header" placeholder="Enter Slide Title Here" value="{{$single->Header }}"required>
                              </div>
         
                              <div class="control-group col-12 mt-2">
                               <label for="body">Body</label>
                               <textarea name="body"   type="text" class="form-control" placeholder="Enter The Body of Your Slide" required>{{ $single->body }}</textarea>
                             </div>
                            </div>
                            <div class="control-group col-12 mt-2">
                             <label for="slide_image">Image</label>
                             <input name="slide_image"   type="file" class="form-control " required></input>
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

    
@endsection