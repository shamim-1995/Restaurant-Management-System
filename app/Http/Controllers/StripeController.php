<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Stripe\Exception\InvalidRequestException;
use Stripe\Stripe;
use Stripe\Charge;
// use Stripe;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Banner;
use App\Models\minibanner;
use App\Models\middlebanner;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Shipping;
  
class StripeController extends Controller
{
    public function checkout($id)
    {
        // $category=Category::all();
        
        $product=Cart::find($id);
        if (!$product) {
            // Handle the case where the product is not found
            abort(404);
        }
        $user_id=$product->user_id;
        $user=User::find($user_id);
        if (!$user) {
            // Handle the case where the user is not found
            abort(404);
        }
        $user_name=$user->name;
        $user_email=$user->email;
        $product_id=$product->id;
        $product_title=$product->product_title;
        $product_price=$product->price;
        // dd($product_price);
        
        $category=Category::all();
        $carts=cart::where('user_id','=',$user_id)->count();
        return view('home.checkout',compact('user_id','user_name','user_email','product_id','product_title','product_price','category','carts'));
    }
     
      
    public function createCharge(Request $request)
    {
        if (!Shipping::where('user_id', $request->user_id)->exists()) {
            // Redirect to address page
            return redirect()->back()->with('success','Please provide your shipping address.');
        }
        else{
            $takaAmount = $request->product_price; // Add 120 to the product_price
            $usdCentsAmount = round($takaAmount * 100); // Convert to USD cents

    try {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        Charge::create([
            "amount" => $usdCentsAmount,
            "currency" => "bdt",
            "source" => $request->stripeToken,
            "description" => "Binaryboxtuts Payment Test"
        ]);
        // Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        // Stripe\Charge::create ([
        //         "amount" => ($request->product_price / 106) * 100,
        //         "currency" => "usd",
        //         "source" => $request->stripeToken,
        //         "description" => "Binaryboxtuts Payment Test"
        // ]);
        $user=user::find($request->user_id);
        $order=new Order;
        $order->customer_id=$request->user_id;
        $order->customer_name=$user->name;
        $order->customer_email=$user->email;
        $order->product_id=0;
        $order->product_title=$request->product_title;
        $order->price=$request->product_price;
        $order->status="Paid";
        $order->order_status=0;
        $order->delivery_status=0;
        $order->cancel_status=0;
        
        $order->save();

     
        return redirect()->back()->with('success','Payment & Order Successful!');
    } catch (InvalidRequestException $e) {
        // Handle Stripe API exception
        return redirect()->back()->with('error', $e->getMessage());
    }
    }
    }
    public function cash_on_delivery(Request $request)
    {
        if (!Shipping::where('user_id', $request->user_id)->exists()) {
            // Redirect to address page
            return redirect()->back()->with('success','Please provide your shipping address.');
        }
        else{
            $user=user::find($request->user_id);
            $order=new Order;
            $order->customer_id=$request->user_id;
            $order->customer_name=$user->name;
            $order->customer_email=$user->email;
            $order->product_id=0;
            $order->product_title=$request->product_title;
            $order->price=$request->product_price;
            $order->status="Cash On Delivery";
            $order->order_status=0;
            $order->delivery_status=0;
            $order->cancel_status=0;
            
            $order->save();

     
        return redirect()->back()->with('success','Order Place Successful!');
        } 
    }
}