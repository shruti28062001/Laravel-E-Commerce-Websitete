{{-- @extends('layouts/frontLayout/front_design') --}}
{{-- @section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>


{{-- @extends('layouts.app')
 @section('content')   --}}
 <form action="{{url('user-login')}}" method="POST">@csrf 


<div class="d-flex justify-content-center mt-5 mb-5">
	<div class="mb-3 col-md-4 pt-4 card text-center borderleft">
	  <h3 class=" ">Log in</h3></br>
	  <label for="exampleInputEmail1" class="form-label five">Email or phone number</label>
	  <input type="email" class="form-control mail mx-auto" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" style="max-width: 300px"></br>
  
	  <div class="password-container">
		<label for="exampleInputPassword1" class="form-label five">Password</label>
		<div>
		  <input type="password" class="form-control mail  mx-auto" id="exampleInputPassword1" name="password" style="max-width: 300px" />
  </div>
	  </div>
	  <div class="eleven mt-4">
		
		<button type="submit" class="btn btn-success">Log in</button>

	  </div>
	  <h6 class="ten">Or login with</h6>
	  <div class="eight">
		 <h3> <i class="fa-brands"></i></h3>
		<button type="button" class="btn btn-outline-primary face mb-3"> Facebook</button>
  
		<button type="button" class="btn btn-outline-danger mb-3">Google</button>
	  </div>
	  <div class="mb-3">
		<a href="{{url('/user-register')}}">
		<button>
			register
		</button>
	</a>
	  </div>
  
	</div>
  
  </div>
</form>  
{{-- @endsection  --}}

 {{-- <div class="container-fluid">
    <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
    <div class="login d-flex align-items-center py-5">
    <div class="container">
    <div class="row">
    <div class="col-md-9 col-lg-8 mx-auto pl-5 pr-5">
    <h3 class="login-heading mb-4">Welcome Back!</h3>
    <form action="{{url('user-login')}}" method="post">
        @csrf 
    <div class="form-label-group">
    <input type="email" value="{{old('useremail')}}" required class="form-conrol  @error('useremail')is-invalid @enderror" name="useremail" id="inputEmail" class="form-control" placeholder="Email address">
    <label for="inputEmail">Email address / Mobile</label>
    <span class="text-danger">
        @error('useremail')
        {{$message}}
        @enderror
    </span>
    </div>
    <div class="form-label-group">
    <input type="password" value="{{old('userpass')}}" required class="form-conrol  @error('userpass')is-invalid @enderror" name="userpass" id="inputPassword" class="form-control" placeholder="Password">
    <label for="inputPassword">Password</label>
    <span class="text-danger">
        @error('userpass')
        {{$message}}
        @enderror
    </span>
    </div>
    <div class="custom-control custom-checkbox mb-3">
    <input type="checkbox" class="custom-control-input" id="customCheck1">
    <label class="custom-control-label" for="customCheck1">Remember password</label>
    </div>
    <button type="submit" class="btn btn-lg btn-outline-primary btn-block btn-login text-uppercase font-weight-bold mb-2">Sign in</button>
    <div class="text-center pt-3">
    Don’t have an account? <a class="font-weight-bold" href="{{url('/user-register')}}">Sign Up</a>
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
	 @endsection  --}}




