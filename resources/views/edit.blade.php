@extends('layouts.app')
@extends('layouts.user')
@section('content')
<head>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif

<!-- form start -->
<div style="">
   <form enctype="multipart/form-data" style="margin: auto;width: 50%" method="post" action="{{url('/user/update')}}">

    {{csrf_field()}}
    <input type="hidden" value="PATCH" name="_method" />
          <div class="form-group">
            <label>Company Name</label>
            <input type="text" class="form-control" name="company_name" placeholder="Enter Company Name" value="{{$user->company_name}}" required>
          
          </div>
          <div class="form-group">
            <label>Address 1</label>
            <input type="text" class="form-control" name="address1" placeholder="Enter your Address" value="{{$user->address1}}" required>
          </div>

          <div class="form-group">
            <label>Address 2</label>
            <input type="text" class="form-control" name="address2" placeholder="Enter your Address" value="{{$user->address2}}">
          </div>

         <div class="form-group">
    <label>Country</label>
    <select class="form-control" name="country"  required>
      @foreach($countries as $country)
      <option value="{{$country->id}}" {{$country->id == $user->country_id ? 'selected' : ''}}>{{$country->country_name}}</option>
      @endforeach
      
    </select>
  </div>

  <div class="form-group">
    <label >State</label>

    <select class="form-control" name="state"  required>
    @foreach($states as $state)
     <option value="{{$state->id}}" {{$state->id == $user->state_id ? 'selected' : ''}}>{{$state->state_name}}</option>
    @endforeach
        
    </select>
  </div>

  <div class="form-group">
    <label >City</label>
     <select class="form-control" name="city"  required>
       @foreach($cities as $city)
         <option value="{{$city->id}}" {{$city->id == $user->city_id ? 'selected' : ''}}>{{$city->city_name}}</option>
       @endforeach
     </select>
   </div>

  <div class="form-group">
            <label>Pincode</label>
            <input type="number" class="form-control" name="pincode" placeholder="Enter Pincode" value="{{$user->pincode}}">
          
   </div>

   <div class="form-group">
            <label>Contact Person</label>
            <input type="text" class="form-control"  name="contact_person" placeholder="Enter Contact Person" value="{{$user->contact_person}}"required>
          
   </div>

     <div class="form-group">
        <label>Designation</label>
       <input type="text" class="form-control" name="designation" placeholder="Enter Designation" value="{{$user->designation}}" required>
          
      </div>
          
    <div class="form-group">
            <label>Mobile Number</label>
            <input type="number" class="form-control" name="mobile" placeholder="Enter Mobile Number" value="{{$user->mobile}}" required>
          
   </div>
   
    <div class="form-group">
            <label>Landline Number</label>
            <input type="number" class="form-control" name="landline" placeholder="Enter Landline Number" value="{{$user->landline}}">
          
   </div>

    <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{$user->email}}" required>
          
   </div>
   

   <div class="form-group">
            <label>Website</label>
            <input type="url" class="form-control" name="website" placeholder="Enter Website" value="{{$user->website}}" required>
          
   </div>

    <div class="form-group">
            <label>About</label>
            <textarea type="text" class="form-control" name="about" placeholder="Enter About" value="{{$user->about_us}}" rows="5"  required></textarea>
          
   </div>

   <div class="form-group">
            <label>Summer Timings</label><br>
           

           Morning Time: <input type="text" class="form-control" name="s_timing1" placeholder="Enter time" value="{{$user->s_timing1}}" required>
           Evening Time: <input type="text" class="form-control" name="s_timing2" placeholder="Enter time" value="{{$user->s_timing2}}" required>
          
   </div>

    <div class="form-group">
            <label>Winter Timings</label><br>
           Morning Time: <input type="text" class="form-control" name="w_timing1" placeholder="Enter time" value="{{$user->w_timing1}}" required>
           Evening Time: <input type="text" class="form-control" name="w_timing2" placeholder="Enter time" value="{{$user->w_timing2}}" required>
          
   </div>


    <div class="form-group">
            <label>Logo</label>
            <input type="file" class="form-control" name="logo">
            <img src="{{asset('/image/'.$user->logo)}}" width="200px" height="200px">
          
   </div>

   <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="img[]"  multiple>

          
            @foreach($images as $img)
            
            <img src="{{asset('/image/'.$img)}}" width="200px" height="200px">
            @endforeach
          
   </div>

    

    <div class="form-group">
            <label>Off Days</label>
            <input type="text" class="form-control" name="off_days" placeholder="Enter Off Days" value="{{$user->off_days}}"required>
          
   </div>

   <div class="form-group">
    <label>Category</label>
    <select class="form-control" name="category" required>

    @foreach($categories as $category)

    <option value="{{$category->id}}" {{$category->id == $user->category_id ? 'selected' : ''}}>{{$category->category_name}}</option>
    @endforeach
    </select>
  </div>

  <div class="form-group">
    <label>Speciality</label>
    <select class="form-control" name="speciality"  required>

    @foreach($specialities as $speciality)

    <option value="{{$speciality->id}}" {{$speciality->id == $user->speciality_id ? 'selected' : ''}}>{{$speciality->speciality_name}}</option>
    @endforeach
    </select>
  </div>

    <div class="form-group" style="margin-top: 10px">Others</div>
    <div class="form-group">
      <div>
        @if(is_null($others))
         @foreach($specialities as $speciality)
   <input class="form-check-input" type="checkbox" name="other[]" id="inlineCheckbox1" value="{{$speciality->id}}">{{$speciality->speciality_name}}<br>
  @endforeach
      </div>
       @else
    <div>
      @foreach($specialities as $speciality)
      @php
      $x=0
      @endphp
      @foreach($others as $other)
    @if($speciality->id==$other)
   <input class="form-check-input" type="checkbox" name="other[]" id="inlineCheckbox1" value="{{$speciality->id}}" checked>{{$speciality->speciality_name}}<br>
   @php
    $x=1
    @endphp
    @endif
    @endforeach
    @if($x!==1)
    <input class="form-check-input" type="checkbox" name="other[]" id="inlineCheckbox1" value="{{$speciality->id}}" >{{$speciality->speciality_name}}<br>
    @endif
   @endforeach
   </div>
   @endif
 </div>
   <br>



  <button style="margin-top: 10px;" type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
<!-- form end -->
@endsection