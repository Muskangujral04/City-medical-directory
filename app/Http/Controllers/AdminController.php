<?php

namespace App\Http\Controllers;
use App\Admin;
use App\UserDetail;
use App\Country;
use App\State;
use App\City;
use App\Category;
use App\Speciality;
use Illuminate\Http\Request;
use Response;

class AdminController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth:admin');

    }

    public function index()
    {
    	return view('admin-home');
    }

     public function pending()
    {
        $users=UserDetail::get()->where('status',NULL);
        return view('pending',compact('users'));
    }
    
    public function details($id)
    {
        
        $user=UserDetail::find($id);
        $country=Country::find($user->country_id);
        $state=State::find($user->state_id);
        $city=City::find($user->city_id);
        $category=Category::find($user->category_id);
        $special=Speciality::find($user->speciality_id);
        $specials=Speciality::all();
        
        return Response::json(array('user'=>$user,'country'=>$country,'state'=>$state,'city'=>$city,'category'=>$category,'special'=>$special,'specials'=>$specials));

    }

    public function approval($id)
    {
        $user=UserDetail::find($id);
        $user->status="1";
        $user->save();
        return Response::json($user);
    }

    public function reject($id)
    {
        $user=UserDetail::find($id);
        $user->status="3";
        $user->save();
        return Response::json($user);
    }

    public function rejectedApproval()
    {
        $users=UserDetail::get()->where('status',3);
        return view('reject',compact('users'));
    }

    public function approved()
    {
        $users=UserDetail::get()->where('status',1);
        return view('approved',compact('users'));
    }

}
