@extends('dashlayouts.dashboardlayout')

@section('content')

    <div class="container">
        <div   style="margin-left: 140px">
            <h4 class="text-align-center">Update Category</h4>
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <div class="card mt-3 p-3">
                <form method="POST" action="/admin/categories/{{$category->id}}/update" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{old('name',$category->name)}}"/>
                        @if ($errors->has('name'))
                        <span class="text-danger">{{$errors->first('name')}} </span>     
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                    <input type="file" name="image" class="form-control" />
                        @if ($errors->has('image'))
                    <span class="text-danger">{{$errors->first('image')}} </span>     
                       @endif
                    </div>

                   
                    <button type="submit" class="btn btn-dark">Submit</button>

                </form>
            </div>
            </div>
        </div>
        </div>

    </div>
@endsection