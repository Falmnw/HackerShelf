<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allproducts = Product::where('status','pending')->get();
        return view('admin.catalogue.index', compact('allproducts'));
    }

    public function show($id){
        $product = Product::findOrFail($id);
        return view('admin.catalogue.show',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
    $categories = Category::all();
    return view('user.addproduct', compact('categories'));
    }

    public function create(Request $req)
    {
        $picturePath= null;
        if($req->hasFile('picture')){
            $picturePath = $req->file('picture')->store('products','public');
        }

        $documentPath = null;
        if($req->hasFile('tool_document')){
            $documentPath = $req->file('tool_document')->store('documents','public');
        }

        Product::create([
            'name' => $req->name,
            'version' => $req->version,
            'category_id' => $req->category_id,
            'user_id' => auth()->id(),
            'description' => $req->description,
            'installation_steps' =>$req->installation_steps,
            'tool_document' => $documentPath,
            'picture' => $picturePath,
            'status' =>'pending'
        ]);

        return back()->with('success', 'Product added successfully!'); 
    }

    public function publish($id){
        $product = Product::findOrFail($id);
        $product->status = 'approved';
        $product->save();
        return redirect()->route('catalogue');
    }

    public function reject($id){
        $product = Product::findOrFail($id);
        $product->status='rejected';
        $product->save();
         return redirect()->route('catalogue');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    // public function show(Product $product)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit($id)
    // {
    //     $product = Product::findOrFail($id);
    //     return view('updateproduct', compact('product'));
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $req)
    {
        $picturePath= null;
        if($req->hasFile('picture')){
            $picturePath = $req->file('picture')->store('products','public');
        }

        $documentPath = null;
        if($req->hasFile('tool_document')){
            $documentPath = $req->file('tool_document')->store('documents','public');
        }

        Product::findOrFail($id)->update([
            'name' => $req->name,
            'version' => $req->version,
            'category_id' => $req->category_id,
            'description' => $req->description,
            'installation_steps' =>$req->installation_steps,
            'tool_document' => $documentPath,

            'picture' => $picturePath
        ]);

        $allproducts = Product::all();
        return view('catalogue', compact('allproducts'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return back();
    }

    public function showCategory($id){
        $category = Category::findOrFail($id);
        $products = Product::where('category_id', $id)->where('status','approved')->get();
        return view('product.list', compact('category','products')); 
    }
    public function showdetail($category_id, $product_id){
         $product = Product::findOrFail($product_id);

         return view('product.showdetail', compact('product'));
    }

}
