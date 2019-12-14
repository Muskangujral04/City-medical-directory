@extends('layouts.app')
@section('content')
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<img src="{{asset('/image/banner5.png')}}" width="100%">
<br>
<h2 align="center">CONTACT US FOR ANY QUERY</h2>
<div class="container-fluid">
<div class="row">
	<div class="
  col-sm-6 offset-sm-3">
		<form action="" style="margin: auto">
  	<div class="form-group">
      <label for="email">Name:</label>
      <input type="name" class="form-control" id="email" placeholder="Enter name" name="email">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Subject:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter Subject" name="subject">
    </div>

    <div class="form-group">
      <label for="pwd">Message:</label>
     <textarea rows="4" cols="50" class="form-control" placeholder="Enter Message" name="message">
     </textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <br>
	</div>

	
</div>
 
  
</div>
<br><br><br>

<div class="container-fluid">
	 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3424.026238396925!2d75.83248431508993!3d30.88592698158394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a824b9fac2d23%3A0xd9ee63754098857b!2sMicrochip%20Computers!5e0!3m2!1sen!2sin!4v1567235780713!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
@endsection