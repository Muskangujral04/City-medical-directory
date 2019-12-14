<?php

namespace App\Http\Controllers;
use App\UserDetail;
use App\Country;
use App\City;
use App\State;
use DataTables;
use App\Speciality;
use App\Category;
use Mail;
use App\Query;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function listing()
    {
        // if($id==1)
        // {
        //     $users=UserDetail::where('status',1)->where('category_id',$id)->get();
           
        // }
        // elseif($id==2)
        // {
        	
        // 	$users=UserDetail::where('status',1)->where('category_id',$id)->get();
        // }
        // elseif($id==3)
        // {
        //     $users=UserDetail::where('status',1)->where('category_id',$id)->get();
        // }
        // else
        // {
        // 	$users=UserDetail::where('status',1)->get();
        // }
        return view('listing');
    }

    public function homepage()
    { 
       $users=UserDetail::where('category_id',1)->get();
       $peoples=UserDetail::where('category_id',2)->get();
       $specials=Speciality::all();
       $categories=Category::all();
       
       return view('homepage',compact('users','peoples','specials','categories'));
    }

    public function filter(Request $request)
    {
        
        $category=$request->category;
        $speciality=$request->speciality;
        if(is_null($category) && is_null($speciality))
        {
             return back();
        }
        else if(!empty($category) && is_null($speciality)) 
        {
            $users=UserDetail::where('status','1')->where('category_id',$category)->get();

        }
        else if(is_null($category) && !empty($speciality))
        {
             $users=UserDetail::where('status','1')->where('speciality_id',$speciality)->get();
        }
        else
        {
             $users=UserDetail::where('status','1')->where('category_id',$category)->where('speciality_id',$speciality)->get();
        }
          
        return view('hospital',compact('users'));

    }

    public function hospital()
    {
    	$users=UserDetail::where('category_id','1')->where('status','1')->get();
    	return view('hospital',compact('users'));
    }

    public function doctor($id=null)
    {   
        if(is_null($id))
        {
        $users=UserDetail::where('category_id','2')->get();
        }
        else
        {
            $users=UserDetail::where('category_id','2')->where('speciality_id',$id)->get();
        }
         return view('hospital',compact('users'));
        
    }

    public function profile($id)
    {
    	$user=UserDetail::find($id);
        $specialities=Speciality::all();
        $others=json_decode($user->other);
        $gallery=json_decode($user->gallery);
    	return view('profile',compact('user','specialities','others','gallery'));
    }

    public function index()
    {
        $user=UserDetail::where('status',1)->get();
        return DataTables()->of($user)
                           ->addColumn('address1',function($data){
                            $address='<p>'.$data->address1.",".$data->city->city_name.",".$data->state->state_name.'</p>';
                            return $address;
                           })

                           ->addColumn('action',function($data){
                            $button='<a class="btn btn-primary" href="'.url('/profile/'.$data->id).'" value=' .$data->id. '>View Details</a>';
                            return $button;
                           })

                           ->rawColumns(['address1','action'])
                           ->make(true);


    }


    public function contact()
    {
        return view('contact');
    }


    public function query(Request $request)
    {
       $data=array(
        'name'=>$request->name,
         'email'=>$request->email,
        'bodymessage'=>$request->message,
    );
       Mail::send('reply',$data,function($message) use ($data){
        $message->from('muskan.gujral44@gmail.com');
        $message->to($data['email']);
       });

       $query=new Query();
       $query->saveQuery($request);
       return back();
        
    }

   
}
