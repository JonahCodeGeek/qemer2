@extends("layouts.app")
@section('content')
@extends('template.navbar')
 <div class="container">
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
            <th scope="row">{{$single->id}}</th>
            <td class="fs-5">{{$single->Header}}</td>
            <td class="fs-5">{{$single->Body}}</td>
            <td class="fs-5">{{$single->Email}}</td>
            <td class="fs-5">{{$single->Phone}}</td>
            <td class="fs-5">{{$single->Tel}}</td>
            <td class="fs-5">{{$single->location}}</td>
            <td class="fs-5">{{$single->Facebook}}</td>
            <td class="fs-5">{{$single->Twitter}}</td>
            <td class="fs-5">{{$single->Instagram}}</td>
            <td class="fs-5">{{$single->Telegram}}</td>
            <td class="fs-5">{{$single->LinkedIn}}</td>
            <td class="fs-5"> <a> <i data-bs-toggle="modal" data-bs-target="#edit"   class="btn  fas fa-edit fa-2x text-success"></i></a> </td>
            <td class="fs-5"><button class="btn fas fa-trash fa-2x text-danger"></button></td>
        </tr>
        </tbody>
      </table> 
</div>


<!-- Modal for adding a new contact -->

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
                            <form    method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                  <div class="control-group col-12">
                                    <label for="Header">Title</label>
                                    <input type="text" class="form-control" name="Header" placeholder="Enter Slogan Here"  required value="{{ $single->Header }}">
                                  </div>
                                  <div class="control-group col-12">
                                    <label for="Body">Body</label>
                                    <input type="text" class="form-control" name="Body" placeholder="Enter slogan body  Here"  required value="{{ $single->Body }}">
                                  </div>
                                  <div class="control-group col-12">
                                    <label for="Email">Email</label>
                                    <input type="email" class="form-control" name="Email" placeholder="Enter your Email Here"  required value="{{ $single->Email }}">
                                  </div>
                                  <div class="control-group col-12">
                                    <label for="Header">Location Url</label>
                                    <input type="text" class="form-control" name="location" placeholder="Enter Location Url Here"  required value="{{ $single->location }}">
                                  </div>
                                  <div class="control-group col-12">
                                    <label for="Tel">Telephone</label>
                                    <input type="text" class="form-control" name="Tel" placeholder="Enter your Telephone number"  required value="{{ $single->Tel }}">
                                  </div>
                                  <div class="control-group col-12">
                                    <label for="Phone">Phone</label>
                                    <input type="number" class="form-control" name="Phone" placeholder="Enter your mobile phone number"   required value="{{ $single->Phone }}">
                                  </div>
                                  <div class="control-group col-12">
                                    <label for="Instagram">Instagram</label>
                                    <input type="text" class="form-control" name="Instagram" placeholder="Enter your Instagram address Here"  required value="{{ $single->Instagram }}">
                                  </div>
                                  <div class="control-group col-12">
                                    <label for="LinkedIn">LinkedIn</label>
                                    <input type="text" class="form-control" name="LinkedIn" placeholder="Enter LinkedIn url Here"  required value="{{ $single->LinkedIn }}">
                                  </div>
                                  <div class="control-group col-12">
                                    <label for="Twitter">Twitter</label>
                                    <input type="text" class="form-control" name="Twitter" placeholder="Enter Twitter address Here"  required value="{{ $single->Twitter }}">
                                  </div>
                                  <div class="control-group col-12">
                                    <label for="Telegram">Telegram</label>
                                    <input type="text" class="form-control" name="Telegram" placeholder="Enter your Telegram address Here"  required value="{{ $single->Telegram }}">
                                  </div>
                                  <div class="control-group col-12">
                                    <label for="Facebook">Facebook</label>
                                    <input type="text" class="form-control" name="Facebook" placeholder="Enter your facebok address Here"  required value="{{ $single->Facebook }}">
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

  