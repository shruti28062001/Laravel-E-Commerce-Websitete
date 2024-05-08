 {{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .thumbnail {
        width: 100px;
        display: inline-block;
        border: 1px solid black;
        padding: 10px;
        cursor: pointer;
      }

      .thumbnail img {
        width: 100%;
        height: 90px;
      }
        .color-option {
            width: 30px;
            height: 30px;
            display: inline-block;
            margin-right: 5px;
            border-radius: 50%; 
            cursor: pointer;
        }
    </style>
</head> 
@extends('layouts.mainlayout')
@section('content') 
<section class="py-5">
    <div class="container">
        <div class="row gx-5"> 
            @foreach ($products as $product) 
            <div class="col-lg-5">
                <div class="border rounded-4 mb-3 d-flex justify-content-center">
                    <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="{{url('cart/'.$product->id)}}">
                        <img id="large-image" style="width: 300px; height: 400px; " src="{{asset('Products/'.$product->thumbnail)}}" />
                    </a>
                </div>
                <div class="additional-thumbnails">
                    @forelse ($product->images as $image) 
                    <div class="thumbnail" onclick="showLargeImage('{{ asset('Products/' . $image->image_path) }}')">
                        <img src="{{ asset('Products/' . $image->image_path) }}" alt="Additional Image">
                    </div> 
                    @empty 
                    <p>No additional images available for this product.</p> 
                    @endforelse 
                </div>
            </div>
        
            <div class="col-lg-7">
                <form action="{{ url('/addcart') }}" method="post"> 
                    @csrf 
                    <div class="ps-lg-3">
                        <h4 class="title text-dark">
                            {{ $product->name }}
                        </h4>
                        <div class="mb-3">
                            <span class="h6">${{ $product->price }}</span>
                        </div>
                        <p> Modern look and quality demo item is a streetwear-inspired collection that continues to break away from the conventions of mainstream fashion. Made in Italy, these black and brown clothing low-top shirts for men. </p>
                        <div class="row">
                            <dt class="col-3">Type:</dt>
                            <dd class="col-9">Regular</dd>
                            <dt class="col-3">Color</dt>
                            <dd class="col-9">
                                <span class="color-option" style="background-color: pink;" onclick="changeColor('pink')"></span>
                                <span class="color-option" style="background-color: red;" onclick="changeColor('red')"></span>
                                <span class="color-option" style="background-color: blue;" onclick="changeColor('blue')"></span>
                                <!-- Add more color options here -->
                            </dd>
                            <input type="hidden" id="selected-color-value" name="selected_color" value="pink">
                            <dt class="col-3">Material</dt>
                            <dd class="col-9">Cotton</dd>
                            <dt class="col-3">Brand</dt>
                            <dd class="col-9">Reebook</dd>
                        </div>
                        <hr />
                        <div class="row mb-4">
                            <div class="col-md-4 col-6">
                                <label class="mb-2">Size</label>
                                <select class="form-select border border-secondary" style="height: 35px;">
                                    <option>S</option>
                                    <option>M</option>
                                    <option>L</option>
                                    <option>XL</option>
                                    <option>XXL</option>
                                </select>
                            </div>
                            <!-- col.// -->
                            <div class="col-md-4 col-6 mb-3">
                                <label class="mb-2 d-block">Quantity</label>
                                <div class="input-group mb-3" style="width: 170px;">
                                    <div class="quantity">
                                        <input type="number" name="quantity" class="form-control" min="1" max="10" value="1" />
                                    </div>
                                    <input type="hidden" name="id" value="{{$product->id}}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="addToCart" class="btn btn-primary">Add to cart</button>
                    <button type="button" class="btn btn-outline-success btn-lg">
                        <i class="icofont icofont-heart"></i> Add To Wishlist 
                    </button>
                </form>
            </div>
        </div>
    </div>
</section> 
@endforeach
<hr>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function showLargeImage(imageURL) {
        $("#large-image").attr("src", imageURL);
    }
</script> 
@endsection
</html> 
 --}}


 {{-- <!DOCTYPE html> 
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <style>
       .thumbnail {
         width: 100px;
         display: inline-block;
         border: 1px solid black;
         padding: 10px;
         cursor: pointer;
       }
 
       .thumbnail img {
         width: 100%;
         height: 90px;
       }
       .color-option {
           width: 30px;
           height: 30px;
           display: inline-block;
           margin-right: 5px;
           border-radius: 50%; 
           cursor: pointer;
       }
     </style>
 </head> 
 @extends('layouts.mainlayout')
 @section('content') 
 <section class="py-5">
     <div class="container">
         <div class="row gx-5"> 
             @foreach ($products as $product) 
             <div class="col-lg-5">
                 <div class="border rounded-4 mb-3 d-flex justify-content-center" id="shirt-image-container">
                     <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="{{url('cart/'.$product->id)}}">
                         <img id="large-image" style="width: 300px; height: 400px; " src="{{asset('Products/'.$product->thumbnail)}}" />
                     </a>
                 </div>
                 <div class="additional-thumbnails">
                     @forelse ($product->images as $image) 
                     <div class="thumbnail" onclick="showLargeImage('{{ asset('Products/' . $image->image_path) }}')">
                         <img src="{{ asset('Products/' . $image->image_path) }}" alt="Additional Image">
                     </div> 
                     @empty 
                     <p>No additional images available for this product.</p> 
                     @endforelse 
                 </div>
             </div>
             <div class="col-lg-7">
                 <form action="{{ url('/addcart') }}" method="post"> 
                     @csrf 
                     <div class="ps-lg-3">
                         <h4 class="title text-dark">
                             {{ $product->name }}
                         </h4>
                         <div class="mb-3">
                             <span class="h6" id="product-price">${{ $product->price }}</span>
                         </div>
                         <p> Modern look and quality demo item is a streetwear-inspired collection that continues to break away from the conventions of mainstream fashion. Made in Italy, these black and brown clothing low-top shirts for men. </p>
                         <div class="row">
                             <dt class="col-3">Type:</dt>
                             <dd class="col-9">Regular</dd>
                             <dt class="col-3">Color</dt>
                             <dd class="col-9">
                                 <span class="color-option" style="background-color: pink;" onclick="changeColor('pink')"></span>
                                 <span class="color-option" style="background-color: red;" onclick="changeColor('red')"></span>
                                 <span class="color-option" style="background-color: rgb(149, 149, 149);" onclick="changeColor('blue')"></span>
                                 <!-- Add more color options here -->
                             </dd>
                             <input type="hidden" id="selected-color-value" name="selected_color" value="pink">
                             <dt class="col-3">Material</dt>
                             <dd class="col-9">Cotton</dd>
                             <dt class="col-3">Brand</dt>
                             <dd class="col-9">Reebook</dd>
                         </div>
                         <hr />
                         <div class="row mb-4">
                             <div class="col-md-4 col-6">
                                 <label class="mb-2">Size</label>
                                 <select class="form-select border border-secondary" style="height: 35px;" onchange="updatePrice(this.value)">
                                     <option value="S">S</option>
                                     <option value="M">M</option>
                                     <option value="L">L</option>
                                     <option value="XL">XL</option>
                                     <option value="XXL">XXL</option>
                                 </select>
                             </div>
                             <!-- col.// -->
                             <div class="col-md-4 col-6 mb-3">
                                 <label class="mb-2 d-block">Quantity</label>
                                 <div class="input-group mb-3" style="width: 170px;">
                                     <div class="quantity">
                                         <input type="number" name="quantity" class="form-control" min="1" max="10" value="1" />
                                     </div>
                                     <input type="hidden" name="id" value="{{$product->id}}" />
                                 </div>
                             </div>
                         </div>
                     </div>
                     <button type="submit" name="addToCart" class="btn btn-primary">Add to cart</button>
                     <button type="button" class="btn btn-outline-success btn-lg">
                         <i class="icofont icofont-heart"></i> Add To Wishlist 
                     </button>
                 </form>
             </div>
         </div>
     </div>
 </section> 
 @endforeach
 <hr>
 </section>
 
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script>
     function showLargeImage(imageURL) {
         $("#large-image").attr("src", imageURL);
     }
 
     function changeColor(color) {
         // Update the border color of the main shirt image
         $("#shirt-image-container").css("border-color", color);
         // Update the value of the hidden input field
         $("#selected-color-value").val(color);
     }
 
     function updatePrice(size) {
         // Example: Assuming different prices for different sizes
         var price;
         switch (size) {
             case "S":
                 price = 20; // Set the price for size S
                 break;
             case "M":
                 price = 25; // Set the price for size M
                 break;
             case "L":
                 price = 30; // Set the price for size L
                 break;
             case "XL":
                 price = 35; // Set the price for size XL
                 break;
             case "XXL":
                 price = 40; // Set the price for size XXL
                 break;
             default:
                 price = 0;
         }
         $("#product-price").text("$" + price);
     }
 </script> 
 @endsection
 </html> --}}

{{-- 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .thumbnail {
            width: 100px;
            display: inline-block;
            border: 1px solid black;
            padding: 10px;
            cursor: pointer;
        }

        .thumbnail img {
            width: 100%;
            height: 90px;
        }
        .color-option {
            width: 30px;
            height: 30px;
            display: inline-block;
            margin-right: 5px;
            border-radius: 50%;
            cursor: pointer;
        }
    </style>
</head>
@extends('layouts.mainlayout')
@section('content')
<section class="py-5">
    <div class="container">
        <div class="row gx-5">
            @foreach ($products as $product)
            <div class="col-lg-5">
                <div class="border rounded-4 mb-3 d-flex justify-content-center" id="shirt-image-container">
                    <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="{{url('cart/'.$product->id)}}">
                        <img id="large-image" style="width: 300px; height: 400px; " src="{{asset('Products/'.$product->thumbnail)}}" />
                    </a>
                </div>
                <div class="additional-thumbnails">
                    @forelse ($product->images as $image)
                    <div class="thumbnail" onclick="showLargeImage('{{ asset('Products/' . $image->image_path) }}')">
                        <img src="{{ asset('Products/' . $image->image_path) }}" alt="Additional Image">
                    </div>
                    @empty
                    <p>No additional images available for this product.</p>
                    @endforelse
                </div>
            </div>
            <div class="col-lg-7">
                <form action="{{ url('/addcart') }}" method="post">
                    @csrf
                    <div class="ps-lg-3">
                        <h4 class="title text-dark">
                            {{ $product->name }}
                        </h4>
                        <div class="mb-3">
                            <span class="h6" id="product-price">${{ $product->price }}</span>
                        </div>
                        <p> Modern look and quality demo item is a streetwear-inspired collection that continues to break away from the conventions of mainstream fashion. Made in Italy, these black and brown clothing low-top shirts for men. </p>
                        <div class="row">
                            <dt class="col-3">Type:</dt>
                            <dd class="col-9">Regular</dd>
                            <dt class="col-3">Color</dt>
                            <dd class="col-9">
                                <span class="color-option" style="background-color: pink;" onclick="changeColor('pink')"></span>
                                <span class="color-option" style="background-color: rgb(134, 133, 133);" onclick="changeColor('grey')"></span>
                                <span class="color-option" style="background-color: rgb(3, 46, 153);" onclick="changeColor('blue')"></span>
                                <!-- Add more color options here -->
                            </dd>
                            <input type="hidden" id="selected-color-value" name="selected_color" value="pink">
                            <dt class="col-3">Material</dt>
                            <dd class="col-9">Cotton</dd>
                            <dt class="col-3">Brand</dt>
                            <dd class="col-9">Reebook</dd>
                        </div>
                        <hr />
                        <div class="row mb-4">
                            <div class="col-md-4 col-6">
                                <label class="mb-2">Size</label>
                                <select class="form-select border border-secondary" style="height: 35px;" onchange="updatePrice(this.value)">
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                </select>
                            </div>
                            <!-- col.// -->
                            <div class="col-md-4 col-6 mb-3">
                                <label class="mb-2 d-block">Quantity</label>
                                <div class="input-group mb-3" style="width: 170px;">
                                    <div class="quantity">
                                        <input type="number" name="quantity" class="form-control" min="1" max="10" value="1" />
                                    </div>
                                    <input type="hidden" name="id" value="{{$product->id}}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="addToCart" class="btn btn-primary">Add to cart</button>
                    <button type="button" class="btn btn-outline-success btn-lg">
                        <i class="icofont icofont-heart"></i> Add To Wishlist
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endforeach
<hr>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function showLargeImage(imageURL) {
        $("#large-image").attr("src", imageURL);
    }
    function changeColor(color) {
    // Update the border color of the main shirt image
    $("#shirt-image-container").css("border-color", color);
    // Update the value of the hidden input field
    $("#selected-color-value").val(color);
    
    // Update the main shirt image source based on the selected color
    var imageUrl;
    switch(color) {
        case 'pink':
            imageUrl = "{{ asset('Products/pink_shirt.webp') }}"; // Replace with the URL of your pink shirt image
            break;
        case 'grey':
            imageUrl = "{{ asset('Products/grey_shirt.webp') }}"; // Replace with the URL of your grey shirt image
            break;
        case 'blue':
            imageUrl = "{{ asset('Products/blue_shirt.webp') }}"; // Replace with the URL of your blue shirt image
            break;
        // Add more cases for other colors if needed
        default:
            imageUrl = "{{ asset('Products/default_shirt.jpg') }}"; // Replace with the URL of your default shirt image
    }
    $("#large-image").attr("src", imageUrl);
}


    function updatePrice(size) {
        // Example: Assuming different prices for different sizes
        var price;
        switch (size) {
            case "S":
                price = 20; // Set the price for size S
                break;
            case "M":
                price = 25; // Set the price for size M
                break;
            case "L":
                price = 30; // Set the price for size L
                break;
            case "XL":
                price = 35; // Set the price for size XL
                break;
            case "XXL":
                price = 40; // Set the price for size XXL
                break;
            default:
                price = 0;
        }
        $("#product-price").text("$" + price);
    }
</script>
@endsection
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .thumbnail {
            width: 100px;
            display: inline-block;
            border: 1px solid black;
            padding: 10px;
            cursor: pointer;
        }

        .thumbnail img {
            width: 100%;
            height: 90px;
        }
        .color-option {
            width: 30px;
            height: 30px;
            display: inline-block;
            margin-right: 5px;
            border-radius: 50%;
            cursor: pointer;
        }
    </style>
</head>
@extends('layouts.mainlayout')
@section('content')
<section class="py-5">
    <div class="container">
        <div class="row gx-5">
            @foreach ($products as $product)
            <div class="col-lg-5">
                <div class="border rounded-4 mb-3 d-flex justify-content-center" id="shirt-image-container">
                    <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="{{url('cart/'.$product->id)}}">
                        <img id="large-image" style="width: 300px; height: 400px; " src="{{asset('Products/'.$product->thumbnail)}}" />
                    </a>
                </div>
                <div class="additional-thumbnails">
                    @forelse ($product->images as $image)
                    <div class="thumbnail" onclick="showLargeImage('{{ asset('Products/' . $image->image_path) }}')">
                        <img src="{{ asset('Products/' . $image->image_path) }}" alt="Additional Image">
                    </div>
                    @empty
                    <p>No additional images available for this product.</p>
                    @endforelse
                </div>
            </div>
            <div class="col-lg-7">
                <form action="{{ url('/addcart') }}" method="post">
                    @csrf
                    <div class="ps-lg-3">
                        <h4 class="title text-dark">
                            {{ $product->name }}
                        </h4>
                        <div class="mb-3">
                            <span class="h6" id="product-price">${{ $product->price }}</span>
                        </div>
                        <p> Modern look and quality demo item is a streetwear-inspired collection that continues to break away from the conventions of mainstream fashion. Made in Italy, these black and brown clothing low-top shirts for men. </p>
                        <div class="row">
                            <dt class="col-3">Type:</dt>
                            <dd class="col-9">Regular</dd>
                            <dt class="col-3">Color</dt>
                            <dd class="col-9">
                                <span class="color-option" style="background-color: pink;" onclick="changeColor('pink')"></span>
                                <span class="color-option" style="background-color: rgb(134, 133, 133);" onclick="changeColor('grey')"></span>
                                <span class="color-option" style="background-color: rgb(3, 46, 153);" onclick="changeColor('blue')"></span>
                                <!-- Add more color options here -->
                            </dd>
                            <input type="hidden" id="selected-color-value" name="selected_color" value="pink">
                            <dt class="col-3">Material</dt>
                            <dd class="col-9">Cotton</dd>
                            <dt class="col-3">Brand</dt>
                            <dd class="col-9">Reebook</dd>
                        </div>
                        <hr />
                        <div class="row mb-4">
                            <div class="col-md-4 col-6">
                                <label class="mb-2">Size</label>
                                <select class="form-select border border-secondary" style="height: 35px;" onchange="updatePrice(this.value)">
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                </select>
                            </div>
                            <!-- col.// -->
                            <div class="col-md-4 col-6 mb-3">
                                <label class="mb-2 d-block">Quantity</label>
                                <div class="input-group mb-3" style="width: 170px;">
                                    <div class="quantity">
                                        <input type="number" name="quantity" class="form-control" min="1" max="10" value="1" />
                                    </div>
                                    <input type="hidden" name="id" value="{{$product->id}}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="addToCart" class="btn btn-primary">Add to cart</button>
                    <button type="button" class="btn btn-outline-success btn-lg">
                        <i class="icofont icofont-heart"></i> Add To Wishlist
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endforeach
<hr>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function showLargeImage(imageURL) {
        $("#large-image").attr("src", imageURL);
    }

    function changeColor(color) {
        // Update the border color of the main shirt image
        $("#shirt-image-container").css("border-color", color);
        // Update the value of the hidden input field
        $("#selected-color-value").val(color);
        
        // Update the main shirt image source based on the selected color
        var imageUrl;
        switch(color) {
            case 'pink':
                imageUrl = "{{ asset('Products/pink_shirt.webp') }}"; // Replace with the URL of your pink shirt image
                break;
            case 'grey':
                imageUrl = "{{ asset('Products/grey_shirt.webp') }}"; // Replace with the URL of your grey shirt image
                break;
            case 'blue':
                imageUrl = "{{ asset('Products/blue_shirt.webp') }}"; // Replace with the URL of your blue shirt image
                break;
            // Add more cases for other colors if needed
            default:
                imageUrl = "{{ asset('Products/default_shirt.jpg') }}"; // Replace with the URL of your default shirt image
        }
        $("#large-image").attr("src", imageUrl);
        
        // Get the selected size
        var selectedSize = $("#selected-size").val(); // Assuming you have a select element with id "selected-size"
        
        // Update the price based on the selected size and color
        updatePrice(selectedSize, color);
    }

    function updatePrice(size, color) {
        // Define prices for each size
        var sizePrices = {
            "S": 20,
            "M": 25,
            "L": 30,
            "XL": 35,
            "XXL": 40
        };

        // Define prices for each color
        var colorPrices = {
            "pink": 5,
            "grey": 10,
            "blue": 15
            // Add more colors and prices as needed
        };

        // Get the price for the selected size
        var sizePrice = sizePrices[size] || 0;

        // Get the price for the selected color
        var colorPrice = colorPrices[color] || 0;

        // Calculate the total price
        var totalPrice = sizePrice + colorPrice;

        // Update the product price display
        $("#product-price").text("$" + totalPrice);
    }
</script>
@endsection
</html>
