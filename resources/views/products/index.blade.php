@extends('dashlayouts.dashboardlayout')
 

@section('content')
    <div class="container">
        <div style="margin-left: 200px">
            <h4 class="text-align-center">All Products</h4>
            <div class="text-right">
                <a href="products/create" class="btn btn-dark mt-2">New Product</a>
            </div>
            <div class="mt-2">
                <label for="statusFilter"> Status:</label>
                <select class="form-control" id="statusFilter" onchange="filterProducts()" style="width:150px">
                    <option value="all">All</option>
                    <option value="Published" @if(Request()->statusFilter == 'Published') selected @endif>Published</option>
                    <option value="Unpublished" @if(Request()->statusFilter == 'Unpublished') selected @endif>Unpublished</option>
                </select>
            </div>
       
            <table class="table table-hover mt-2 ">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="productRow" data-status="{{ $product->status ? 'Published' : 'Unpublished' }}">
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                             {{-- <td><img src="{{ asset('products/'.$product->image) }}" width="50" height="50"></td>  --}}
                             <td>
                                <img src="{{ asset('products/'.$product->thumbnail) }}" width="50" height="50" alt="Thumbnail">
                            </td>
                            {{-- <td>
                                @foreach ($product->images as $image)
                                    <img src="{{ asset('products/'.$image->path) }}" width="50" height="50" alt="Image">
                                @endforeach
                            </td> --}}
                            {{-- <td><a href="{{ asset('products/'.json_decode($product->image)[0]) }}"><img src="{{ asset('products/'.json_decode($product->image)[0]) }}" width="50px"></a></td>   --}}
                            {{-- <td>
                                @if ($product->image)
                                    @php
                                        $images = json_decode($product->image);
                                    @endphp
                                    @if (is_array($images) && count($images) > 0)
                                        <a href="{{ asset('products/'.$images[0]) }}">
                                            <img src="{{ asset('products/'.$images[0]) }}" width="50px">
                                        </a>
                                    @else
                                        No Image Available
                                    @endif
                                @else
                                    No Image Available
                                @endif
                            </td> --}}
                            
                            

                            <td>{{ $product->price }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->cat_name }}</td>
                            <td>{{ $product->status ? 'Published' : 'Unpublished' }}</td>
                            <td>
                                <a href="products/{{ $product->id }}/edit" class="btn btn-dark btn-sm">Edit</a>
                                <form action="/admin/products/{{ $product->id }}/delete" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-5">
                {{ $products->links()}}
            </div>
        </div>
    </div>

    <script>
        function filterProducts() {
            var statusFilter = document.getElementById('statusFilter').value;
            var rows = document.getElementsByClassName('productRow');

            for (var i = 0; i < rows.length; i++) {
                var status = rows[i].getAttribute('data-status');
                if (statusFilter === 'all' || status === statusFilter) {
                    rows[i].style.display = '';
                } else {
                    rows[i].style.display = 'none';
                }
            }
        }
    </script>
@endsection
