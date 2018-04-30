@extends('main-layout')

@section('title', 'Write Review')

@section('content')

@if ($errors->isNotEmpty())
            <div class="alert alert-danger" role="alert">
              @foreach($errors->all() as $message)
                {{$message}}
              @endforeach
            </div>
 @endif
    <form action="/posts/{{$professor->ProfessorId}}/reviews/new" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label   for="comment">Comment for {{$professor->name}}:</label>
             <textarea class='form-control'  name="comment"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
   

@endsection