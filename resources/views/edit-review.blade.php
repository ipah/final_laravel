@extends('main-layout')

@section('title', 'Edit Review')

@section('content')
	@if ($errors->isNotEmpty())
            <div class="alert alert-danger" role="alert">
              @foreach($errors->all() as $message)
                {{$message}}
              @endforeach
            </div>
        @endif

        
    <form action="/edit/{{$post->id}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label   for="comment">Comment for {{$post->Professor->name}}:</label>
             <textarea class='form-control'  name="comment">
             	{{ old('comment',$post->comment) }}
             </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
   

@endsection