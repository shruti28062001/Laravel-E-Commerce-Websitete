<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('categories.index',['categories' => Category::get()]);
    }

    public function create(){
        return view('categories.create');
    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg,gif,webp|max:1000',
           
        ]);

        
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('categories'),$imageName);

        $category = new Category;
        $category ->image =$imageName;
        $category ->name=$request->name;
       
        $category ->save();

        // return back()->withSuccess('category created!!!!');

        if($category){
            return redirect()->route('Categories.index');
          }else{
                echo"data does not added";
          };
    }
    public function edit($id){

        $category = category::where('id',$id)->first();
        return view('categories.edit',['category'=>$category ]);
    }

    public function update(Request $request,$id){

        $request->validate([
            'name'=>'required',
            'image'=>'nullable|mimes:png,jpg,jpeg,gif,webp|max:1000',
           
        ]);

        $category =Category::where('id',$id)->first();

        if(isset($request->image)){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('categories'),$imageName);
            $category ->image =$imageName;
            
        }
        $category ->name=$request->name;
      
        $category ->save();
        //return back()->withSuccess('product updated!!!!');  
        if($category){
            return redirect()->route('Categories.index');
          }else{
                echo"data does not added";
          };
    }
    public function destroy($id){
        $category =Category::where('id',$id)->first();
        $category ->delete();
       // return back()->withSuccess('product deleted!!!!');
       if($category){
        return redirect()->route('Categories.index');
      }else{
            echo"data does not added";
      };

    }

    // public function show($id)
    // {
    //     $category = Category::findOrFail($id);
    //     $product = $category->product()->get(); 
    //     return view('category.show', compact('category', 'product'));
    // }
}
