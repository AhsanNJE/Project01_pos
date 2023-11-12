<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Register & Signup | UnrealSoft.</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

		<!-- Bootstrap css -->
		<link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
		<!-- App css -->
		<link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style"/>
		<!-- icons -->
		<link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
		<!-- Head js -->
		<script src="{{ asset('backend/assets/js/head.js') }}"></script>

    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <div class="auth-logo">
                                        <a href="index.html" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <!-- <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="" height="22"> -->
                                                <h2>UnrealSoft.</h2>
                                            </span>
                                        </a>
                    
                                        <a href="index.html" class="logo logo-light text-center">
                                            <span class="logo-lg">
                                                <img src="{{ asset('backend/assets/images/logo-light.png') }}" alt="" height="22">
                                            </span>
                                        </a>
                                    </div>
            
                                </div>

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <!-- Name -->
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror" name="name" type="text" id="login"  placeholder="Enter your Name">
                                        @error('name')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                     <!-- Email Address -->
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input class="form-control @error('email') is-invalid @enderror" name="email" type="email" id="email"  placeholder="Enter your Email">
                                        @error('email')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <!-- Phone Number -->
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input class="form-control @error('phone') is-invalid @enderror" name="phone" type="text" id="phone"  placeholder="Enter your Phone">
                                        @error('phone')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                     <!-- Password -->
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password">
                                            <!-- @error('password')
                                                <span class="text-danger"> {{ $message }} </span>
                                            @enderror -->
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Confirm Password -->
                                    <div class="mb-3">
                                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Confirm Password">
                                            <!-- @error('password_confirmation')
                                                <span class="text-danger"> {{ $message }} </span>
                                            @enderror -->
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center d-grid">
                                        <button class="btn btn-success" type="submit">Register</button>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-white-50">Already have account?  <a href="{{ route('login') }}" class="text-white ms-1"><b>Sign In</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            2022 - <script>document.write(new Date().getFullYear())</script> &copy; Easy Pos by <a href="" class="text-white-50">UnrealSoft.</a> 
        </footer>

        <!-- Vendor js -->
        <script src="{{ asset('backend/assets/js/vendor.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('backend/assets/js/app.min.js') }}"></script>
        
    </body>
</html>