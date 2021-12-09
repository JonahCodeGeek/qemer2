<nav class="navbar navbar-dar navbar-expand-lg bg-white absolute-top mb-0" style="width: 100%" id="mynav">
    <div class="container-fluid ">
      <a class="navbar-brand text-white fs-2" href="#"><img class="" src="image/alen.png" alt="Alen-Logo" style=" width: 7%; height:7%;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav justify-content-end " id="navbarSupportedContent">
        <nav class="">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class=
            "nav-item">
              <a class="nav-link text-pharma fs-4 px-2" aria-current="page" href=" ">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-pharma fs-4 px-2" href="about-us">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-pharma fs-4 px-2" href="services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-pharma fs-4 px-2 rounded-3" href="contact">Contact</a>
            </li>
            <li class="nav-item">
              <button data-bs-toggle="modal" data-bs-target="#LoginToogle"
                  class="fs-4 btn btnlogin rounded-3">Login</button>
          </li>
          </ul>
        </nav>
      </div>
    </div>
  </nav>
  {{-- <script>
    function login() {
      window.location.href ="/login";
    }
    // var myNav = document.getElementById('mynav');
    // window.onscroll = function () { 
    //       if (document.body.scrollTop >= 200 || document.documentElement.scrollTop >= 200 ) {
    //           myNav.classList.add("nav-colored");
    //           myNav.classList.remove("bg-pharma");
    //       } 
    //       else {
    //           myNav.classList.add("bg-pharma");
    //           myNav.classList.remove("nav-colored");
    //       }
    //   };
  </script> --}}

  
<!-- Modal -->
<div class="modal fade" id="LoginToogle" tabindex="-5" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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
                          <form method="POST" action="{{ route('login') }}">
                              @csrf
                              <div class="form-group row py-3">
                                  <label for="email"
                                      class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                  <div class="col-md-6">
                                      <input id="email" type="email"
                                          class="form-control @error('email') is-invalid @enderror" name="email"
                                          value="{{ old('email') }}" required autocomplete="email" autofocus>

                                      @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                  </div>
                              </div>

                              <div class="form-group row ">
                                  <label for="password"
                                      class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                  <div class="col-md-6">
                                      <input id="password" type="password"
                                          class="form-control @error('password') is-invalid @enderror" name="password"
                                          required autocomplete="current-password">

                                      @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                  </div>
                              </div>

                              <div class="form-group row py-3">
                                  <div class="col-md-6 offset-md-4">
                                      <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="remember"
                                              id="remember" {{ old('remember') ? 'checked' : '' }}>

                                          <label class="form-check-label" for="remember">
                                              {{ __('Remember Me') }}
                                          </label>
                                      </div>
                                  </div>
                              </div>

                              <div class="form-group row mb-0">
                                  <div class="col-md-8 offset-md-4">
                                      <button type="submit" class="btn btn-primary">
                                          {{ __('Login') }}
                                      </button>

                                      @if (Route::has('password.request'))
                                      <a class="btn btn-link" href="{{ route('password.request') }}">
                                          {{ __('Forgot Your Password?') }}
                                      </a>
                                      @endif
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

