@extends('layouts.app')
@extends('layouts.user')
@section('content')
<head>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

	 @if(is_null($user))
                <div class="card-body" style="height: 200px">
                    <div class="alert alert-info msg">
                        <h3 style="text-align: center"><strong>Please Create your Profile</strong></h3>
                    </div>
                </div>
                @else

<div class="container">
	<div class="row">
	
<div style="margin-left: -50px;" class="col-md-3">
	<img src="{{asset('/image/'.$user->logo)}}" width="200px">
</div>
<div class="col-md-9">
	<table >
         
         <tr>
         	<th>Company:</th>
         	<th>{{$user->company_name}}</th>
         </tr>
		<tr>
			<th>Address:</th>
			<th>{{$user->address1}},{{$user->city->city_name}},{{$user->state->state_name}}</th>
		</tr>
		<tr>
			<th>Mobile:</th>
			<th>{{$user->mobile}}</th>
		</tr>
		<tr>
			<th>Landline:</th>
			<th>{{$user->landline}}</th>
		</tr>
		<tr>
			<th>Email:</th>
			<th>{{$user->email}}</th>
		</tr>
		
	</table>
	
</div>
</div>
<br>
<br>
<div class="row">
	<table class="table table-hover">
	<tr>
		<th>Name</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>Category</td>
	<td>{{$user->category->category_name}}</td>
</tr>

<tr>
	<td>Speciality</td>
	<td>{{$user->speciality->speciality_name}}</td>
</tr>
<tr>
	<td>Contact Person</td>
	<td>{{$user->contact_person}}</td>
</tr>

<tr>
	<td>Designation</td>
	<td>{{$user->designation}}</td>
</tr>
<tr>
	<td>Pincode </td>
	<td>{{$user->pincode}}</td>
</tr>
<tr>
	<td>Country</td>
	<td>{{$user->country->country_name}}</td>
</tr>
<tr>
	<td>Website</td>
	<td>{{$user->website}}</td>
</tr>
<tr>
	<td>About Us</td>
	<td>{{$user->about_us}}</td>
</tr>
<tr>
	<td>Summer Morning Timings</td>
	<td>{{$user->s_timing1}}</td>
</tr>
<tr>
	<td>Summer Evening Timings</td>
	<td>{{$user->s_timing2}}</td>
</tr>
<tr>
	<td>Winter Morning Timings</td>
	<td>{{$user->w_timing1}}</td>
</tr>
<tr>
	<td>Winter Evening Timings</td>
	<td>{{$user->w_timing2}}</td>
</tr>
<tr>
	<td>Off Days</td>
	<td>{{$user->off_days}}</td>
</tr>



</table>
</div>

</div>
@endif
@endsection