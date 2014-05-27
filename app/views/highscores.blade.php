@extends('layouts.default')
@section('content')
<style>
	.thead
	{
		text-align: left;
	}
</style>
<table style="width: 100%;">
	<tbody>
		<tr style="width: 940px; border: 1px solid black;" class="thead"><th style="min-width: 30%">Name</th><th style="width: 30%" class="thead">Score</th><th style="width: 30%" class="thead">Date</th></tr>
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
