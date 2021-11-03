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

    <div class="container ">
        <div class="row align-items-center justify-content-md-center h-p100">


            <div class="col-12">
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="content-top-agile p-10">
                            <img src="{{asset('backend/assets/images/logo/login-logo.png')}}" alt="">
                        </div>
                        <div class="p-30 mt-5 mb-5 box-shadowed" style="background: #24318594;">
                            

                            <form class="register-form" method="POST" action="{{ route('register') }}">
                                @csrf
                    
                                <div class="form-group">
                                    <label for="name"> {{ __('Name') }}</label>
                                    <input id="name" class="form-control block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                    
                                <div class="form-group">
                                    <label for="email">{{ __('Email') }}</label>
                                    <input id="email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                    
                                <div class="form-group">
                                    <label for="pass">{{ __('Password') }}</label>
                                    <input id="pass" class="form-control block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                    
                                <div class="form-group">
                                    <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                                    <input id="password_confirmation" class="form-control block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                                </div> 
                                
                    
                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                    <div class="mt-4">
                                        <label for="terms">
                                            <div class="flex items-center">
                                                <input type="checkbox" name="terms" id="terms"/>
                    
                                                <div class="ml-2">
                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                @endif
                                <button class="btn btn-primary">{{ __('Register') }}</button>
                                
                            </form>
                            
                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-white hover:text-gray-900" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                
                                
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
