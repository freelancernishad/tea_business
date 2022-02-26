<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;
use App\Models\Customer;
class Login extends Component
{

    public $customer;
    public $page;
    public $orderId;

    protected $queryString = ['customer','page','orderId'];
    public function customers($value)
    {
        $this->customer = $value;
    }

    public function pagefun($value)
    {
        $this->page = $value;
        $this->orderId = '';
    }

    public function orderDetails($value,$orderId)
    {
        $this->page = $value;
        $this->orderId = $orderId;
    }

    public function render()
    {


        if(session()->has('customer')){

            $Customer_id = session('customer');

            return view('livewire.my-account',[
                'page'=>$this->page,
                'orders'=>Order::where('Customer_id',$Customer_id)->get(),
                'orders_details'=>Order::where('order_id',$this->orderId)->get(),
                'Customer'=>Customer::where('id',$Customer_id)->get(),
            ]);
        }else{


    if($this->customer=='register'){
        return view('livewire.register');
    }else{
        return view('livewire.login');
    }
}
    }




}
