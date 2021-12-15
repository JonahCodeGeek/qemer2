@extends("layouts.app")
@section('content')
@extends('template.navbar')
 <div class="container">
       <div class="row col-md-2 mx-auto     justify-content-center ">
   <button  data-bs-toggle="modal" data-bs-target="#addSlide"
class="btn mybtn rounded-pill mb-4 h-1 fs-3 btn-outline-success  ">Add new Slide
</button> 
</div>
 </div>
  

@forelse ($items as $item )
<div class="container">
    <div class="row    justify-content-center ">
       <div class="card mb-5 p-0 shadow-sm"style="width: 65rem;" data-aos="fade-right" data-aos-offset="100">
         <img src="{{ asset('storage/slider_images/'.$item->slide_image) }}"class="card-img-top d-block mx-auto " alt="..."></img>
         <div class="card-body">
            <h1 class="card-title text-center mb-3 "><b>Title:</b>  {{ $item->Header }}</h1>
            <h1 class="card-subtitle mb-2  text-center"><b>body:</b>  {!! $item->body !!}</h1>
           <div class="d-flex flex-row justify-content-evenly ">
            <a  href="admin/carousel_item/{{ $item->id }}" > <button class="btn mybtn rounded-pill mb-4 h-1 fs-3 btn-outline-success text-success">Change</button></a> 
           </div>
         </div>
       </div>
    </div>
</div>   
@empty
    <div class="container">
        <div class="row  p-4 gap-5 justify-content-between ">
            <h1> No items available to show</h1>
        </div>
    </div>
@endforelse
<!-- Modal -->
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
                            <form action="admin/carousel_item/store" enctype="multipart/form-data" method="POST">
                                @csrf
                             <div class="row">
          
                               <div class="control-group col-12">
                                 <label for="Header">Header</label>
                                 <input type="text" class="form-control" name="Header" placeholder="Enter Slide Title Here" required>
                               </div>
          
                               <div class="control-group col-12 mt-2">
                                <label for="body">Body</label>
                                <textarea name="body"   type="text" class="form-control" placeholder="Enter The Body of Your Slide" required></textarea>
                              </div>
                             </div>
                             <div class="control-group col-12 mt-2">
                              <label for="slide_image">Image</label>
                              <input name="slide_image"   type="file" class="form-control"  required ></input>
                            </div>
                             <div class="row mt-2">
                               <div class="control-group col-12 text-center">
                                 <button type="submit" class="btn mybtn form-control">
                                   Add
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