@extends('layouts.default')
@section('content')
<table>
	<tbody>
		<tr><th>Name</th><th>Score</th><th>Date</th></tr>
		@foreach ($scores as $score)
    			<tr>
				<td>{{ $score->name }}</td>
				<td>{{ $score->score }}</td>
				<td>{{ $score->date }}</td>	
			</tr>
		@endforeach
	</tbody>
</table>
@endsection
