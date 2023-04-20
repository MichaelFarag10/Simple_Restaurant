<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Foodchef;
use App\Models\Order;
class AdminController extends Controller
{
    //
    public function user(){

        if(auth::id()){

            $data =user::all();
            return view('admin.user',compact("data"));
        }else{

            return redirect('/login');
        }

    }

    public function deleteuser($id){

        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }


    public function foodmenu(){
        if(auth::id()){

            $data = food::all();
            return view("admin.foodmenu" ,compact('data'));

        }else{
            return redirect('/login');
        }
    }

    public function uploadfood(Request $request){

        $data = new food;
        $image = $request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        $data->image=$imagename;
        $data->title = $request->title;
        $data->price =$request->price;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();


    }

    public function deletemenu($id){
        $data = food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateview($id){
        $data = food::find($id);
        return view('admin.updateview',compact('data'));
    }



    public function update(Request $request ,$id){

        $data = food::find($id);
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }

    public function viewreservation(){
        if(auth::id()){
        $data = Reservation::all();
        return view('admin.adminreservation',compact('data'));
        }else{

            return redirect('/login');
        }


    }

    public function viewchef(){
        if(auth::id()){
        $data = Foodchef::all();
        return view("admin.adminchef",compact('data'));
        }else{

            return redirect('/login');
        }
    }

    public function menuchef(){
        if(auth::id()){
        $data = Foodchef::all();
        return view("admin.menuchef",compact('data'));
        }else{
            return redirect('/login');
        }

    }


    public function uploadchef(Request $request){

        $data = new Foodchef;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('chefimage',$imagename);
        $data->image = $imagename;
        $data->name = $request->name;
        $data->speciality = $request->speciality;
        $data->save();
        return redirect()->back();
    }

    public function deletechef($id){


        $data = Foodchef::find($id);
        $data->delete();
        return redirect()->back();

    }


    public function updatechef($id){

        $data = foodchef::find($id);
        return view('admin.updatechef', compact('data'));
    }

    public function updatefoodchef(Request $request ,$id)
    {
        $data =  Foodchef::find($id);
        $image = $request->image;
        if($image){

            $imagename = time() . '.' .$image->getClientOriginalExtension();
            $image->move('chefimage',$imagename);
            $data->image = $image;
        }
        $data->name = $request->name;
        $data->speciality = $request->speciality;
        $data->save();
        return redirect()->back();
    }

    public function orders(){
        if(auth::id()){

            $data = order::all();
            return view('admin.orders',compact('data'));
        }else{
            return redirect('/login');
        }
    }

    public function search(Request $request){

        $search = $request->search;
        $data = order::where('name','Like','%'.$search.'%')->orWhere('foodname','Like','%'.$search.'%')->get();
        return view('admin.orders',compact('data'));
    }

    public function delete_order($id)
    {
        if(auth::user()->usertype == 1 && auth::check()){

            $delete_order = Order::findOrFail($id);
            $delete_order->delete();
            return redirect()->back();

        }else{
            return redirect()->back();
        }

    }
}
