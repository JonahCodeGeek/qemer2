
    

    

<div class="container-fluid bg-white" id="services">
    <div class="text-center py-4 " data-aos="flip-right">
        <h3 class="text-pharma fs-1"><b>SERVICES</b></h3>
    </div>@forelse ($services as $service )
    <div class="row card-group d-flex text-center justify-content-center">
        <div class=" col-sm-5" data-aos="fade-up-right">
            <div class="justify-content-center mt-2 mx-5">
                <i class="bi bi-file-medical fs-1 text-pharma"></i>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $service->Body }}</h5>
                <p class="card-text">You can search medications with their prices and also upload the photo of the prescription then, you will be contacted by our call center for allocating the medication. </p>
            </div>
        </div>
        
        @empty
<div class="container">
    <div class="row  p-4 gap-5 justify-content-between ">
        <h1> No items available to show</h1>
    </div>
</div>
     @endforelse 
         
        <div class="text-center">
            <p>Download the easy-to-use <a href="" class="text-decoration-none">“Alen”</a> app to conveniently search nearby health care providers.</p>
        </div>
    </div>
</div>

