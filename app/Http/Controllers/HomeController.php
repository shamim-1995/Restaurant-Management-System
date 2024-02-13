<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;
use App\Models\food;
use App\Models\Banner;
use App\Models\minibanner;
use App\Models\middlebanner;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Shipping;
use App\Models\Order;
use App\Models\Ratting;
use App\Models\reservation;
use App\Models\blog;
use App\Models\Feedback;


class HomeController extends Controller
{
    
    public function redirect(){
        $username=Auth::user()->name;
        $usertype=Auth::user()->usertype;
        if($usertype=='1'){
            $total_product = food::count();
            $total_user = User::count();
            $total_order = Order::where('order_status', 1)->count();
            $ordercount = Order::where('order_status',0)
                        ->where('cancel_status',0)
                        ->count();
            $cancelcount =Order::where('cancel_status',1)
                        ->count();
            $delivercount =Order::where('delivery_status',1)
                        ->count();
            $reservationcount =reservation::where('status',0)
                        ->count();

            $users = User::select(\DB::raw('DATE(created_at) as date'), \DB::raw('COUNT(*) as count'))
                        ->groupBy('date')
                        ->orderBy('date')
                        ->get();
            
            $chartData = [
                            'labels' => $users->pluck('date'),
                            'data' => $users->pluck('count'),
                        ];
            // dd($total_product);
            $totalItemsOrdered = Order::where('delivery_status', 1)
            ->sum('price');
            // $product =Product::all();
            return view('admin.home',compact('totalItemsOrdered','total_product','total_order','total_user','ordercount','cancelcount','delivercount','reservationcount','chartData'));
        }
        else{
            if (Auth::check()) {
            $id = Auth::user()->id;
            $carts = cart::where('user_id', $id)->count();
            $username=Auth::user()->name;
        }
        else{
            $carts =0;
            $username = "dd";
        }
        $blog = blog::orderBy('created_at', 'desc')->get();
        $category=Category::all();
        $breakfast=Food::where('feature_product', 1)
                        ->where('category', 1)
                        ->orderBy('created_at', 'desc')
                        ->first();
        $lunch=Food::where('feature_product', 1)
                    ->where('category', 2)
                    ->orderBy('created_at', 'desc')
                    ->first();
        $dinner=Food::where('feature_product', 1)
                    ->where('category', 3)
                    ->orderBy('created_at', 'desc')
                    ->first();

        
        return view('home.user', compact('username','category','blog','breakfast','lunch','dinner','carts')); 
        }
    }
    public function index(){
        if (Auth::check()) {
            $id = Auth::user()->id;
            $carts = cart::where('user_id', $id)->count();
            $username=Auth::user()->name;
        }
        else{
            $carts =0;
            $username = "dd";
        }
        $blog = blog::orderBy('created_at', 'desc')->get();
        $category=Category::all();
        $breakfast=Food::where('feature_product', 1)
                        ->where('category', 1)
                        ->orderBy('created_at', 'desc')
                        ->first();
        $lunch=Food::where('feature_product', 1)
                    ->where('category', 2)
                    ->orderBy('created_at', 'desc')
                    ->first();
        $dinner=Food::where('feature_product', 1)
                    ->where('category', 3)
                    ->orderBy('created_at', 'desc')
                    ->first();

        
        return view('home.user', compact('username','category','blog','breakfast','lunch','dinner','carts'));  
    }

    // our menus
    public function our_menu()
    {
        if (Auth::check()) {
            $id = Auth::user()->id;
            $carts = cart::where('user_id', $id)->count();
            $username=Auth::user()->name;
        }
        else{
            $carts=0;
            $username = "dd";
        }
        $breakfast=Food::where('category', 1)
                        ->get();

        // dd($breakfast);
        $lunch=Food::where('category', 2)
                        ->get();
        $dinner=Food::where('category', 3)
                        ->get();
        
        return view('home.menu', compact('username','breakfast','lunch','dinner','carts'));
    }

    public function add_cart($id)
    {
        if(Auth::id()){
            // return redirect()->back();
            $user=Auth::user();
            $product=food::find($id);
            // dd($user);
            $cart=new cart;
            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->product_title=$product->title;
            $cart->product_description=$product->description;
            $cart->image=$product->image;
            $cart->quantity=1;
            if($product->discount_price!=null){
                $cart->price=$product->discount_price;  
            }
            else{
                $cart->price=$product->price;

            }
            $cart->subtotal=$cart->price * $cart->quantity;
        
            $cart->status=0;
            $cart->product_id=$product->id;
            $cart->user_id=$user->id;
            $cart->save();
            return redirect()->back()->with('message','1 new Item(s) have been added to your cart');
        }

        else{
            return redirect('login');
        } 
    }

    // reservation
    // public function reservation(Request $request)
    // {
    //     if(Auth::id()){
    //         // return redirect()->back();
    //         $user=Auth::user();
    //         $id = Auth::user()->id;
    //         $name = Auth::user()->name;
    //         // dd($name);
            
    //         // dd($user);
    //         $reservation=new reservation;
    //         $reservation->name=$name;
    //         $reservation->userid=$id;
    //         $reservation->day=$request->txtDate;
    //         $reservation->hour=$request->hour;
    //         $reservation->reservdate=$request->txtDate; 
    //         $reservation->number=$request->phone;
    //         $reservation->person=$request->persons;
    //         $reservation->status=0;
            
    //         $reservation->save();
    //         return redirect()->back()->with('message','Please wait a moment as we confirm your reservation');
    //     }

    //     else{
    //         return redirect('login');
    //     } 
    // }
    public function reservation(Request $request)
{
    if (Auth::id()) {
        $user = Auth::user();
        $id = Auth::user()->id;
        $name = Auth::user()->name;

        // Additional checks
        $hour = $request->hour;
        $date = $request->txtDate;
        $persons = $request->persons;

        

        // Check if there are existing reservations for the specified date and hour
        $existingReservations = Reservation::where('day', $date)
            ->where('hour', $hour)
            ->sum('person');
        // dd($existingReservations);

        // Check if the sum of existing reservations and new persons is less than 60
        if (($existingReservations + $persons) >= 60) {
            // Redirect with an error message indicating that the selected date and hour are not available for the specified number of persons.
            return redirect()->back()->with('message', 'Sorry, the selected date and hour are not available for the specified number of persons.');
        }else{
            
        // Continue with reservation if all checks pass
        $reservation = new Reservation;
        $reservation->name = $name;
        $reservation->userid = $id;
        $reservation->day = $date;
        $reservation->hour = $hour;
        $reservation->reservdate = $date;
        $reservation->number = $request->phone;
        $reservation->person = $persons;
        $reservation->status = 0;

        $reservation->save();

        return redirect()->back()->with('message', 'Please wait a moment as we confirm your reservation');

        }

        
    } else {
        return redirect()->back()->with('message', 'You cannot make a reservation without logging in. Please log in to proceed.');
    }
}






    public function show_cart()
    {
        if(Auth::id()){
            $id=Auth::user()->id;
            $cartItems=cart::where('user_id','=',$id)->get();
            $total=$cartItems->sum('subtotal');
            $carts=cart::where('user_id','=',$id)->count();
            $category=category::all();
            $username=Auth::user()->name;
            return view('home.show_cart',compact('category','cartItems','carts','username','total'));
            }
            else{
                return redirect('login');
            }

            
    }



    // remove cart
    public function remove_cart($id)
    {
        $cart=cart::find($id);
        $cart->delete();
        return redirect()->back()->with('message','Product Remove From Cart Successfully');
    }
    // remove cart
    public function add_rating(Request $request)
    {
        if(Auth::user()){
            $title= $request->input('product_name');
            $starts_rated=$request->input('product_rating');
            $Product_id=$request->input('product_id');
            
            $user=Auth::user();
            // dd($course_id);
            // dd($starts_rated);
            $verified_purchase=Order::where('customer_id','=',$user->id,)
                                ->where('product_title', 'like', '%' . $title . '%')
                                ->where('delivery_status','=',1)
                                ->count();
            // $row_count=$verified_purchase->count(*);
            // dd($verified_purchase);
            if($verified_purchase>=1){
                $rating_check=Ratting::where('user_id','=',$user->id,)->where('product_id','=',$Product_id)->first();
                
                if($rating_check){
                    $rating_check->stars=$starts_rated;;
                    $rating_check->update();
                  
                    return redirect()->back()->with('message','Rating updated');
                }
                
                else{
                    $rating=new Ratting;
                $rating->user_id=$user->id;
                $rating->name=$user->name;
                $rating->product_id=$Product_id;
                $rating->stars=$starts_rated;
                $rating->save();
                return redirect()->back()->with('message','Thank you for Rating this Product');
    
                }
                
    
            }
            else{
                return redirect()->back()->with('message','You cannot rate Product without Purchase');
            }
            
    
            }
            else{
                return redirect()->back()->with('message','You cannot rate Product without Purchase');
            }
            
    }

    // send feedback
    public function send_feedback(Request $request)
    {
        $feedback = new Feedback;
        $feedback->namr = $request->name;
        $feedback->email = $request->email;
        $feedback->phone = $request->phone;
        $feedback->message = $request->message;
        

        $feedback->save();

        return redirect()->back()->with('message', 'Thanks For your Feedback');

    }


    public function address()
    {
        $id = Auth::user()->id;
        $username=Auth::user()->name;

        $address=Shipping::where('user_id',$id)->get();
        
        
        $carts = cart::where('user_id', $id)->count();
          
          return view('home.shipping_address',compact('carts','id','username','address'));
    }

    public function update_address(Request $request, $id)
    {
        // $address = Shipping::findOrFail('user_id', $id);
        // $address =Shipping::where('user_id',$id)->get();
        $user_id = $id;
        $street=$request->input('street');
        $city=$request->input('city');
        $state=$request->input('state');
        $postal_code=$request->input('postal_code');
        $phone=$request->input('phone');
        $address = $street.'-'.$postal_code.','.$city.','.$state;
        // dd($);
        $existingAddress = Shipping::where('user_id', $user_id)->first();
        if ($existingAddress) {
            // If an address exists, update the fields
            $existingAddress->Address = $address;
            $existingAddress->phone = $phone;
            $existingAddress->save();
        }else{
            $push_address=new Shipping;
        $push_address->user_id=$user_id;
        $push_address->Address=$address;
        $push_address->phone=$phone;
        $push_address->save();
        }
        
        return redirect()->back()->with('message','Your address has been successfully updated');
        
    }
    // all product
    public function test()
    {
        $category=Category::all();
        $product =Product::orderBy('created_at', 'desc')
                ->paginate(8);
        if (Auth::check()) {
            $id = Auth::user()->id;
            $carts = cart::where('user_id', $id)->count();
          } else {
            $carts = 0;
          }
        return view('home.all_product',compact('category','carts','product'));
    //     $result = DB::table('orders')
    // ->select('orders.customer_email', 'shippings.address')
    // ->join('shippings', 'orders.customer_id', '=', 'shippings.user_id')
    // ->get();

    // dd($result);

    }
    // all product
    public function category_product($id)
    {
        $category=Category::all();
        $data=Category::find($id);
        // dd($data);
        $category_name=$data->category_name;
        // dd($category_name);
        $product =Product::where('category', $id)->get();
        if (Auth::check()) {
            $id = Auth::user()->id;
            $carts = cart::where('user_id', $id)->count();
          } else {
            $carts = 0;
          }
        return view('home.category_ways',compact('category','carts','product','category_name'));
    //     $result = DB::table('orders')
    // ->select('orders.customer_email', 'shippings.address')
    // ->join('shippings', 'orders.customer_id', '=', 'shippings.user_id')
    // ->get();

    // dd($result);

    }

    public function details($id)
    {
        $foodid=$id;
        if (Auth::check()) {
            $id = Auth::user()->id;
            $carts = cart::where('user_id', $id)->count();
            $username=Auth::user()->name;
        }
        else{
            $carts=0;
            $username = "dd";
        }
        $product=food::find($foodid);
        $ratings = Ratting::where('product_id', $product->id)->get();
        $product_image=$product->image;
        $title=$product->title;
        $ratings_sum = Ratting::where('product_id', $product->id)->sum('stars');
        if ($ratings->count() > 0) {
          $rating_value = $ratings_sum / $ratings->count();
        } else {
          $rating_value = 0;
        }
        $suggest = food::where('category', '=', $product->category)
                    ->whereNotIn('id', [$product->id])
                    ->inRandomOrder()
                    ->limit(3)
                    ->get();
        
        if (Auth::check()) {
            $id = Auth::user()->id;
            $carts = cart::where('user_id', $id)->count();
          } else {
            $carts = 0;
          }
        return view('home.details', compact('username','carts','product_image','title','product','suggest','rating_value','ratings'));

       
    }


    // for order
    public function order()
    {
        $id = Auth::user()->id;
        $category=Category::all();
        $carts = cart::where('user_id', $id)->count();
        $order = Order::where('customer_id', $id)->orderBy('created_at', 'desc')->get();
        $username=Auth::user()->name;
        // dd($name);

        // $order = DB::table('orders')
        //         ->select('orders.id','orders.customer_name','orders.customer_email','orders.product_title','orders.price','orders.product_id','orders.order_status','orders.delivery_status','products.image')
        //         ->join('products', 'orders.product_id', '=', 'products.id')
        //         ->where('orders.customer_id', $id)
        //         ->get();
        
          
        return view('home.order',compact('category','carts','id','order','username'));
    }

    public function reservation_status()
    {
        $id = Auth::user()->id;
        $category=Category::all();
        $carts = cart::where('user_id', $id)->count();
        $reservation = reservation::where('userid', $id)->orderBy('created_at', 'desc')->get();
        $username=Auth::user()->name;
        return view('home.reservation',compact('category','carts','id','reservation','username'));
    }


    // for search
    public function search()
    {
        $category = category::all();
        if (Auth::check()) {
            $carts = cart::where('user_id', Auth::id())->count();
          } else {
            $carts = 0;
          }
        $search_text = $_GET['search'];
        
        
        $product = Product::where('title','LIKE','%'.$search_text.'%')->get();
        // dd($users);
        
          
        return view('home.search', compact('product','category','carts','search_text'));
        
    }

    public function cancel_order($id)
    {
        $order=Order::find($id);
        if ($order) {
            $order->cancel_status = 1;
            $order->save();
            return redirect()->back()->with('message','Request for cancel this order');
        }
    }

    public function demo()
    {
        $carts =0;
        return view('home.food',compact('carts'));
    }

    // show blog
    public function blog()
    {
        $blog = blog::orderBy('created_at', 'desc')->get();
        if (Auth::check()) {
            $id = Auth::user()->id;
            $carts = cart::where('user_id', $id)->count();
            $username=Auth::user()->name;
        }
        else{
            $carts =0;
            $username = "dd";
        }
          return view('home.blog',compact('blog','carts','username'));
    }

    // read blog
    public function read_blog($id)
    {
        $blogid=$id;
        
        if (Auth::check()) {
            $id = Auth::user()->id;
            $carts = cart::where('user_id', $id)->count();
            $username=Auth::user()->name;
        }
        else{
            $carts =0;
            $username = "dd";
        }
        $blog = blog::where('id', $blogid)->get();
        return view('home.read_blog',compact('blog','carts','username'));
        // dd($blog);
    }
    // Contact
    public function contact()
    {
        if (Auth::check()) {
            $id = Auth::user()->id;
            $carts = cart::where('user_id', $id)->count();
            $username=Auth::user()->name;
        }
        else{
            $carts =0;
            $username = "dd";
        }
          return view('home.contact',compact('carts','username'));
    }

    // selected food show
    public function categoryfood($id)
    {
        $category = food::where('category', $id)->get();
        if (Auth::check()) {
            $id = Auth::user()->id;
            $carts = cart::where('user_id', $id)->count();
            $username=Auth::user()->name;
        }
        else{
            $carts =0;
            $username = "dd";
        }
        return view('home.food', compact('username','category','carts'));
    }



    public function update_quantity(Request $request ,$id)
    {
        $product=Cart::find($id);
        if($request->change_to ==='up'){
            $product->increment('quantity');
            $product->subtotal=$product->price * $product->quantity;
            $product->save();
            
            return redirect()->back();
        }
        else if($product->quantity==1)
        {
            $product->delete();
            return redirect()->back();
        }
        else
        {
            $product->decrement('quantity');
            $product->subtotal=$product->price * $product->quantity;
            $product->save();
            return redirect()->back();
        }
    }

    public function ordercheckout()
    {
        $id=Auth::user()->id;
        $username=Auth::user()->name;
        $carts=cart::where('user_id','=',$id)->count();
        $cartItems=cart::where('user_id','=',$id)->get();
        $cartInfoArray = $cartItems->map(function ($item) {
            return $item->product_title . ' (' . $item->quantity . ')';
        })->toArray();
        $totalSubtotal = $cartItems->sum('subtotal');

    // Add 30 to the total subtotal
        $totalSubtotal += 30;
    
        // Concatenate the strings into a single string
        $concatenatedTitlesWithQuantities = implode(', ', $cartInfoArray);
        return view('home.checkout',compact('username','id','totalSubtotal','concatenatedTitlesWithQuantities','carts'));
        
    }




    // public function checkout($id)
    // {
    //     // $category=Category::all();
        
    //     $product=Cart::find($id);
    //     if (!$product) {
    //         // Handle the case where the product is not found
    //         abort(404);
    //     }
    //     $user_id=$product->user_id;
    //     $user=User::find($user_id);
    //     if (!$user) {
    //         // Handle the case where the user is not found
    //         abort(404);
    //     }
    //     $user_name=$user->name;
    //     $user_email=$user->email;
    //     $product_id=$product->id;
    //     $product_title=$product->product_title;
    //     $product_price=$product->price;
    //     // dd($product_price);
        
    //     $category=Category::all();
    //     $carts=cart::where('user_id','=',$user_id)->count();
    //     return view('home.checkout',compact('user_id','user_name','user_email','product_id','product_title','product_price','category','carts'));
    // }

    
}