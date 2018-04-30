@extends('main-layout')

@section('title', 'My Reviews')

@section('content')
	<table class="table">
		<thead>
			<tr>
				<th>
					Professor
				</th>
				<th>
					Comments
				</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($posts as $post)
				<tr>
					<td>
						{{$post->Professor->name}}
					</td>
					<td>
						{{$post->comment}}
					</td>
					<td>
						<a href="/edit/{{$post->id}}" class="btn btn-primary">Edit</a>
						<a href="/delete/{{$post->id}}" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	
    

@endsection