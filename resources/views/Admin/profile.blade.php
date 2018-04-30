@extends('main-layout')

@section('title', 'Profile')

@section('content')
	
    <div class="container mt-4">
        <h1>Welcome back, {{$user->name}}</h1>
        <p>Your email is {{$user->email}}</p>
    </div>
    <div>
    	Add Professor for Rating
    	<form action="/professors" method="post">
    		{{csrf_field()}}

    		<div class="form-group">
    			
    			<label for="professor">Professor:</label>
    			<input class = "form-control" type="" name="professor">
    		</div>
    		<div class="form-group">
    			 <label for="university">University:</label> 
    			<input class = "form-control" type="" name="university">
    		</div>
    		

    		<button type="submit" class="btn btn-primary">Submit</button>
    	</form>
	    
    </div>

@endsection