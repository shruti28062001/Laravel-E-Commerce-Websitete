
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    @extends('layouts.mainlayout')
    @section('content')
    <section class="breadcrumb-osahan pt-5 pb-5 bg-dark position-relative text-center">
        <h1 class="text-white">Offers Near You</h1>
        <h6 class="text-white-50">Best deals at your favourite shops</h6>
    </section>    
<section class="section pt-3 pb-2 bg-white homepage-add-section">
  <div class="container">
    <div class="row">
      
       
          @foreach ($products as $cat)
          <div class="col-3">
          <div class="card">
         
             <a href="{{url('detail/'.$cat->id)}}" class="nav-link">
          <img src="{{asset('Products/'.$cat->thumbnail)}}" class="card-img-top" alt="..." style="min-height: 10px; height:200px"></a>
          <div class="card-body">
            <h5 class="card-title">{{$cat->name}}</h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$cat->description}}</li>
            <li class="list-group-item">${{$cat->price}}</li>
          </ul>
        </div>
        
      </div>
          @endforeach
        
    </div>
  </div>

    </section>
@endsection
</body>
</html>



  

 










     
    

     
