@extends('layout')
	
@section('content')
	<h2>Notes</h2>
	<p>
		<a href="/notes/create">Añadir una nota</a>
	</p>
	<ul>
		@foreach ( $notes as $note )
	  	<li>
	  		{{ $note->note }}
	  	</li>
	  	@endforeach
  	</ul>

@endsection