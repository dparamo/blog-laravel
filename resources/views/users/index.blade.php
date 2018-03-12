@extends('layout')
	@section('content')
			<h1>{{ $title }}</h1>	
		@empty($users)
		    	<p>No hay usuarios registrados. nuevo commit</p>
		@else
		    <ul class="col-12">
		    	<div class="row">
		    	<div class="col-6">
					@for ($i = 0; $i < $userc; $i++)
	    					<li><a>{{ $users[$i] }}</a></li>
					@endfor
				</div>
				<div class="col-6">
					@for ($l = $userc; $l < $usera; $l++)
	    					<li><a>{{ $users[$l] }}</a></li>
					@endfor
		        </div>
		    </ul>
		@endempty
	@endsection