<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Customer;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    //    return $rows = Order::Join('customers', 'orders.Customer_id', '=', 'customers.id')
    //     ->paginate(10);

     $rows =  Order::with('customers')->paginate(10);
// echo '<pre>';
// print_r($productCategory);
//         die();

        // $rows = Order::paginate(10);
        return view('dashboard/eCommerce/orders.list',compact('rows'));

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {

        $rows =  $order;
     $Customer_id = $rows->Customer_id;
        $cusomer = Customer::find($Customer_id);
            // die();
       return view('dashboard/eCommerce/orders.view',compact('rows','cusomer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {



        $data = [
            'order_status'=>$request->order_status,

        ];

        if($request->order_status=='Processing'){
            $data['Processing_date']= date('Y-m-d H:i:s');
        }elseif($request->order_status=='Shipped'){
            $data['Shipped_date']= date('Y-m-d H:i:s');
        }elseif($request->order_status=='Delivered'){
            $data['Delivered_date']= date('Y-m-d H:i:s');
        }elseif($request->order_status=='Canceled'){
            $data['Canceled_date']= date('Y-m-d H:i:s');
        }

        $order->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
       $order->delete();
    }
}
