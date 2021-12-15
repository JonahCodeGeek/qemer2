@extends("layouts.app")
@section('content')
@extends('template.navbar')
<div class="container">
    <div class="row col-md-2 mx-auto justify-content-center ">
<button  data-bs-toggle="modal" data-bs-target="#addSlide"
class="btn mybtn rounded-pill mb-4 h-1 fs-3 btn-outline-success  ">Add a new contact
</button> 
</div>
</div>
 <div class="container">
      @forelse ($contacts as $contact )
    <table class="table table-bordered"> 
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Header</th>
            <th scope="col">Body</th>
            <th scope="col">location</th>
            <th scope="col">Facebook</th>
            <th scope="col">Instagram</th>
            <th scope="col">Twitter</th>
            <th scope="col">LinkedIn</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Tel</th>
            <th scope="col">Edit</th>
            <th scope="col">delete</th>
           </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">{{$contact->id}}</th>
            <td class="fs-5">{{$contact->Header}}</td>
            <td class="fs-5">{{$contact->Body}}</td>
            <td class="fs-5">{{$contact->Email}}</td>
            <td class="fs-5">{{$contact->Phone}}</td>
            <td class="fs-5">{{$contact->Tel}}</td>
            <td class="fs-5">{{$contact->location}}</td>
            <td class="fs-5">{{$contact->Facebook}}</td>
            <td class="fs-5">{{$contact->Twitter}}</td>
            <td class="fs-5">{{$contact->Instagram}}</td>
            <td class="fs-5">{{$contact->Telegram}}</td>
            <td class="fs-5">{{$contact->LinkedIn}}</td>
            <td class="fs-5"> {}<a> <i data-bs-t{}oggle="modal" data-bs-target="#edit"  class="btn fas fa-edit fa-2x text-success"></i></a> </td>
            <td class="fs-5"> 
                <form id="" action="admin/contact/{{ $contact->id }}" method="POST">
                    @csrf
                @method('DELETE')
                <button  class="btn fas fa-trash fa-2x text-danger"></button>
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


 

<!-- Modal for adding a new contact -->

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
                            <form action="admin/contact/store"  method="POST">
                                @csrf
                                <div class="row">
                                  <div class="control-group col-12">
                                    <label for="Header">Title</label>
                                    <input type="text" class="form-control" name="Header" placeholder="Enter Slogan Here"  required>
                                  </div>
                                  <div class="control-group col-12">
                                    <label for="Body">Body</label>
                                    <input type="text" class="form-control" name="Body" placeholder="Enter slogan body  Here"  required>
                                  </div>
                                  <div class="control-group col-12">
                                    <label for="Email">Email</label>
                                    <input type="email" class="form-control" name="Email" placeholder="Enter your Email Here"  required>
                                  </div>
                                  <div class="control-group col-12">
                                    <label for="Header">Location Url</label>
                                    <input type="text" class="form-control" name="location" placeholder="Enter Location Url Here"  required>
                                  </div>
                                  <div class="control-group col-12">
                                    <label for="Tel">Telephone</label>
                                    <input type="text" class="form-control" name="Tel" placeholder="Enter your Telephone number"  required>
                                  </div>
                                  <div class="control-group col-12">
                                    <label for="Phone">Phone</label>
                                    <input type="number" class="form-control" name="Phone" placeholder="EEnter your mobile phone number"   required>
                                  </div>
                                  <div class="control-group col-12">
                                    <label for="Instagram">Instagram</label>
                                    <input type="text" class="form-control" name="Instagram" placeholder="Enter your Instagram address Here"  required>
                                  </div>
                                  <div class="control-group col-12">
                                    <label for="LinkedIn">LinkedIn</label>
                                    <input type="text" class="form-control" name="LinkedIn" placeholder="Enter LinkedIn url Here"  required>
                                  </div>
                                  <div class="control-group col-12">
                                    <label for="Twitter">Twitter</label>
                                    <input type="text" class="form-control" name="Twitter" placeholder="Enter Twitter address Here"  required>
                                  </div>
                                  <div class="control-group col-12">
                                    <label for="Telegram">Telegram</label>
                                    <input type="text" class="form-control" name="Telegram" placeholder="Enter your Telegram address Here"  required>
                                  </div>
                                  <div class="control-group col-12">
                                    <label for="Facebook">Facebook</label>
                                    <input type="text" class="form-control" name="Facebook" placeholder="Enter your facebok address Here"  required>
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

@foreach ($singles as $contact )
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
                        <form action="admin/service_items/{{ $contact->id }}"  method="POST" enctype="multipart/form-data" >
                          @csrf
                            @method('PUT')
                            <div class="row">
                              <div class="control-group col-12">
                                <label for="Header">Name</label>
                                <input type="text" class="form-control" name="Name" placeholder="Enter Slide Title Here" value="{{ $contact->Name }}"  required>
                              </div>
                              <div class="control-group col-12 mt-2">
                                <label for="Intro">Intro</label>
                                <textarea name="Intro"   type="text" class="form-control" placeholder="Enter The Body of Your Slide" required>{{ $contact->Intro }} </textarea>
                              </div>
         
                              <div class="control-group col-12 mt-2">
                               <label for="Body">Body</label>
                               <textarea name="Body"   type="text" class="form-control" placeholder="Enter The Body of Your Slide" required>{{ $contact->Body}}</textarea>
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
  