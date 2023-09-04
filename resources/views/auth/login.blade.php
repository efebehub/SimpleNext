@extends('layouts.app')

@section('content')
{{--background-image: url('img/back.jpg'); background-size: cover; vertical-align: middle; text-align: center;
display: flex;
justify-content: center; 
align-items: center; 
height: 100vh; --}}
<section class="vh-100 border-top border-info"
style="background-image: url('img/back1.jpg'); background-repeat: repeat;">
  <div class="container-fluid vh-100">
    <div class="row" style="height: 100%;">

      <div class="col-4 text-black align-items-center pt-5 mt-5 mb-5 pb-5 shadow p-3 mb-5 bg-body rounded border border-info" 
           style="margin-left: auto; margin-right: auto; box-shadow: 35px rgba(0, 0, 100, 0.8); z-index: 100; height: 70%; background-color: #ddd;  ">

            <form method="POST" action="{{ route('login') }}"  class="align-items-left" style="width: 22rem; font-size: 1.5rem; margin-left: auto; margin-right: auto;">
            @csrf

            <div class="row mb-3">

                <div class="" style="text-align: center;">
                    <img src="img/logo.png" class="pt-3 pb-1" style="width: 70%; height: auto; margin-left: auto; margin-right: auto;" />
                </div>
            </div>

            <div class="row mb-3">

                <div class="">
                    
                    <input id="email" type="email" class="form-control p-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="User" required autocomplete="email" autofocus >

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <h6><strong>{{ $message }}</strong></h6>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">

                <div class="">
                   
                    <input id="password" type="password" class="form-control  p-3 @error('password') is-invalid @enderror" placeholder="Pass"  name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="row mb-0">
                <div class="">

                   <button class="btn btn-primary btn-lg btn-block p-3" type="submit" style="width: 100%;">Login</button>
                  <br/>
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
</section>

@endsection