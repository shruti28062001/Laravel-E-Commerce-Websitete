{{-- @extends('layouts/frontLayout/front_design')
@section('content') --}}
{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
	.error{
		color: red;
		margin-bottom: 0px;
	}
	@media only screen and (max-width: 667px){
		.respo{
			margin-top: 137px;
    		margin-bottom: -30px;
		}
	}
	.required:after{
        content: ' *'!important;
        color: red!important;
    } --}}
{{-- </style> --}}
{{-- <div class="container mt-2">
	@if(Session::has('flash_message_error'))
	<div class="alert alert-danger alert-dismissible fade show respo" role="alert">
	  	<strong>{!! session('flash_message_error') !!}</strong>
	  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    	<span aria-hidden="true">&times;</span>
	  	</button>
	</div>
	@endif
	@if(Session::has('flash_message_success'))			
	<div class="alert alert-success alert-dismissible fade show respo" role="alert">
	  	<strong>{!! session('flash_message_success') !!}</strong>
	  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    	<span aria-hidden="true">&times;</span>
	  	</button>
	</div>
	@endif
	<div class="row">
	    <div class="col-lg-6 mx-auto">
	        <div>
	            <div class="card-body">
	                <h3 class="card-title text-center fs-24 lh-35 pb-4">User Register</h3>
	                <form action="{{ url('/user-register') }}" method="post" id="userloginReg">@csrf
	                    <div class="input-box">
	                        <label class="label-text required">Full Name</label>
	                        <div class="form-group">
	                            <input class="form-control form--control" type="name" name="name" placeholder="Full Name" title="Please enter full name."  required="required">
	                            <span class="la la-user input-icon"></span>
	                        </div> --}}
	                    </div><!-- end input-box -->
	                    {{-- <div class="input-box">
	                        <label class="label-text required">Email Address</label>
	                        <div class="form-group">
	                            <input class="form-control form--control" type="email" name="email" placeholder="Enter Email Address">
	                            <span class="la la-envelope input-icon"></span>
	                        </div> --}}
	                    {{-- </div><!-- end input-box -->
	                    <div class="input-box">
	                        <label class="label-text required">Mobile Number</label>
	                        <div class="form-group">
	                            <input class="form-control form--control" type="text" name="mobile" placeholder="Enter Mobile Number" pattern="[789][0-9]{9}" title="Please enter mobile number." required>
	                            <span class="la la-phone input-icon"></span>
	                        </div> --}}
	                    {{-- </div><!-- end input-box -->
	                    <div class="input-box">
	                        <label class="label-text required">Password</label>
	                        <div class="input-group mb-3">
	                            <span class="la la-lock input-icon"></span>
	                            <input class="form-control form--control password-field" type="password" name="password" placeholder="Password">
	                        </div> --}}
	                    {{-- </div><!-- end input-box -->
	                    <div class="btn-box">
	                        <button class="btn theme-btn" type="submit">Register Account </button> --}}
	                    <!--    <p class="fs-14 pt-2">Already have an account? <a href="login.html" class="text-color hover-underline">Log in</a></p>--> --}}
	                    {{-- </div><!-- end btn-box -->
	                </form>
	            </div><!-- end card-body -->
	        </div><!-- end card -->
	    </div><!-- end col-lg-7 -->
	    <div class="col-lg-6 mx-auto">
	        <img src="{{asset('images/frontend_images/login/register.jpg')}}" width="100%" height="100%" alt="registerpage">
	    </div><!-- end col-lg-7 -->
	</div>     --}}
{{-- </div>

<style>
	.right{
		float: right;
	}
	.login-container{
	    margin-top: 10%;
	}
	.login-form-1{
	    padding: 3%;
	    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
	}
	.login-form-1 h3{
	    text-align: center;
	    color: #333;
	}
	.login-form-2{
	    padding: 3%; --}}
	    {{-- /*background: #0062cc;*/ --}}
	    {{-- background-color: #00cc2c85;
    	/*background-image: url(images/frontend_images/register.jpg);*/
    	background-size: cover;
    	/*background-blend-mode: multiply;*/
	    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
	}
	.login-form-2 h3{
	    text-align: center; --}}
	    {{-- color: #fff;
	}
	.login-container form{
	    /*padding: 10%;*/
	    padding: 20px 20px 20px 20px;
	}
	.btnSubmit
	{
	    width: 50%;
	    border-radius: 1rem;
	    padding: 1.5%;
	    border: none;
	    cursor: pointer;
	}
	.login-form-1 .btnSubmit{
	    font-weight: 600;
	    color: #fff;
	    background-color: #00cc2c85;
	}
	.login-form-2 .btnSubmit{
	    font-weight: 600;
	    color: #000;
	    background-color: #fff;
	}
	.login-form-2 .ForgetPwd{
	    color: #fff;
	    font-weight: 600;
	    text-decoration: none;
	}
	.login-form-1 .ForgetPwd{
	    color: #0062cc;
	    font-weight: 600;
	    text-decoration: none;
}
</style>
<script>
	$(document).ready(function(){
		$('#myPassword').passtrength({
	      minChars: 6,
	      passwordToggle: true,
	      tooltip: true,
	      eyeImg : "images/frontend_images/eye.svg"
	    });
	});
</script> --}}

{{-- @endsection --}}

@extends('layouts.app')
	@section('content')
<div class="container-fluid">
    <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
    <div class="login d-flex align-items-center py-5">
    <div class="container">
    <div class="row">
    <div class="col-md-9 col-lg-8 mx-auto pl-5 pr-5">
    <h3 class="login-heading mb-4">New Buddy!</h3>
    <form action="{{ url('/user-register') }}" method="post">
        @csrf

        <div class="form-label-group">
            <input type="text" value="{{old('name')}}" required class="form-conrol  @error('name')is-invalid @enderror" name="name" id="inputName" class="form-control" placeholder="Name">
            <label for="inputName">Name</label>
            <span class="text-danger">
                @error('name')
                {{$message}}
                @enderror
            </span>
      </div>

	  <div class="form-label-group">
		<input type="number" value="{{old('phone')}}" required class="form-conrol  @error('phone')is-invalid @enderror" name="phone" id="inputPhone" class="form-control" placeholder="Phone Number">
		<label for="inputPhone"> Phone NO</label>
		<span class="text-danger">
			@error('phone')
			{{$message}}
			@enderror
		</span>
		</div>

      

    <div class="form-label-group">
    <input type="email" value="{{old('email')}}" required class="form-conrol  @error('email')is-invalid @enderror" name="email" id="inputEmail" class="form-control" placeholder="Email address">
    <label for="inputEmail">Email address / Mobile</label>
    <span class="text-danger">
        @error('email')
        {{$message}}
        @enderror
    </span>
    </div>
    <div class="form-label-group">
    <input type="password" value="{{old('password')}}" required class="form-conrol  @error('password')is-invalid @enderror" name="password" id="inputPassword" class="form-control" placeholder="Password">
    <label for="inputPassword">Password</label>
    <span class="text-danger">
        @error('password')
        {{$message}}
        @enderror
    </span>
    </div>
    <div class="form-label-group">
        <input id="password-confirm" value="{{old('password')}}" required class="form-conrol  @error('password')is-invalid @enderror" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

        <label for="password-confirm">Confirm Password</label>

         
        
    </div>
    <div class="custom-control custom-checkbox mb-3">
    <input type="checkbox" class="custom-control-input" id="customCheck1">
    <label class="custom-control-label" for="customCheck1">Remember password</label>
    </div>
    <button type="submit" class="btn btn-lg btn-outline-primary btn-block btn-login text-uppercase font-weight-bold mb-2">Sign in</button>
    <div class="text-center pt-3">
    Don’t have an account? <a class="font-weight-bold" href="register.html">Sign Up</a>
    </div>
    </form>
    <hr class="my-4">
    <p class="text-center">LOGIN WITH</p>
    <div class="row">
    <div class="col pr-2">
    <button class="btn pl-1 pr-1 btn-lg btn-google font-weight-normal text-white btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Google</button>
    </div>
    <div class="col pl-2">
    <button class="btn pl-1 pr-1 btn-lg btn-facebook font-weight-normal text-white btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Facebook</button>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection