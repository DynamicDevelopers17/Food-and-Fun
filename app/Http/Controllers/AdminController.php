<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Food;

use App\Models\Reservation;

use App\Models\Foodchef;

use App\Models\order;

use App\Models\getintouch;

use App\Models\messageadmin;




class AdminController extends Controller
{
    
    public function user()
    {
        $data=user::all();
        return view("admin.users",compact("data"));
    }
    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function deletemenu($id)
    {
        $data=food::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function deletechef($id)
    {
        $data=foodchef::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updateview($id)
    {
        $data=food::find($id);
        return view("admin.updateview",compact("data"));
        $data->delete();
        return redirect()->back();
    }
    public function update(Request $request , $id)
    {
        $data=food::find($id);
        $image=$request->image;
        $imagename =time().'.'.$image->getClientOriginalExtension();
	    $request->image->move('foodimage',$imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
       
    }
    // Foodmenu
    public function foodmenu()
    {
        $data=food::all();
        return view("admin.foodmenu",compact("data"));
    }
    //Foodmenu upload
   public function upload(Request $request)
    {
        $data = new food;
        $image=$request->image;
        $imagename =time().'.'.$image->getClientOriginalExtension();
	    $request->image->move('foodimage',$imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }
//reservation
    public function reservation(Request $request)
    {
        $data = new reservation;
       
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->guest=$request->guest;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->message=$request->message;

        $data->save();
        return redirect()->back();
    }
//Viewreservation
public function viewreservation()
{
    if( Auth::id()){
    $data=reservation::all();
    return view("admin.adminreservation",compact("data"));
    }
    else{
        return redirect('login');

    }
}

// Viewchef
public function viewchef()
    {
    $data=foodchef::all();
    return view("admin.adminchef",compact("data"));
    }
//uploadchef
    public function uploadchef(Request $request)
    {
        $data = new foodchef;
       
        $image=$request->image;
        $imagename =time().'.'.$image->getClientOriginalExtension();
	    $request->image->move('chefimage',$imagename);
        $data->image=$imagename;
        $data->name=$request->name;
        $data->speciality=$request->speciality;
        $data->save();
        return redirect()->back();
    }

    public function updatechef($id)
    {
        $data=foodchef::find($id);
        return view("admin.updatechef",compact("data"));
        return redirect()->back();
    }
    public function updatefoodchef(Request $request, $id)
    {
        $data=foodchef::find($id);
        $image=$request->image;

            if ($image){
                        $imagename =time().'.'.$image->getClientOriginalExtension();
                            $request->image->move('chefimage',$imagename);
                            $data->image=$imagename;
                     }
        $data->name=$request->name;
        $data->speciality=$request->speciality;
        $data->save();
        return redirect()->back();
       
    }


    public function orders()
    {
        $data=order::all();
        return view('admin.orders',compact("data"));
    }

    public function search(Request $request)
    {
        $search=$request->search;
        $data=order::where('name','Like','%'.$search.'%')->orwhere('foodname','Like','%'.$search.'%')->get();
        return view('admin.orders',compact("data"));
    }
    

    public function getintouch(Request $request)
    {
        $data = new getintouch;
       
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->message=$request->message;
        $data->save();
        return redirect()->back();
    }




    public function messageadmin()
    {
        $data=food::all();
        return view("admin.messageadmin",compact("data"));
    }
}