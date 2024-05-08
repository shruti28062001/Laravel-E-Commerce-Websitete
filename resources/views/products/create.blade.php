@extends('dashlayouts.dashboardlayout')

@section('content')
    <div class="container">
        <div   style="margin-left: 200px">
            <h4 class="text-align-center">New Product</h4>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
                <div class="card mt-3 p-3">
                <form method="POST" action="{{url('products/store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}"/>
                        @if ($errors->has('name'))
                        <span class="text-danger">{{$errors->first('name')}} </span>     
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="price" class="form-control" value="{{old('price')}}"/>
                        @if ($errors->has('price'))
                        <span class="text-danger">{{$errors->first('price')}} </span>     
                        @endif
                    </div>
                    
                    {{-- <div class="form-group">
                        <label>Image</label>
                    <input type="file" name="image" class="form-control" />
                        @if ($errors->has('image'))
                    <span class="text-danger">{{$errors->first('image')}} </span>     
                       @endif
                    </div> --}}
                    {{-- <div class="form-group">
                        <label>Images</label>
                        <input type="file" name="images[]" class="form-control" accept="image/*" multiple required />
                        @error('images.*')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div> --}}
                    <div class="form-group">
                        <label>Thumbnail Image</label>
                        <input type="file" name="thumbnail" class="form-control" accept="image/*" required />
                        @error('thumbnail')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label>Additional Images</label>
                        <input type="file" name="images[]" class="form-control" accept="image/*" multiple required />
                        @error('images.*')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    {{-- <div class="form-group">
                        <label>Image</label>
                    <input type="file" name="images[]" class="form-control" accept="image/*" multiple required />
                        @if ($errors->has('image'))
                    <span class="text-danger">{{$errors->first('image')}} </span>     
                       @endif
                    </div> --}}


                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control"  rows="4">{{old('description')}}</textarea>
                        @if ($errors->has('description'))
                        <span class="text-danger">{{$errors->first('description')}} </span>     
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Category</label>
                        <select class="custom-select" name="category_id">
                            {{-- <option selected>Open this select menu</option> --}}
                            <option value="">Select Category</option>
                            @foreach($category as $val)
                            <option value="{{$val->id}}">{{$val->name}}</option>
                            @endforeach
                          </select>
                        @if ($errors->has('category_id'))
                        <span class="text-danger">{{$errors->first('category_id')}} </span>     
                        @endif
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="status">
                        <label class="form-check-label" for="flexCheckDefault"> Status</label>  
                        @if ($errors->has('status'))
                        <span class="text-danger">{{$errors->first('status')}} </span>     
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
 