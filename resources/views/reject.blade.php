@extends('layouts.admin-app')
@extends('layouts.admin-dash')
@section('content')
<head>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div class="alert alert-info" id="success"></div>

<div class="alert alert-danger" id="reject"></div>
@if($users->isEmpty())
<div class="alert alert-info" style="width:50%;margin:auto" align="center">
  No Rejected Approvals
</div>
@else
<div class="container">
	<table class="table table-striped">
		<tr>
			<th>Sr No.</th>
			<th>User Name</th>
			<th>Action</th>
		</tr>
         @php
         $x=0;
         @endphp
		@foreach($users as $user)
		<tr>
			<td>{{++$x}}</td>
			<td>{{$user->company_name}}</td>
			<td><button class="btn btn-outline-primary view" value="{{$user->id}}">View Details</button></td>
		</tr>
		@endforeach
	</table>
</div>
@endif
<!-- modal -->
<div id="mymodal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="myform">
        <div class="form-group">
        	Company Name:<input type="text" class="form-control" id="company_name" value="" disabled>
        </div>
        <div class="form-group">
          Mobile:<input type="text" class="form-control" id="mobile" value="" disabled>
        </div>
        <div class="form-group">
          Landline:<input type="text" class="form-control" id="landline" value="" disabled>
        </div>
        <div class="form-group">
          Pincode:<input type="text" class="form-control" id="pincode" value="" disabled>
        </div>
        <div class="form-group">
          Contact Person:<input type="text" class="form-control" id="contact_person" value="" disabled>
        </div>
        <div class="form-group">
          Designation:<input type="text" class="form-control" id="designation" value="" disabled>
        </div>
        <div class="form-group">
          Address1:<input type="text" class="form-control" id="address1" value="" disabled>
        </div>
         <div class="form-group">
          Address2:<input type="text" class="form-control" id="address2" value="" disabled>
        </div>

         <div class="form-group">
          Category:<input type="text" class="form-control" id="category" value="" disabled>
        </div>

        <div class="form-group">
          Speciality:<input type="text" class="form-control" id="speciality" value="" disabled>
        </div>


         <div class="form-group">
          Other:
          <select id="others" multiple="multiple" disabled>
            
          </select>
        </div>
         <div class="form-group">
          Country:<input type="text" class="form-control" id="country" value="" disabled>
        </div>

         <div class="form-group">
          State:<input type="text" class="form-control" id="state" value="" disabled>
        </div>
         <div class="form-group">
          City:<input type="text" class="form-control" id="city" value="" disabled>
        </div>
        <div class="form-group">
          Summer Timings:
        </div>
         
         <div class="form-group">
          Morning Timing:<input type="text" class="form-control" id="summer1" value="" disabled>
        </div>

         <div class="form-group">
          Evening Timing:<input type="text" class="form-control" id="summer2" value="" disabled>
        </div>

         <div class="form-group">
          Winter Timings:
        </div>
        <div class="form-group">
          Morning Timing:<input type="text" class="form-control" id="winter1" value="" disabled>
        </div>

         <div class="form-group">
          Evening Timing:<input type="text" class="form-control" id="winter2" value="" disabled>
        </div>
        <div class="form-group">
          Logo: 
          <img src="" width="100px" height="100px" id="logo">
        </div>
         <div class="form-group">
            <label id="images" id="images">Gallery:</label><br>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary approval" id="approve">Approve</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>

<!-- modal ends -->

<script>
	$(document).ready(function(){
		$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
       $('#success').hide();
       $('#reject').hide();
       $('.view').click(function()
       { 
          var user_id=$(this).val();
          console.log(user_id);
          $.get('/training/medicaldirectory/public/admin/details'+'/'+user_id,function(data)
          {
            console.log(data);
              $('#company_name').val(data.user.company_name);
              $('#landline').val(data.user.landline);
              $('#mobile').val(data.user.mobile);
              $('#address1').val(data.user.address1);
              $('#address2').val(data.user.address2);
              $('#landline').val(data.user.landline);
              $('#pincode').val(data.user.pincode);
              $('#contact_person').val(data.user.contact_person);
              $('#designation').val(data.user.designation);
              $('#country').val(data.country.country_name);
              $('#state').val(data.state.state_name);
              $('#city').val(data.city.city_name);
              $('#summer1').val(data.user.s_timing1);
              $('#summer2').val(data.user.s_timing2);
              $('#winter1').val(data.user.w_timing1);
              $('#winter2').val(data.user.w_timing2);
              $('#category').val(data.category.category_name);
              $('#speciality').val(data.special.speciality_name);
              $('#approve').val(data.user.id)
             var y=JSON.parse(data.user.other);
             console.log(y);
             $('.others').remove();
             $.each(data.specials,function(index,value)
             {
                 $.each(y,function(index1,value1){
                     if(value.id==value1)
                     {
                        console.log(value.speciality_name);
                        $('#others').append('<option class="others">'+value.speciality_name+'</option>');
                     }
                 });
             });
              $('#logo').attr('src','{{url("/image")}}'+'/'+data.user.logo);
               var x=JSON.parse(data.user.gallery);
                console.log(x);
               if(x.length<1)
               {
               $('.gallery').remove();
               $('#images').text('Gallery:N.A');
              }
              else
              {
                 $('.gallery').remove();
                 $('#images').text('Gallery :');
                $.each(x, function (index, value) {     
                 $("#images").after('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img width="100px" class="gallery" height="100px" src=""  id="gallery">');
                 $('#gallery').attr('src','{{url("/image")}}'+'/'+value);
                 });
              }

          });
          $('#mymodal').modal('toggle');
       });

       $('.approval').click(function()
      {
          var id=$(this).val();
          console.log(id);
          $.get('/training/medicaldirectory/public/admin/approve/'+id,function(data){
            $('#success').show();
            $('#success').text('Approval Successfull');
          });

          $('#mymodal').modal('toggle');
          
      });

   });

</script>
@endsection