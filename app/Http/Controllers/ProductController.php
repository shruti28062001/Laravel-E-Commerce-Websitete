<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use log;


class ProductController extends Controller
{

  
    public function index(){
        $product = Product::select('products.*','categories.name as cat_name')
        ->leftJoin('categories','products.category_id','categories.id')
        ->simplePaginate(10);
        // dd($product);
        return view('products.index', ['products' => $product]);
      //  return view('products.index',['products' => Product::get()]);
    }

    public function create(){
        $category = Category::get();        
        return view('products.create')->with(compact('category'));
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'thumbnail' => 'required|image|mimes:png,jpg,jpeg,gif,webp',
            'images.*' => 'image|mimes:png,jpg,jpeg,gif,webp',
            // 'image'=>'required|image|mimes:png,jpg,jpeg,gif,webp',
            //'images.*'=>'required|image|mimes:png,jpg,jpeg,gif,webp',
            'price'=>'required',
            'description'=>'required',
            'category_id'=>'required',
            'status'=>'nullable',
        ]);
        
        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('products'),$imageName);
        $thumbnailName = time() . '_thumb.' . $request->thumbnail->extension();
        $request->thumbnail->move(public_path('products'), $thumbnailName);
        

        $product = new Product;
          // $product->image =$imageName;
          $product->thumbnail = $thumbnailName;
        //$product->image =$request->image;
        $product->name=$request->name;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->category_id=$request->category_id;
        $product->status= !empty($request->status) ? 1 : 0;
        
        //dd($product);
        // $imageNames = [];
        // if ($request->hasFile('images')) {
        //     foreach ($request->file('images') as $image) {
        //         $imageName = time() . '_' . $image->getClientOriginalName();
        //         $image->move(public_path('products'), $imageName);
        //         $imageNames[] = $imageName;
        //     }
        // }
    
        // $product->image = json_encode($imageNames);
        $product->save();
        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('products'), $imageName);
                $imagePaths[] = ['image_path' => $imageName]; // Use 'path' instead of 'images'
            }
            $product->images()->createMany($imagePaths); // Pass the array directly
        }
       
        
        // return back()->withSuccess('product created!!!!');
        if($product){
          return redirect()->route('Products.index');
        }else{
              echo"data does not added";
        };
    
    }
    public function edit($id){

        $product= product::where('id',$id)->first();
        $category = Category::all();
        return view('products.edit')->with(compact('product','category'));
    }

    public function update(Request $request,$id){

        $request->validate([
            'name'=>'required',
            'image'=>'nullable|mimes:png,jpg,jpeg,gif,webp|max:1000',
            'price'=>'required',
            'description'=>'required',
            'category_id'=>'required',
            'status'=>'nullable',

        ]);

        $product=Product::where('id',$id)->first();

        if(isset($request->image)){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('products'),$imageName);
            $product->image =$imageName;

        }
        $product->name=$request->name;
        $product->price=$request->price;
        $product->description=$request->description;
        $product->category_id=$request->category_id;
        $product->status= !empty($request->status) ? 1 : 0;
        $product->save();
       // return back()->withSuccess('product updated!!!!');  
       if($product){
        return redirect()->route('Products.index');
      }else{
            echo"data does not added";
      };
    }
    public function destroy($id){
        $product=Product::where('id',$id)->first();
        $product->delete();
        //return back()->withSuccess('product deleted!!!!');
        if($product){
            return redirect()->route('Products.index');
          }else{
                echo"data does not added";
          };

    }


}
