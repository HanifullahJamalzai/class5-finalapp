<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('admin_assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('admin_assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href=" {{ asset('admin_assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href=" {{ asset('admin_assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href=" {{ asset('admin_assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  
  <link href=" {{ asset('admin_assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 d-flex flex-column align-items-center justify-content-center">

              {{-- <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
              </div><!-- End Logo --> --}}

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <form action="{{ route('user.store')  }}" class="row g-3 " method="Post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-6">
                      <label for="yourUsername" class="form-label">Name</label>
                      <div class="input-group has-validation">
                        <input type="text" name="name" class="form-control" id="yourUsername" value="{{ old('name') }}">
                      </div>
                      @error('name')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="col-6">
                      <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <input type="email" name="email" class="form-control" id="yourUsername" value="{{ old('email') }}">
                      </div>
                      @error('email')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="col-6">
                      <label for="yourUsername" class="form-label">Photo</label>
                      <div class="input-group has-validation">
                        <input type="file" name="photo" class="form-control" id="yourUsername" >
                      </div>
                    </div>
                    <div class="col-6">
                      <label for="yourUsername" class="form-label">Bio</label>
                      <div class="input-group has-validation">
                        <textarea type="text" name="bio" class="form-control" id="yourUsername">{{ old('bio') }}</textarea>
                      </div>
                      @error('bio')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="col-6">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" >
                      @error('password')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="col-6">
                      <label for="yourPassword" class="form-label">Confirm Password</label>
                      <input type="password" name="password_confirmation" class="form-control" id="yourPassword">
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Register</button>
                    </div>

                    <div class="col-12">
                      <p class="small mb-0">I have an account? <a href="{{ route('login') }}">Create an account</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  <script src=" {{ asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


  <!-- Template Main JS File -->
  <script src="{{ asset('admin_assets/js/main.js') }}"></script>

</body>

</html>
