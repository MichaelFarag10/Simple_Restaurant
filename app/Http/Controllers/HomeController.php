<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Foodchef;
use App\Models\Reservation;
use App\Models\Cart;
use App\Models\Order;
class HomeController extends Controller
{
    //

    public function index(){

        if(Auth::id()){

            return redirect('redirects');
        }else{


        $data = food::all();
        $data2 = Foodchef::all();

        return view("home" ,compact('data','data2'));
        }
    }

    public function redirects(){
        $data2 = Foodchef::all();
        $data = food::all();
        $usertype = Auth::user()->usertype;
        if($usertype == '1'){

            return view('admin.adminhome');
        }else{
            $user_id = auth::id();
            $count = cart::where('user_id',$user_id)->count();
            return view('home',compact('data','data2','count'));
        }



    }

    public function reservation(Request $request){
        $data = new reservation;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->guest = $request->guest;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;
        $data->save();
        return redirect()->back();

    }

    public function addcart(Request $request ,$id){

        if(auth::id()){
            $user_id = auth::id();
            $quantity = $request->quantity;

            $cart = new cart;
            $cart->food_id = $id;
            $cart->user_id = $user_id;
            $cart->quantity = $quantity;
            $cart->save();

            return redirect()->back();
        }else{

            return redirect('/login');
        }
    }


    public function showcart(Request $request,$id){



        $count = cart::where('user_id',$id)->count();
        if(Auth::id() == $id){
        $data2 = cart::select('*')->where('user_id','=',$id)->get();
        $data = cart::where('user_id',$id)->join('food','carts.food_id','=','food.id')->get();

        $max = array(
            "data" =>  $data,
            "data2" => $data2
        );




        return view('showcart',compact('count','max'));

        }
        else{
            return redirect()->back();
        }
    }

    public function remove($id){

        $data = cart::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function orderconfirm(Request $request){


            foreach($request->foodname as $key => $foodname){

                $data  = new order;
                $data->foodname = $foodname;
                $data->price = $request->price[$key];
                $data->quantity = $request->quantity[$key];
                $data->name = $request->name;
                $data->phone = $request->phone;
                $data->address = $request->address;
                $data->food_id = $request->food_id[$key];
                $data->save();
            }
            $cart = Cart::all();
            foreach($cart as $cart){
                $cart->delete();
            }

            return redirect()->back();



    }


}
