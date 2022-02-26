<?php

namespace App\Http\Controllers;

use App\Models\Product_category;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Rule;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



$random  = sprintf("%06d", mt_rand(1, 999999));


        $data['category_id'] = $random;
        $edit_data = [
            'name'=>'',
            'slug'=>'',
            'parent_category'=>'',
            'Images'=>'',
        ];
$edit_data = json_decode(json_encode($edit_data));

// die();
        $data['form_type'] = 'new';
        $rows = Product_category::paginate(10);
        return view('dashboard/eCommerce/categories.list',compact('rows','edit_data'),$data);



    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|unique:product_categories',
            'slug' => 'required|unique:product_categories',

        ]);



        $data = request()->except(['_token']);

        echo '<pre>';
        print_r($data);



        Product_category::create($data);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product_category  $product_category
     * @return \Illuminate\Http\Response
     */
    public function show(Product_category $product_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product_category  $product_category
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_category $product_category)
    {
       $count =  Product_category::where('id',$product_category->id)->count();

if($count>0){


        $random  = sprintf("%06d", mt_rand(1, 999999));
        $data['category_id'] = $random;
        $rows = Product_category::paginate(10);
        $edit_data =  $product_category;
        $data['form_type'] = 'edit';

        return view('dashboard/eCommerce/categories.list',compact('edit_data','rows'),$data);

    }else{
        return redirect(route('product-category.index'));
    }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product_category  $product_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product_category $product_category)
    {



        $request->validate([
            'name' => 'required|unique:product_categories,name,'.$product_category->id,
            'slug' => 'required|unique:product_categories,slug,'.$product_category->id,

        ]);
        $data = request()->except(['_token','_method']);
        $product_category->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product_category  $product_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_category $product_category)
    {
       $product_category->delete();


    }
}
