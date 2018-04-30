@extends('main-layout')

@section('title', 'Professors')

@section('content')

	<ul>
        @foreach($professors as $professor)
            <li>
               <a href="/posts/{{$professor->ProfessorId}}/reviews">{{$professor->name}}</a>
                    
                
            </li>
                
        @endforeach
    </ul>


@endsection