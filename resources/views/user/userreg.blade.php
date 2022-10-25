@extends('user.layout.app')
@section('title','User Registration')
@section('body')

sbit reg

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Regular Page</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Blank</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

	

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">


<form method="post" action="{{asset('reg')}}">
	@csrf
  <fieldset>
    <legend>User Registration</legend>

    <div class="form-group">
      <label for="userName" class="form-label mt-4">Name</label>
      <input type="text" class="form-control" id="userName" aria-describedby="emailHelp" placeholder="Enter Name" name="user_name" >
     
    </div>   

    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="user_email" >
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"  name="user_password">
    </div>
       <div class="form-group">
      <label for="phone" class="form-label mt-4">Phone</label>
      <input type="number" class="form-control" id="phone" placeholder="Phone"  name="user_phone">
    </div>
    
    <div class="form-group">
      <label for="exampleTextarea" class="form-label mt-4">Example textarea</label>
      <textarea class="form-control" id="exampleTextarea" rows="3" name="user_address"></textarea>
    </div>
    <div class="form-group">
      <label for="formFile" class="form-label mt-4">Default file input example</label>
      <input class="form-control" type="file" id="formFile" name="image">
    </div>
    
   <input type="range" class="form-range" id="customRange1">

<input type="submit" name="save" value="User Registration" class="btn btn-success">
  <!-- 	<a href="" class="btn btn-success d-block">Save</a> -->
  	<a href="{{asset('reg')}}" class="btn btn-info d-block">View</a>

  </fieldset>
</form>


					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

@endsection
