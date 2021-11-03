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
                        <div class="mb-4 text-sm text-white">
                            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                        </div>
                        <div class="p-30 rounded30 box-shadowed" style="background: #000000b5;">
                            @if (session('status') == 'verification-link-sent')
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                </div>
                            @endif
                            <div class="items-center justify-between">
                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf
                    
                                    <div class="form-group">
                                            
                                        <button type="submit" class="btn btn-primary btn-rounded">
                                            {{ __('Resend Verification Email') }}
                                        </button>
                                    </div>
                                </form>
                    
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                    
                                    <button type="submit" class="btn btn-info btn-rounded">
                                        {{ __('Log Out') }}
                                    </button>
                                </form>
                            </div>


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
