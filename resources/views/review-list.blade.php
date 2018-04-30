@extends('main-layout')

@section('title', 'Reviews')

@section('content')
	<h1>Reviews for {{$professor->name}}</h1>
	<table class="table">
		<thead>
			<tr>
				<td>
					User
				</td>
				<td>
					Commments
				</td>
			</tr>
		</thead>
		<tbody>
			@foreach($reviews as $review)
				<tr>
					<td>
						{{$review->User->name}}
					</td>
					<td>
						{{$review->comment}}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	
    <a href="/posts/{{$professor->ProfessorId}}/write">Write Review</a>

@endsection