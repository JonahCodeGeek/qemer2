<div id="carouselExampleCaptions" class="carousel slide carousel-fade " data-bs-ride="carousel">

    <div class="carousel-indicators">
        @foreach ($items as $item)
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        @endforeach
        
        @for ($i =0; $i >=4; $i++)
             <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to={{ $i }} aria-label="Slide 2"></button>
        @endfor
       
       
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="5000">
            <img src="{{ asset('storage/slider_images/'.$item->slide_image) }}"
                class="d-block w-100 img2 " alt="...">
            <div class="carousel-caption col-md-5 group1 " data-aos="flip-left">
                <h1 class="myh2 text-start ">{!! $item->Header !!}</h1>
                <p class="myp text-start lh-1">{!! $item->Header !!}</p>
                <button onClick="register()" data-bs-toggle="modal" data-bs-target="#registerToogle"
                    class="btn mybtn rounded-pill btn-outline-success d-flex justify-content-start">GET STARTED
                    NOW</button>
            </div>
        </div>
        
        @foreach ($items as $item)
        <div class="carousel-item" data-bs-interval="5000">
            <img src="{{ asset('storage/slider_images/'.$item->slide_image) }}"
                class="d-block w-100 img2" alt="...">
            <div class="carousel-caption col-md-5 group1">
            
                <h1 class="myh2 text-start ">{!! $item->Header !!}</h1>
                <p class="myp text-start lh-1">{!! $item->Header !!}</p>
                <button onClick="register()" data-bs-toggle="modal" data-bs-target="#registerToogle"
                    class="btn mybtn rounded-pill btn-outline-success d-flex justify-content-start">GET STARTED
                    NOW</button>
            </div>
        </div>
               

    </div>
     @endforeach
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

{{-- <script>
function register() {
window.location.href ="/register";
}
</script> --}}
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="registerToogle" tabindex="-5" role="dialog" aria-labelledby="modelTitleId"
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
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row py-3">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row py-3">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row py-3">
                                    <label for="password-confirm"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
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
