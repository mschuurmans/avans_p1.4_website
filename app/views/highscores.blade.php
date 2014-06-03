@extends('layouts.default')
@section('content')
<style>
	.thead
	{
		text-align: left;
	}
</style>
<?php $count = 1; ?>
<table style="width: 100%;">
	<tbody>
		<tr style="width: 940px; border: 1px solid black;" class="thead"><th class="thead">nr</th><th style="min-width: 30%">Name</th><th style="width: 30%" class="thead">Score</th><th style="width: 30%" class="thead">Date</th></tr>
		@foreach ($scores as $score)
    			<tr>
				<td><?php echo $count; ?></td>
				<td>{{ $score->name }}</td>
				<td>{{ $score->score }}</td>
				<td>{{ $score->date }}</td>	
			</tr>
			<?php $count++; ?>
		@endforeach
	</tbody>
</table>
@endsection
