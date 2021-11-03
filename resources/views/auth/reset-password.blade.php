<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>MicroWeb School</title>
    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/vendors_css.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/skin_color.css') }}">

</head>

<body class="hold-transition"
    style="background-image:url('{{ asset('backend/assets/images/auth-bg/education-login.jpg') }}'); background-repeat: no-repeat; background-size: cover;  background-position: center center; ">

    <div class="container h-p100">
        <div class="row align-items-center justify-content-md-center h-p100">


            <div class="col-12">
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="content-top-agile p-10">
                            <img src="{{asset('backend/assets/images/logo/login-logo.png')}}" alt="">
                        </div>
                        
                        <div class="p-30 rounded30 box-shadowed" style="background: #000000b5;">
                            
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                    
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    
                                <div class="form-group">
                                    <label for="email" class="form-controll">{{ __('Email') }}</label>
                                    <input id="email" class="form-control pl-15 bg-transparent text-white plc-white" type="email" name="email" :value="old('email', $request->email)" required autofocus>
                                </div>
                    
                                <div class="mt-4">
                                    <label for="password">{{ __('New Password') }}</label>
                                    <input id="password" class="form-control pl-15 bg-transparent text-white plc-white" type="password" name="password" required autocomplete="new-password">
                                </div>
                    
                                <div class="mt-4">
                                    <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                                    <input id="password_confirmation" class="form-control pl-15 bg-transparent text-white plc-white" type="password" name="password_confirmation" required autocomplete="new-password">
                                </div>
                    
                                <div class="flex items-center justify-end mt-4">
                                    
                                    <button type="submit" class="btn btn-info btn-rounded mt-10">{{ __('Reset Password') }}</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Vendor JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{asset('backend/assets/js/vendors.min.js')}}"></script>
    <script src="{{asset('backend/assets/assets/icons/feather-icons/feather.min.js')}}"></script>
    

</body>

</html>
