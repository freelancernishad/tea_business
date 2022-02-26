<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Product_category;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Product::paginate(10);
        return view('dashboard/eCommerce/products.list',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $cat = Product_category::all();
        $table =  DB::getSchemaBuilder()->getColumnListing('products');
        $row = [];
        foreach ($table as $rowname) {
            $row[$rowname] = '';
        };

        $rows = json_decode(json_encode($row));

        $data['form_type'] = 'new';

        return view('dashboard/eCommerce/products.add-new-product',compact('rows','cat'),$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->except(['_token']);

        // echo '<pre>';
        // print_r($data);

                Product::create($data);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $rows =  $product;

        return view('dashboard/eCommerce/products.view',compact('rows'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $cat = Product_category::all();
        $rows =  $product;
        $data['form_type'] = 'edit';
        return view('dashboard/eCommerce/products.add-new-product',compact('rows','cat'),$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {



        $data = request()->except(['_token','_method']);
        $product->update($data);
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
    }
}
