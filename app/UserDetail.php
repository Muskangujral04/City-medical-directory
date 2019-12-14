<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable=['company_name','address1','address2', 'country_id' ,'state_id' ,'city_id' ,'pincode' ,'mobile' ,'landline' ,'email' ,'website' ,'logo' ,'gallery' ,'off_days' ,'about_us','contact_person','designation','s_timing1','s_timing2','w_timing1','w_timing2','category_id','speciality_id'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function storeDetail($data,$id,$images,$img,$other)
    {

    	$this->company_name=$data['company_name'];
    	$this->user_id=$id;
    	$this->address1=$data['address1'];
    	$this->address2=$data['address2'];
    	$this->country_id=$data['country'];
    	$this->state_id=$data['state'];
    	$this->city_id=$data['city'];
    	$this->pincode=$data['pincode'];
    	$this->mobile=$data['mobile'];
    	$this->landline=$data['landline'];
    	$this->email=$data['email'];
    	$this->about_us=$data['about'];
    	$this->s_timing1=$data['s_timing1'];
    	$this->s_timing2=$data['s_timing2'];
    	$this->w_timing1=$data['w_timing1'];
    	$this->w_timing2=$data['w_timing2'];
    	$this->off_days=$data['off_days'];
    	$this->contact_person=$data['contact_person'];
    	$this->designation=$data['designation'];
    	$this->website=$data['website'];
    	$this->category_id=$data['category'];
        $this->other=json_encode($other);
    	$this->speciality_id=$data['speciality'];
        $this->logo=$img;
    	$this->gallery=json_encode($images);
    	$this->save();


    }

    public function updateUser($data,$id,$images,$logo,$others)
    {
    
        $this->user_id=$id;
        $this->address1=$data['address1'];
        $this->address2=$data['address2'];
        $this->country_id=$data['country'];
        $this->state_id=$data['state'];
        $this->city_id=$data['city'];
        $this->pincode=$data['pincode'];
        $this->mobile=$data['mobile'];
        $this->landline=$data['landline'];
        $this->email=$data['email'];
        $this->about_us=$data['about'];
        $this->s_timing1=$data['s_timing1'];
        $this->s_timing2=$data['s_timing2'];
        $this->w_timing1=$data['w_timing1'];
        $this->w_timing2=$data['w_timing2'];
        $this->off_days=$data['off_days'];
        $this->contact_person=$data['contact_person'];
        $this->designation=$data['designation'];
        $this->website=$data['website'];
        $this->category_id=$data['category'];
        $this->other=json_encode($others);
        $this->speciality_id=$data['speciality'];
        if($logo!='')
        {
        $this->logo=$logo;
        }
        if($images!='')
        {
        $this->gallery=json_encode($images);
        }
        $this->save();
        return 1;

    }

    public function country()
    {
    	return $this->belongsTo('App\Country');
    }

    public function state()
    {
    	return $this->belongsTo('App\State');
    }

    public function city()
    {
    	return $this->belongsTo('App\City');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

     public function speciality()
    {
        return $this->belongsTo('App\Speciality');
    }
}
