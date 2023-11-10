<?php

namespace App\Http\Controllers;

use App\Models\CoffeeAndCupcakes;
use Illuminate\Http\Request;

class CoffeeAndCupcakesController extends Controller
{
    //Show All the Product
    public function index()
    {
        // Pagination with number
        return view(
            'pages.index',
            [
                'heading' => 'Latest Cupcakes and Coffee',
                'products' => CoffeeAndCupcakes::latest()->filter(request(['flavor', 'search']))->paginate(6)
            ]
        );

        // Pagination, Next and Previous
        // return view('listings.index', [
        //     'heading' => 'Latest Listings',
        //     'listings' => Listing::latest()->filter(request(['tag', 'search']))->SimplePaginate(6)
        // ]);
    }

    //Show create form
    public function create()
    {
        return view('pages.create');
    }

    //Store Product Data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'productName' => 'required',
            'priceBefore' => 'required',
            'priceNow' => 'required',
            'size' => 'required',
            'productDescription' => 'required',
            'flavors' => 'required',
            'productIngredients' => 'required'
        ]);

        // php artisan storage:link 
        if ($request->hasFile('productPhoto')) {
            $formFields['productPhoto'] = $request->file('productPhoto')->store('productPhotos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        CoffeeAndCupcakes::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');
    }

    //Show Single Product
    public function show(CoffeeAndCupcakes $product)
    {
        return view('pages.show', [
            'product' => $product
        ]);
    }

    // Show Edit Form
    public function edit(CoffeeAndCupcakes $product)
    {
        return view('pages.edit', ['product' => $product]);
    }

    //Update Product Data
    public function update(Request $request, CoffeeAndCupcakes $product)
    {

        // Make sure logged in user is owner
        // if ($product->user_id != auth()->id()) {
        //     abort(403, 'Unauthorized Action');
        // }

        $formFields = $request->validate([
            'productName' => 'required',
            'priceBefore' => 'required',
            'priceNow' => 'required',
            'size' => 'required',
            'productDescription' => 'required',
            'flavors' => 'required',
            'productIngredients' => 'required'
        ]);

        if ($request->hasFile('productPhoto')) {
            $formFields['productPhoto'] = $request->file('productPhoto')->store('productPhotos', 'public');
        }

        $product->update($formFields);

        return back()->with('message', 'Product updated successfully!');
    }

    // Delete product
    public function destroy(CoffeeAndCupcakes $product)
    {
        // Make sure logged in user is owner
        // if ($product->user_id != auth()->id()) {
        //     abort(403, 'Unauthorized Action');
        // }

        $product->delete();
        return redirect('/')->with('message', 'Product deleted successfully!');
    }
}
