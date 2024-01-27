<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->get();
        return view('dashboard.product.index', [
            'title' => 'Product',
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.product.create',[
            'title' => 'Create Product'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'price' => 'required|numeric',
        'stock' => 'required|numeric', 
        'description' => 'required|min:5|max:255',
    ]);
       $validatedData['price'] = (float) $validatedData['price']; 
    $validatedData['stock'] = (int) $validatedData['stock'];

   $save = Product::create($validatedData);
if ($save) {
        return redirect('/dashboard/product')->with('success', 'Product "'.$validatedData['name'].'" created successfully!');
} else {
        return redirect('/dashboard/product/create')->with('error', 'Product created fialed!');
}


}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::find($id);
        return view('dashboard.product.show',[
            'title' => 'Show Product',
            'products' => $products,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::find($id);
        return view('dashboard.product.edit',[
            'title' => 'Edit Product',
            'products' => $products,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request, Product $product)
{
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'price' => 'required|numeric',
        'stock' => 'required|numeric', 
        'description' => 'required|min:5|max:255',
    ]);

    $validatedData['price'] = (float) $validatedData['price']; 
    $validatedData['stock'] = (int) $validatedData['stock']; 

    $product->update($validatedData);

    return redirect('/dashboard/product')->with('success', 'Product "'.$validatedData['name'].'" updated successfully!');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();

        return redirect('/dashboard/product')->with('success', 'Product "' . $products->name . '" has been deleted.');
    }
}
