<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Food;
use App\Models\Banner;
use App\Models\Minibanner;
use App\Models\Middlebanner;
use App\Models\Order;
use App\Models\Ratting;
use App\Models\User;
use App\Models\reservation;
use App\Models\blog;
use App\Models\Feedback;

class AdminController extends Controller
{
    // category page
    public function view_category()
    {
        $ordercount = Order::where('order_status',0)
                        ->where('cancel_status',0)
                        ->count();
        $cancelcount =Order::where('cancel_status',1)
                        ->count();
        $delivercount =Order::where('delivery_status',1)
                        ->count();
        $reservationcount =reservation::where('status',0)
                        ->count();
        $data=category::all();
        return view('admin.category',compact('data','ordercount','cancelcount','delivercount','reservationcount'));
    }

    // adding category
    public function add_category(Request $request)
    {
        $data=new category;
        $data->category_name=$request->category;
        $image=$request->image;
        
        // give unique name
        $imagename=time().'.'.$image->getClientOriginalExtension();
        // move to the file
        $request->image->move('category_picture',$imagename);
        // insert in database
        $data->image=$imagename;
        $data->save();
        return redirect()->back()->with('message','Category Added Successfully');
    }

    // adding product page
    public function view_food()
    {
        $ordercount = Order::where('order_status',0)
                        ->where('cancel_status',0)
                        ->count();
        $cancelcount =Order::where('cancel_status',1)
                        ->count();
        $delivercount =Order::where('delivery_status',1)
                        ->count();
        $reservationcount =reservation::where('status',0)
                        ->count();
        $data=category::all();
        return view('admin.addfood',compact('data','ordercount','cancelcount','delivercount','reservationcount'));
    }
    // show product page
    public function show_food()
    {
        $ordercount = Order::where('order_status',0)
                        ->where('cancel_status',0)
                        ->count();
        $cancelcount =Order::where('cancel_status',1)
                        ->count();
        $delivercount =Order::where('delivery_status',1)
                        ->count();
        $reservationcount =reservation::where('status',0)
                        ->count();
        $data=Food::orderBy('created_at', 'desc')->get();
        return view('admin.show_product',compact('data','ordercount','cancelcount','delivercount','reservationcount'));
    }
    
    // show product page
    public function delete_product($id)
    {
        $product=Food::find($id);
        if ($product) {
            $product->delete();
            return redirect()->back()->with('message','Food Delete Successfully');
        }

        
    }
    // show product page
    public function delete_blog($id)
    {
        $product=blog::find($id);
        if ($product) {
            $product->delete();
            return redirect()->back()->with('message','Blog Delete Successfully');
        }

        
    }


    // show banner
    public function view_banner()
    {
        $ordercount = Order::where('order_status',0)
                        ->where('cancel_status',0)
                        ->count();
        $cancelcount =Order::where('cancel_status',1)
                        ->count();
        $delivercount =Order::where('delivery_status',1)
                        ->count();
        $reservationcount =reservation::where('status',0)
                        ->count();
        $data=Banner::orderBy('created_at', 'desc')->get();
        return view('admin.show_banner',compact('data','ordercount','cancelcount','delivercount','reservationcount'));
    }

    // show banner
    public function user_handle()
    {
        $ordercount = Order::where('order_status',0)
                        ->where('cancel_status',0)
                        ->count();
        $cancelcount =Order::where('cancel_status',1)
                        ->count();
        $delivercount =Order::where('delivery_status',1)
                        ->count();
        $reservationcount =reservation::where('status',0)
                        ->count();
        $user=User::where('usertype', 0)->get();
        return view('admin.user_handle',compact('user','ordercount','cancelcount','delivercount','reservationcount'));
    }

    
    // for delete user
    public function delete_user($id)
    {
        $data=User::find($id);
        $data->delete();
        return redirect()->back()->with('message','User Removed Successfully');
    }
    // side banner
    public function view_side_banner()
    {
        $ordercount = Order::where('order_status',0)
                        ->where('cancel_status',0)
                        ->count();
        $cancelcount =Order::where('cancel_status',1)
                        ->count();
        $delivercount =Order::where('delivery_status',1)
                        ->count();
        $reservationcount =reservation::where('status',0)
                        ->count();
        $data=Minibanner::orderBy('created_at', 'desc')->get();
        return view('admin.show_side_banner',compact('data','ordercount','cancelcount','delivercount','reservationcount'));
    }
    // middle banner
    public function view_middle_banner()
    {
        $category=category::all();
        $data=Middlebanner::orderBy('created_at', 'desc')->get();
        return view('admin.show_middle_banner',compact('data','category'));
    }

    public function add_banner(Request $request)
    {
        $banner=new Banner;
        $banner->banner_name=$request->name;
        $image=$request->image;
        
        // give unique name
        $imagename=time().'.'.$image->getClientOriginalExtension();
        // move to the file
        $request->image->move('banner_picture',$imagename);
        // insert in database
        $banner->image=$imagename;
        $banner->save();
        return redirect()->back()->with('message','banner Added Successfully');
    }
    public function add_mini_banner(Request $request)
    {
        $banner=new Minibanner;
        $banner->banner_name=$request->name;
        $image=$request->image;
        
        // give unique name
        $imagename=time().'.'.$image->getClientOriginalExtension();
        // move to the file
        $request->image->move('middle_banner',$imagename);
        // insert in database
        $banner->image=$imagename;
        $banner->save();
        return redirect()->back()->with('message','banner Added Successfully');
    }
    // add middle banner
    public function add_middle_banner(Request $request)
    {
        $banner=new Middlebanner;
        $banner->banner_name=$request->name;
        $banner->category=$request->category;
        $image=$request->image;
        
        // give unique name
        $imagename=time().'.'.$image->getClientOriginalExtension();
        // move to the file
        $request->image->move('banner_picture',$imagename);
        // insert in database
        $banner->image=$imagename;
        $banner->save();
        return redirect()->back()->with('message','banner Added Successfully');
    }

    // adding product
    // public function add_product(Request $request)
    // {
    //     $description=$request->input('comment');
    //     $product=new Product;
    //     $product->title=$request->title;
    //     $product->key_feature="Write Key Feature";
    //     // $product->description =$description;
    //     $product->price=$request->price;
    //     $product->discount_price=$request->dis_price;
        
    //     $product->category=$request->category;
    //     // store image
    //     // store image in variable
    //     $image=$request->image;
        
    //             // give unique name
    //     $imagename=time().'.'.$image->getClientOriginalExtension();
    //     // move to the file
    //     $request->image->move('product_picture',$imagename);
    //     // insert in database
    //     $product->image=$imagename;
    //     $product->feature_product=0;
    //     $product->flash_sell_product=0;
       
    //     $product->save();
    //     return redirect()->back()->with('message','product Added Successfully');
    // }

    public function add_food(Request $request)
    {
        
        $description='Describe here';
        $product=new Food;
        $product->title=$request->title;
        $product->description =$description;
        $product->price=$request->price;
        $product->discount_price=$request->dis_price;
        
        $product->category=$request->category;
        // store image
        // store image in variable
        $image=$request->image;
        
                // give unique name
        $imagename=time().'.'.$image->getClientOriginalExtension();
        // move to the file
        $request->image->move('product_picture',$imagename);
        // insert in database
        $product->image=$imagename;
        $product->feature_product=0;
       
        $product->save();
        return redirect()->back()->with('message','Food Added Successfully');
    }



    // view order
    public function view_order()
    {
        $result = DB::table('orders')
    ->select('orders.id','orders.customer_name','orders.customer_email','orders.product_title','orders.price','orders.status','orders.order_status','orders.delivery_status','shippings.phone','shippings.user_id','shippings.address')
    ->join('shippings', 'orders.customer_id', '=', 'shippings.user_id')
    ->where('orders.delivery_status', 0)
    ->where('orders.cancel_status', 0)
    ->orderBy('orders.created_at', 'desc')
    ->get();
    $ordercount = Order::where('order_status',0)
                        ->where('cancel_status',0)
                        ->count();
    $cancelcount =Order::where('cancel_status',1)
                        ->count();
    $delivercount =Order::where('delivery_status',1)
                        ->count();
    $reservationcount =reservation::where('status',0)
                        ->count();
        // dd($result);
    return view('admin.view_order',compact('result','ordercount','cancelcount','delivercount','reservationcount'));
        
    }
    // view order
    public function view_cancel_request()
    {
        $result = DB::table('orders')
    ->select('orders.id','orders.customer_name','orders.customer_email','orders.product_title','orders.price','orders.status','orders.order_status','orders.cancel_status','orders.delivery_status','shippings.phone','shippings.user_id','shippings.address')
    ->join('shippings', 'orders.customer_id', '=', 'shippings.user_id')
    ->where('orders.cancel_status', 1)
    ->orderBy('orders.created_at', 'desc')
    ->get();

    $ordercount = Order::where('order_status',0)
                        ->where('cancel_status',0)
                        ->count();
    $cancelcount =Order::where('cancel_status',1)
                        ->count();
    $delivercount =Order::where('delivery_status',1)
                        ->count();
    $reservationcount =reservation::where('status',0)
                        ->count();

        // dd($result);
    return view('admin.cancel_request',compact('result','ordercount','cancelcount','delivercount','reservationcount'));
        
    }

    // delivered_order 

    public function delivered_order()
    {
        $orders = Order::where('delivery_status', 1)->get();
        $ordercount = Order::where('order_status',0)
                        ->where('cancel_status',0)
                        ->count();
        $cancelcount =Order::where('cancel_status',1)
                        ->count();
        $delivercount =Order::where('delivery_status',1)
                        ->count();
        $reservationcount =reservation::where('status',0)
                        ->count();
        // dd($orders);
        return view('admin.view_delivered_order',compact('orders','ordercount','cancelcount','delivercount','reservationcount'));
    }

    public function edit_food($id)
    {
        $ordercount = Order::where('order_status',0)
                        ->where('cancel_status',0)
                        ->count();
                        $cancelcount =Order::where('cancel_status',1)
                        ->count();
        $delivercount =Order::where('delivery_status',1)
                        ->count();
        $reservationcount =reservation::where('status',0)
                        ->count();
        $product=Food::find($id);
        return view('admin.edit_product',compact('product','ordercount','cancelcount','delivercount','reservationcount'));
    }

    
    // for delete banner
    public function delete_banner($id)
    {
        $data=Banner::find($id);
        $data->delete();
        return redirect()->back()->with('message','Banner Removed Successfully');
    }// for delete banner
    public function delete_category($id)
    {
        $data=Category::find($id);
        $data->delete();
        return redirect()->back()->with('message','category Removed Successfully');
    }

    public function update_product(Request $request, $id)
{
    $product = Food::find($id);
    $product->title = $request->title;
    $product->description = $request->comment;
    $product->price = $request->price;
    $product->discount_price = $request->dis_price;

    // Check if the user uploaded a new image
    if ($request->hasFile('image')) {
        // Delete the previous image file from the folder
        $previousImage = $product->image;
        if ($previousImage) {
            $imagePath = public_path('product_picture') . '/' . $previousImage;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Upload the new image
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move('product_picture', $imageName);

        $product->image = $imageName;
    }

    $product->save();
    return redirect()->back()->with('message', 'Food Updated Successfully');
}


// view reservation
public function reservation()
    {
    //     $result = DB::table('orders')
    // ->select('orders.id','orders.customer_name','orders.customer_email','orders.product_title','orders.price','orders.status','orders.order_status','orders.cancel_status','orders.delivery_status','shippings.phone','shippings.user_id','shippings.address')
    // ->join('shippings', 'orders.customer_id', '=', 'shippings.user_id')
    // ->where('orders.cancel_status', 1)
    // ->orderBy('orders.created_at', 'desc')
    // ->get();
    $result = Reservation::orderBy('created_at', 'desc')->get();


    $ordercount = Order::where('order_status',0)
                        ->where('cancel_status',0)
                        ->count();
    $cancelcount =Order::where('cancel_status',1)
                        ->count();
    $delivercount =Order::where('delivery_status',1)
                        ->count();
    $reservationcount =reservation::where('status',0)
                        ->count();

        // dd($result);
    return view('admin.reservation',compact('result','ordercount','cancelcount','delivercount','reservationcount'));
        
    }


    public function show_blog(){
        $result = blog::orderBy('created_at', 'desc')->get();
        $ordercount = Order::where('order_status',0)
                        ->where('cancel_status',0)
                        ->count();
        $cancelcount =Order::where('cancel_status',1)
                        ->count();
        $delivercount =Order::where('delivery_status',1)
                        ->count();
        $reservationcount =reservation::where('status',0)
                        ->count();
        return view('admin.showblog',compact('result','ordercount','cancelcount','delivercount','reservationcount'));
        
    }

// view post blog
public function post_blog()
    {
   


    $ordercount = Order::where('order_status',0)
                        ->where('cancel_status',0)
                        ->count();
    $cancelcount =Order::where('cancel_status',1)
                        ->count();
    $delivercount =Order::where('delivery_status',1)
                        ->count();
    $reservationcount =reservation::where('status',0)
                        ->count();

        // dd($result);
    return view('admin.post_blog',compact('ordercount','cancelcount','delivercount','reservationcount'));
        
    }




    // for add blog
    public function add_blog(Request $request)
    {
        
        
        $product=new blog;
        $product->title=$request->title;
        $product->description =$request->comment;
        // store image
        // store image in variable
        $image=$request->image;
        
                // give unique name
        $imagename=time().'.'.$image->getClientOriginalExtension();
        // move to the file
        $request->image->move('blog_picture',$imagename);
        // insert in database
        $product->image=$imagename;
       
        $product->save();
        return redirect()->back()->with('message','Blog Added Successfully');
    }


    // for view feedback
    public function read_feedback()
    {
   

    $feedback = Feedback::orderBy('created_at', 'desc')->get();
    

    $ordercount = Order::where('order_status',0)
                        ->where('cancel_status',0)
                        ->count();
    $cancelcount =Order::where('cancel_status',1)
                        ->count();
    $delivercount =Order::where('delivery_status',1)
                        ->count();
    $reservationcount =reservation::where('status',0)
                        ->count();

    
    return view('admin.read_feedback',compact('feedback','ordercount','cancelcount','delivercount','reservationcount'));
        
    }


    public function toggleOrderStatus(Request $request, $id)
    {
        $product = reservation::findOrFail($id);
        $product->status = $request->input('status');
        $product->save();
        return response()->json(['message' => 'Reservation successfully']);
        // Return a response if needed
    }
    
}