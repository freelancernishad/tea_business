<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product_category;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Blog;
use Illuminate\Support\Facades\Hash;


class frontendController extends Controller
{
    public function index()
    {
        $cat = Product_category::orderBy('id','desc')->get();

        $products = Product::orderBy('id','desc')->get();
        $Blogs = Blog::orderBy('id','desc')->get();

        // return session()->get('cart');

        // die();

        return view('index',compact('cat','products','Blogs'));


    }


    public function category($slug)
    {
        $cat = Product_category::where('',$slug)->orderBy('id','desc')->get();



        return view('index',compact('cat'));


    }
    public function shop()
    {

        return view('shop');

    }
    public function product_details($id)
    {
        $product_details = Product::where('id',$id)->get();

        return view('product_details',compact('product_details'));

    }

    public function my_account()
    {
        // session()->forget('customer');

        return view('my_account');

    }
    public function logout()
    {
         session()->forget('customer');
         session()->forget('customer_name');
        return redirect('my-account')->with(['icon'=>'success','message'=>'Logout Success']);


    }
    public function my_account_login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;



        $Customer = Customer::where('customer_email', '=', $username)->first();
        if (!$Customer) {

           return redirect('my-account')->with(['icon'=>'error','message'=>'Login Fail, please check email id']);
        }
        if (!Hash::check($password, $Customer->customer_password)) {

            return redirect('my-account')->with(['icon'=>'error','message'=>'Login Fail, pls check password']);

        //    return response()->json(['success'=>false, 'message' => 'Login Fail, pls check password']);
        }

        $request->session()->put('customer',$Customer->id);
        $request->session()->put('customer_name',$Customer->customer_name);

        return redirect('my-account')->with(['icon'=>'success','message'=>'Login Success']);
        // return response()->json(['success'=>true,'message'=>'success', 'data' => $Customer])






    }
    public function my_account_register(Request $request)
    {

        $customerData = [
            'customer_id'=>1,
            'customer_name'=>$request->customer_name,
            'customer_city'=>$request->billing_city,
            'customer_address'=>$request->billing_address_1.$request->billing_address_2,
            'billing_company'=>$request->billing_company,
            'customer_phone'=>$request->billing_phone,
            'customer_email'=>$request->billing_email,
            'customer_password'=>Hash::make($request->account_password),
            'country'=>$request->billing_country,

        ];
     $customers =   Customer::create($customerData);

        $request->session()->put('customer',$customers->id);
        $request->session()->put('customer_name',$customers->customer_name);
        return redirect('my-account');


    }


    public function my_account_update(Request $request)
    {
        $password_current = $request->password_current;
        $password_1 = $request->password_1;
        $password_2 = $request->password_2;

        if($password_current=='' || $password_1==''){
            $customerData = request()->except(['_token','password_current','password_1','password_2']);


            $customers =  Customer::find($request->session()->get('customer'));
            $customers =  $customers->update($customerData);

            session()->forget('customer_name');
            $request->session()->put('customer_name',$request->customer_name);

            return redirect()->back()->with(['icon'=>'success','message'=>'Account Details successfully updated']);

        }else{

            $Customer = Customer::where('id', '=', $request->session()->get('customer'))->first();


            if (!Hash::check($password_current, $Customer->customer_password)) {

                return redirect()->back()->with(['icon'=>'error','message'=>'Current password is incorrect']);

            }
            if ($password_2!==$password_1) {
                return redirect()->back()->with(['icon'=>'error','message'=>'New Password and Old password does not match']);
            }

            $customerData = request()->except(['_token','password_current','password_1','password_2']);

            $customerData['customer_password']=Hash::make($request->password_1);

            $customers =  Customer::find($request->session()->get('customer'));
            $customers =  $customers->update($customerData);
            session()->forget('customer_name');
            $request->session()->put('customer_name',$request->customer_name);
            return redirect()->back()->with(['icon'=>'success','message'=>'Account Details successfully updated']);

        }



        return redirect('my-account');


    }

    public function checkout()
    {

        $Customer = Customer::where('id', '=', session()->get('customer'))->first();
        return view('checkout',compact('Customer'));

    }


    public function checkoutpost(Request $request)
    {
//  return $request->all();

        $createaccount = $request->createaccount;
        if($createaccount==1){
            $customerData = [
                'customer_id'=>1,
                'customer_name'=>$request->billing_first_name.' '.$request->billing_last_name,
                'customer_city'=>$request->billing_city,
                'customer_address'=>$request->billing_address_1.$request->billing_address_2,
                'billing_company'=>$request->billing_company,
                'customer_phone'=>$request->billing_phone,
                'customer_email'=>$request->billing_email,
                'customer_password'=>Hash::make($request->account_password),
                'country'=>$request->billing_country,

            ];
         $customers =   Customer::create($customerData);

         $customers_id = $customers->id;
        }else{
            $Customer = Customer::where('id', '=', session()->get('customer'))->first();
            $customers_id = $Customer->id;
        }



        $order_id  = sprintf("%06d", mt_rand(1, 999999));
        $data = [
            'order_id'=>$order_id,
            'order_date'=>date('Y-m-d h:i:s'),
            'Processing_date'=>date('Y-m-d h:i:s'),
            'Customer_id'=>$customers_id,
            'Pay_Method'=>$request->payment_method,
            'Deliver_city'=>$request->billing_city,
            'Deliver_address'=>$request->billing_address_1.$request->billing_address_2,
            'phone_number'=>$request->billing_phone,
            'email'=>$request->billing_email,
            'order_items'=>$request->order_items,
            'order_items_total_amount'=>$request->order_items_total_amount,
            'order_message'=>$request->order_comments,
        ];
    $orderCreate = Order::create($data);

        $request->session()->forget('cart');

    return redirect('my-account?page=Orders')->with(['icon'=>'success','message'=>'Order Completed']);


    }
}
