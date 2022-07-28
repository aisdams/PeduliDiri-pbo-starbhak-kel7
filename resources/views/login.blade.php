<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stellar Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('template/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('template/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}"> <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" />
    <style>
    * {
        box-sizing: border-box;
      }

      .content-wrapper{
          
          width: 100vh;
          height: 100vh;
        }
    .container-scroller {
      background-image: url('https://images.pexels.com/photos/7235894/pexels-photo-7235894.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
      position: fixed;
      bottom: 0;
      width: 100%;
      padding: 10px;
    }
    .coba {
      /* background-color: rgba(255, 255, 255, 0.096);
      -webkit-backdrop-filter: blur(15px);
      backdrop-filter: blur(15px);
      position: relative; */
      background-color: white;
      opacity: 0.75;
      width: 45rem;
      height: 30rem;
      color: #fff;
      margin: 0 auto;
      top: 75px;
      border-radius: 10px;
    }
    </style>
  </head>
  <body>
    <!-- {{-- <div class="fullscreen-bg">
      <video loop muted autoplay poster="poster.jpg" class="fullscreen-bg__video">
          <source src="{{ asset('img/bgvideo.mp4') }}" type="video/mp4">
      </video>
  </div> --}} -->
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="coba">
          <div class="row flex-grow bgnya">
            <div class="col-lg-6 mx-auto">
              <div class="auth-form-light text-left p-4">
                <div class="brand-logo text-center">
                  <img src="{{ asset('img/logo.png') }}" style="width: 150px;">
                </div>
                <form action="{{ route('login.post') }}" method="POST">
                  @csrf

                  <div class="form-group mt-3">
                    <input type="number" class="form-control form-control-lg" name="nik" placeholder="NIK" required autofocus>
                    @if ($errors->has('nik'))
                   <span class="text-danger">{{ $errors->first('nik') }}</span>
                   @endif
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="namalengkap" placeholder="Nama Lengkap" required autofocus>
                    @if ($errors->has('namalengkap'))
                   <span class="text-danger">{{ $errors->first('namalengkap') }}</span>
                   @endif
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password" required>
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                      Login
                  </button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                    </div>
                    <a href="#" class="auth-link text-white">Forgot password ?</a>
                  </div>
                  <div class="text-center mt-2 font-weight-light"> Don't Have Account ? <a href="{{ url('registration')}}" class="text-info">Sign Up</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    </header>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('template/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('template/js/off-canvas.js') }}"></script>
    <script src="{{ asset('template/js/misc.js') }}"></script>
    <!-- endinject -->
  </body>
</html>