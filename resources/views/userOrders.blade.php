<!doctype html>
<html lang="en">

<!-- Mirrored from askbootstrap.com/preview/osahan-eat/orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Feb 2024 10:19:57 GMT -->
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Askbootstrap">
<meta name="author" content="Askbootstrap">
<title>Osahan Eat - Online Food Ordering Website HTML Template</title>

<link rel="icon" type="image/png" href="img/favicon.png">

<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link href="vendor/fontawesome/css/all.min.css" rel="stylesheet">

<link href="vendor/icofont/icofont.min.css" rel="stylesheet">

<link href="vendor/select2/css/select2.min.css" rel="stylesheet">

<link href="css/osahan.css" rel="stylesheet">
</head>
<body>

<div class="modal fade" id="edit-profile-modal" tabindex="-1" role="dialog" aria-labelledby="edit-profile" aria-hidden="true">
<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="edit-profile">Edit profile</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form>
<div class="form-row">
<div class="form-group col-md-12">
<label>Phone number
</label>
<input type="text" value="+91 85680-79956" class="form-control" placeholder="Enter Phone number">
</div>
<div class="form-group col-md-12">
<label>Email id
</label>
<input type="text" value="iamosahan@gmail.com" class="form-control" placeholder="Enter Email id
                              ">
</div>
<div class="form-group col-md-12 mb-0">
<label>Password
</label>
<input type="password" value="**********" class="form-control" placeholder="Enter password
                              ">
</div>
</div>
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn d-flex w-50 text-center justify-content-center btn-outline-primary" data-dismiss="modal">CANCEL
</button><button type="button" class="btn d-flex w-50 text-center justify-content-center btn-primary">UPDATE</button>
</div>
</div>
</div>
</div>

<div class="modal fade" id="add-address-modal" tabindex="-1" role="dialog" aria-labelledby="add-address" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="add-address">Add Delivery Address</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form>
<div class="form-row">
<div class="form-group col-md-12">
<label for="inputPassword4">Delivery Area</label>
<div class="input-group">
<input type="text" class="form-control" placeholder="Delivery Area">
<div class="input-group-append">
<button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="icofont-ui-pointer"></i></button>
</div>
</div>
</div>
<div class="form-group col-md-12">
<label for="inputPassword4">Complete Address
</label>
<input type="text" class="form-control" placeholder="Complete Address e.g. house number, street name, landmark">
</div>
<div class="form-group col-md-12">
<label for="inputPassword4">Delivery Instructions
</label>
<input type="text" class="form-control" placeholder="Delivery Instructions e.g. Opposite Gold Souk Mall">
</div>
<div class="form-group mb-0 col-md-12">
<label for="inputPassword4">Nickname
</label>
<div class="btn-group btn-group-toggle d-flex justify-content-center" data-toggle="buttons">
<label class="btn btn-info active">
<input type="radio" name="options" id="option1" autocomplete="off" checked> Home
</label>
<label class="btn btn-info">
<input type="radio" name="options" id="option2" autocomplete="off"> Work
</label>
<label class="btn btn-info">
<input type="radio" name="options" id="option3" autocomplete="off"> Other
</label>
</div>
</div>
</div>
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn d-flex w-50 text-center justify-content-center btn-outline-primary" data-dismiss="modal">CANCEL
</button><button type="button" class="btn d-flex w-50 text-center justify-content-center btn-primary">SUBMIT</button>
</div>
</div>
</div>
</div>

<div class="modal fade" id="delete-address-modal" tabindex="-1" role="dialog" aria-labelledby="delete-address" aria-hidden="true">
<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="delete-address">Delete</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<p class="mb-0 text-black">Are you sure you want to delete this xxxxx?</p>
</div>
<div class="modal-footer">
<button type="button" class="btn d-flex w-50 text-center justify-content-center btn-outline-primary" data-dismiss="modal">CANCEL
</button><button type="button" class="btn d-flex w-50 text-center justify-content-center btn-primary">DELETE</button>
</div>
</div>
</div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light osahan-nav shadow-sm">
<div class="container">
<a class="navbar-brand" href="index.html"><img alt="logo" src="img/logo.png"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="navbar-nav ml-auto">
<li class="nav-item active">
<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="offers.html"><i class="icofont-sale-discount"></i> Offers <span class="badge badge-danger">New</span></a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Restaurants
</a>
<div class="dropdown-menu dropdown-menu-right shadow-sm border-0">
<a class="dropdown-item" href="listing.html">Listing</a>
<a class="dropdown-item" href="detail.html">Detail + Cart</a>
<a class="dropdown-item" href="checkout.html">Checkout</a>
</div>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Pages
</a>
<div class="dropdown-menu dropdown-menu-right shadow-sm border-0">
<a class="dropdown-item" href="track-order.html">Track Order</a>
<a class="dropdown-item" href="invoice.html">Invoice</a>
<a class="dropdown-item" href="login.html">Login</a>
<a class="dropdown-item" href="register.html">Register</a>
<a class="dropdown-item" href="404.html">404</a>
<a class="dropdown-item" href="extra.html">Extra :)</a>
</div>
</li>
<div class="dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        @auth
        {{ Auth::user()->name }}
    @else
        <img alt="Generic placeholder image" src="/img/user/4.png" class="nav-osahan-pic rounded-pill" style="height: 20px;"> My Account
    @endif
        
    </a>
  
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="{{url('userOrders')}}">Order</a></li>
      <li><a class="dropdown-item" href="#">Offers</a></li>
      <li><a class="dropdown-item" href="#">Favourite</a></li>
    </ul>
  </div>
<li class="nav-item dropdown dropdown-cart">
<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-shopping-basket"></i> Cart
<span class="badge badge-success">5</span>
</a>
<div class="dropdown-menu dropdown-cart-top p-0 dropdown-menu-right shadow-sm border-0">
<div class="dropdown-cart-top-header p-4">
<img class="img-fluid mr-3" alt="osahan" src="img/cart.jpg">
<h6 class="mb-0">Gus's World Famous Chicken</h6>
<p class="text-secondary mb-0">310 S Front St, Memphis, USA</p>
<small><a class="text-primary font-weight-bold" href="#">View Full Menu</a></small>
</div>
<div class="dropdown-cart-top-body border-top p-4">
<p class="mb-2"><i class="icofont-ui-press text-danger food-item"></i> Chicken Tikka Sub 12" (30 cm) x 1 <span class="float-right text-secondary">$314</span></p>
<p class="mb-2"><i class="icofont-ui-press text-success food-item"></i> Corn & Peas Salad x 1 <span class="float-right text-secondary">$209</span></p>
<p class="mb-2"><i class="icofont-ui-press text-success food-item"></i> Veg Seekh Sub 6" (15 cm) x 1 <span class="float-right text-secondary">$133</span></p>
<p class="mb-2"><i class="icofont-ui-press text-danger food-item"></i> Chicken Tikka Sub 12" (30 cm) x 1 <span class="float-right text-secondary">$314</span></p>
<p class="mb-2"><i class="icofont-ui-press text-danger food-item"></i> Corn & Peas Salad x 1 <span class="float-right text-secondary">$209</span></p>
</div>
<div class="dropdown-cart-top-footer border-top p-4">
<p class="mb-0 font-weight-bold text-secondary">Sub Total <span class="float-right text-dark">$499</span></p>
<small class="text-info">Extra charges may apply</small>
</div>
<div class="dropdown-cart-top-footer border-top p-2">
<a class="btn btn-success btn-block btn-lg" href="checkout.html"> Checkout</a>
</div>
</div>
</li>
</ul>
</div>
</div>
</nav>
<section class="section pt-4 pb-4 osahan-account-page">
<div class="container">
<div class="row">
<div class="col-md-3">
<div class="osahan-account-page-left shadow-sm bg-white h-100">
<div class="border-bottom p-4">
<div class="osahan-user text-center">
<div class="osahan-user-media">
<img class="mb-3 rounded-pill shadow-sm mt-1" src="img/user/4.png" alt="gurdeep singh osahan">
<div class="osahan-user-media-body">
<h6 class="mb-2">Shruti Kadam</h6>
<p class="mb-1">+91 8237525779</p>
<p><a href="https://askbootstrap.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dfb6beb2b0acbeb7beb19fb8b2beb6b3f1bcb0b2">[email&#160;protected]</a></p>
<p class="mb-0 text-black font-weight-bold"><a class="text-primary mr-3" data-toggle="modal" data-target="#edit-profile-modal" href="#"><i class="icofont-ui-edit"></i> EDIT</a></p>
</div>
</div>
</div>
</div>
<ul class="nav nav-tabs flex-column border-0 pt-4 pl-4 pb-4" id="myTab" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="orders-tab" data-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="true"><i class="icofont-food-cart"></i> Orders</a>
</li>
<li class="nav-item">
<a class="nav-link" id="offers-tab" data-toggle="tab" href="#offers" role="tab" aria-controls="offers" aria-selected="false"><i class="icofont-sale-discount"></i> Offers</a>
</li>
<li class="nav-item">
<a class="nav-link" id="favourites-tab" data-toggle="tab" href="#favourites" role="tab" aria-controls="favourites" aria-selected="false"><i class="icofont-heart"></i> Favourites</a>
</li>
<li class="nav-item">
<a class="nav-link" id="payments-tab" data-toggle="tab" href="#payments" role="tab" aria-controls="payments" aria-selected="false"><i class="icofont-credit-card"></i> Payments</a>
</li>
<li class="nav-item">
<a class="nav-link" id="addresses-tab" data-toggle="tab" href="#addresses" role="tab" aria-controls="addresses" aria-selected="false"><i class="icofont-location-pin"></i> Addresses</a>
</li>
</ul>
</div>
</div>
<div class="col-md-9">
<div class="osahan-account-page-right shadow-sm bg-white p-4 h-100">
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="orders" role="tabpanel" aria-labelledby="orders-tab">
<h4 class="font-weight-bold mt-0 mb-4">Past Orders</h4>
@foreach ($orders as $data)
<div class="bg-white card mb-4 order-list shadow-sm">
<div class="gold-members p-4">
<a href="#">
 
<div class="media">
  @foreach($data->orderDetails as $orderDetail)
  @if($orderDetail->product)  
      <div>
         <img src="{{asset('Products/'.$orderDetail->product->image)}}" alt="Product Image" style="width: 80px">
          <!-- Other product details -->
      </div>
 
<div class="media-body">
<span class="float-right text-info"> <i class="icofont-check-circled text-success"></i></span>
<h6 class="mb-2">
<a href="{{route('userorder_details', $orderDetail->order_id)}}" class="text-black">{{$orderDetail->product->name}}
</a></h6>
<p class="text-gray mb-1"><strong class="icofont-location-arrow"><span class="text-black font-weight-bold">Category:  </span></strong> {{$orderDetail->product->description}}
</p>

<p class="text-gray mb-1"><i class="icofont-location-arrow"><span class="text-black font-weight-bold">Order Status: </span> </i>  {{$data->order_status}}
</p>

<p class="text-gray mb-3"><span class="text-black font-weight-bold">payment_id: </span> {{$data->payment_id}} <i class="icofont-clock-time ml-2"></i>{{$orderDetail->created_at}}</p>

<hr>
<div class="float-right">
<a class="btn btn-sm btn-outline-primary" href="#"><i class="icofont-headphone-alt"></i> HELP</a>
<a class="btn btn-sm btn-primary" href="{{route('userorder_details', $orderDetail->order_id)}}"><i class="icofont-refresh"></i> REORDER</a>
</div>
<p class="mb-0 text-black text-primary pt-2"><span class="text-black font-weight-bold"> Total Paid:</span>{{$orderDetail->product->price}}
</p>
@endif
@endforeach
</div>
</div>
  </a>
</div>
</div>
@endforeach
</section>
<section class="section pt-5 pb-5 text-center bg-white">
<div class="container">
<div class="row">
<div class="col-sm-12">
<h5 class="m-0">Operate food store or restaurants? <a href="login.html">Work With Us</a></h5>
</div>
</div>
</div>
</section>
<section class="footer pt-5 pb-5">
<div class="container">
<div class="row">
<div class="col-md-4 col-12 col-sm-12">
<h6 class="mb-3">Subscribe to our Newsletter</h6>
<form class="newsletter-form mb-1">
<div class="input-group">
<input type="text" placeholder="Please enter your email" class="form-control">
<div class="input-group-append">
<button type="button" class="btn btn-primary">
Subscribe
</button>
</div>
</div>
</form>
<p><a class="text-info" href="register.html">Register now</a> to get updates on <a href="offers.html">Offers and Coupons</a></p>
<div class="app">
<p class="mb-2">DOWNLOAD APP</p>
<a href="#">
<img class="img-fluid" src="img/google.png">
</a>
<a href="#">
<img class="img-fluid" src="img/apple.png">
</a>
</div>
</div>
<div class="col-md-1 col-sm-6 mobile-none">
</div>
<div class="col-md-2 col-4 col-sm-4">
<h6 class="mb-3">About OE</h6>
<ul>
<li><a href="#">About Us</a></li>
<li><a href="#">Culture</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">Careers</a></li>
<li><a href="#">Contact</a></li>
</ul>
</div>
<div class="col-md-2 col-4 col-sm-4">
<h6 class="mb-3">For Foodies</h6>
<ul>
<li><a href="#">Community</a></li>
<li><a href="#">Developers</a></li>
<li><a href="#">Blogger Help</a></li>
<li><a href="#">Verified Users</a></li>
<li><a href="#">Code of Conduct</a></li>
</ul>
</div>
<div class="col-md-2 col-4 col-sm-4">
<h6 class="mb-3">For Restaurants</h6>
<ul>
<li><a href="#">Advertise</a></li>
<li><a href="#">Add a Restaurant</a></li>
<li><a href="#">Claim your Listing</a></li>
<li><a href="#">For Businesses</a></li>
<li><a href="#">Owner Guidelines</a></li>
</ul>
</div>
</div>
</div>
</section>
<section class="footer-bottom-search pt-5 pb-5 bg-white">
<div class="container">
<div class="row">
<div class="col-xl-12">
<p class="text-black">POPULAR COUNTRIES</p>
<div class="search-links">
<a href="#">Australia</a> | <a href="#">Brasil</a> | <a href="#">Canada</a> | <a href="#">Chile</a> | <a href="#">Czech Republic</a> | <a href="#">India</a> | <a href="#">Indonesia</a> | <a href="#">Ireland</a> | <a href="#">New Zealand</a> | <a href="#">United Kingdom</a> | <a href="#">Turkey</a> | <a href="#">Philippines</a> | <a href="#">Sri Lanka</a> | <a href="#">Australia</a> | <a href="#">Brasil</a> | <a href="#">Canada</a> | <a href="#">Chile</a> | <a href="#">Czech Republic</a> | <a href="#">India</a> | <a href="#">Indonesia</a> | <a href="#">Ireland</a> | <a href="#">New Zealand</a> | <a href="#">United Kingdom</a> | <a href="#">Turkey</a> | <a href="#">Philippines</a> | <a href="#">Sri Lanka</a><a href="#">Australia</a> | <a href="#">Brasil</a> | <a href="#">Canada</a> | <a href="#">Chile</a> | <a href="#">Czech Republic</a> | <a href="#">India</a> | <a href="#">Indonesia</a> | <a href="#">Ireland</a> | <a href="#">New Zealand</a> | <a href="#">United Kingdom</a> | <a href="#">Turkey</a> | <a href="#">Philippines</a> | <a href="#">Sri Lanka</a> | <a href="#">Australia</a> | <a href="#">Brasil</a> | <a href="#">Canada</a> | <a href="#">Chile</a> | <a href="#">Czech Republic</a> | <a href="#">India</a> | <a href="#">Indonesia</a> | <a href="#">Ireland</a> | <a href="#">New Zealand</a> | <a href="#">United Kingdom</a> | <a href="#">Turkey</a> | <a href="#">Philippines</a> | <a href="#">Sri Lanka</a>
</div>
<p class="mt-4 text-black">POPULAR FOOD</p>
<div class="search-links">
<a href="#">Fast Food</a> | <a href="#">Chinese</a> | <a href="#">Street Food</a> | <a href="#">Continental</a> | <a href="#">Mithai</a> | <a href="#">Cafe</a> | <a href="#">South Indian</a> | <a href="#">Punjabi Food</a> | <a href="#">Fast Food</a> | <a href="#">Chinese</a> | <a href="#">Street Food</a> | <a href="#">Continental</a> | <a href="#">Mithai</a> | <a href="#">Cafe</a> | <a href="#">South Indian</a> | <a href="#">Punjabi Food</a><a href="#">Fast Food</a> | <a href="#">Chinese</a> | <a href="#">Street Food</a> | <a href="#">Continental</a> | <a href="#">Mithai</a> | <a href="#">Cafe</a> | <a href="#">South Indian</a> | <a href="#">Punjabi Food</a> | <a href="#">Fast Food</a> | <a href="#">Chinese</a> | <a href="#">Street Food</a> | <a href="#">Continental</a> | <a href="#">Mithai</a> | <a href="#">Cafe</a> | <a href="#">South Indian</a> | <a href="#">Punjabi Food</a>
</div>
</div>
</div>
</div>
</section>
<footer class="pt-4 pb-4 text-center">
<div class="container">
<p class="mt-0 mb-0">© Copyright 2020 Osahan Eat. All Rights Reserved</p>
<small class="mt-0 mb-0"> Made with <i class="fas fa-heart heart-icon text-danger"></i> by
<a class="text-danger" target="_blank" href="https://www.instagram.com/iamgurdeeposahan/">Gurdeep Osahan</a> - <a class="text-primary" target="_blank" href="https://askbootstrap.com/">Ask Bootstrap</a>
</small>
</div>
</footer>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="vendor/jquery/jquery-3.3.1.slim.min.js" type="3281620ed12fcd87b437f618-text/javascript"></script>

<script src="vendor/bootstrap/js/bootstrap.bundle.min.js" type="3281620ed12fcd87b437f618-text/javascript"></script>

<script src="vendor/select2/js/select2.min.js" type="3281620ed12fcd87b437f618-text/javascript"></script>

<script src="js/custom.js" type="3281620ed12fcd87b437f618-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="3281620ed12fcd87b437f618-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"84f1b1623dd30d72","version":"2024.2.0","r":1,"token":"dd471ab1978346bbb991feaa79e6ce5c","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from askbootstrap.com/preview/osahan-eat/orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Feb 2024 10:19:58 GMT -->
</html>