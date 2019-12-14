<?php

namespace App\Http\Controllers;
use App\Country;
use App\State;
use App\City;
use App\Category;
use App\Speciality;
use App\UserDetail;
use App\Query;
use Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()

    {
       $id=Auth::user()->id;
       $user=UserDetail::where('user_id',$id)->first();
       return view('home',compact('user'));
    }

     public function show()
    {
        $id=Auth::User()->id;
        $user=UserDetail::where('user_id',$id)->get()->first();
        if(is_null($user))
        {
            $countries=Country::get();
            $states=State::get();
            $cities=City::get();
            $categories=Category::get();
            $specialities=Speciality::get();

            return view('form',compact('countries','states','cities','categories','specialities'));
       }
      else
        {
          $countries=Country::get();
            $states=State::get();
            $cities=City::get();
            $categories=Category::get();
            $specialities=Speciality::get();
            $images=array();
            $images=json_decode($user->gallery);
            $others= array();
           $others=json_decode($user->other);
        
          return view('edit',compact('user','countries','states','cities','categories','specialities','images','others'));
        }
    }

    public function store(Request $request)
    {
       
        $other=$request['other'];
        $images=array();
        $files=$request->file('img');
        
            foreach($files as $file)
            {
                $name=$file->getClientOriginalName();
                $destinationPath=public_path('/image');
                $file->move($destinationPath,$name);
                $images[]=$name;
            }
        
        
        $file=$request->file('logo');
        
        $name=$file->getClientOriginalName();
        $destinationPath=public_path('/image');
        $file->move($destinationPath,$name);
        $img=$name;
        $data=$this->validate($request,[
           'company_name'=>'required|max:255',
           'address1'=>'required',
           'address2'=>'nullable',
           'landline'=>'nullable',
           'country'=>'required',
           'state'=>'required',
           'city'=>'required',
           'pincode'=>'required|max:6',
           'contact_person'=>'required|string',
           'designation'=>'required|string',
           'mobile'=>'required|integer',
           'email'=>'required|email|unique:user_details',
           'website'=>'url|nullable',
           'about'=>'required|max:2000',
           'category'=>'required',
           'speciality'=>'required',
           'logo'=>'nullable',
           'img'=>'nullable',
           's_timing1'=>'required',
           's_timing2'=>'required',
           'w_timing1'=>'required',
           'w_timing2'=>'required',
           'off_days'=>'nullable',


        ]);
            
        
        $detail= new UserDetail();
        $id=Auth::user()->id;
        $detail->storeDetail($data,$id,$images,$img,$other);
        return redirect('/user/home');
    }

    public function update(Request $request)
    {
      $images=array();
      if($request->file('img')!='')
      {
       
        //gallery ka code
        if($files=$request->file('img'))
        {
            foreach($files as $file)
            {
                $name=$file->getClientOriginalName();
                  $destinationPath=public_path('/image');
                 $file->move($destinationPath,$name);
                 $images[]=$name;
            }
        }
       }

       $img='';
       if($request->file('logo')!='')
       {
        //logo ka code
        $file=$request->file('logo');
        $name=$file->getClientOriginalName();
        $destinationPath=public_path('/image');
        $file->move($destinationPath,$name);
        $img=$name;
        //other ka kaam
        }
        $others=array();
        $others=$request['other'];
        
        $id=Auth::user()->id;
        $user=UserDetail::where('user_id',$id)->first();
        $user->email="";
        $user->save();       
         $data=$this->validate($request,[
           'company_name'=>'required|max:255',
           'address1'=>'required',
           'address2'=>'nullable',
           'country'=>'required',
           'state'=>'required',
           'city'=>'required',
           'pincode'=>'required|max:6',
           'mobile'=>'required|integer',
           'email'=>'required|unique:user_details|email',
           'website'=>'nullable|url',
           'about'=>'required|max:2000',
           'off_days'=>'nullable',
           'contact_person'=>'required',
           'designation'=>'required',
           's_timing1'=>'required',
           's_timing2'=>'required',
           'w_timing1'=>'required',
           'w_timing2'=>'required',
           'category'=>'required',
           'landline'=>'nullable',
           'speciality'=>'required',
           'logo'=>'nullable',
           'img'=>'nullable',
           'other'=>'nullable',
        
           
        ]);
      
        $user->updateUser($data,$id,$images,$img,$others);
        return redirect('/user/home');
    }

    public function index()
    {
       $id=Auth::user()->id;
       $user=UserDetail::where('user_id',$id)->first();
       return view('index',compact('user')); 
    }

    

     public function getQuery()
    {
        $id=Auth::user()->id;
        $queries=Query::where('user_id',$id)->latest()->paginate(8);
        return view('query',compact('queries'));
    }


     public function replyform($id)
    {
      $user=Query::find($id);
      return view('vreply',compact('user'));
    }


 public function reply(Request $request)
    {
      $data=array(
      'email'=>$request->email,
      'subject'=>$request->subject,
      'bodymessage'=>$request->message,
      );
      Mail::send('ureply',$data,function($message) use ($data){
      $message->from('muskan.gujral44@gmail.com');
      $message->to($data['email']);
      $message->subject($data['subject']);
      });
      return back();
    }



   
  
  
}
