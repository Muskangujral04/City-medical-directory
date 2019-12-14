@extends('layouts.app')
@extends('layouts.user')
@section('content')
<head>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<div class="container">
	 @if($queries->isEmpty())
                <div class="card-body" style="height: 200px">
                    <div class="alert alert-info msg">
                        <h3 align="center"><strong>No Queries Yet.</strong></h3>
                    </div>
                </div>
              @else
	<div class="row">
		<table class="table table-striped">
			<tr>
				<th>Sr No.</th>
				<th>Name</th>
				<th>Email</th>
				<th>Message</th>
				<th>Date and Time</th>
				<th>Action</th>
            </tr>
              @php
         $x=0;
         @endphp

            	@foreach($queries as $query)
            	<tr>
            	<td>{{++$x}}</td>
            	<td>{{$query->name}}</td>
            	<td>{{$query->email}}</td>
            	<td>{{$query->message}}</td>
            	<td>{{$query->created_at->format('M d,Y h:i a')}}</td>
            	<td><a href="{{url('/user/reply/'.$query->id)}}" class="btn btn-outline-primary">Reply</a></td>
            </tr>
            	@endforeach
            
			
		</table>
		{{$queries->links()}}
		
	</div>
@endif	
</div>

@endsection