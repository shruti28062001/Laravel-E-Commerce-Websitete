@extends('dashlayouts.dashboardlayout')

@section('content')
    <div class="container">
      <div   style="margin-left: 140px">
        <h4 class="text-align-center">All Categories</h4>
        <div class="text-right">
            <a href="categories/create" class="btn btn-dark mt-2">New category</a>
        </div>
       
            <table class="table table-hover mt-2">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categories as $category)
                    
              
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$category->name}}</td>
                  <td><img src="/Categories/{{$category->image}}" width="50" height="50"></img></td>
                  
                  <td><a href="categories/{{$category->id}}/edit" class="btn btn-dark btn-sm">Edit</a>
                  
                  <form action="/admin/categories/{{$category->id}}/delete" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                  </form>
                
                </td>
      
                </tr>
                @endforeach
              </tbody>
            </table>
      </div>
    </div>
@endsection