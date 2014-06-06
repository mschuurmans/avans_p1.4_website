@extends('layouts.default')
@section('content')



<table style="width: 100%;">
	<tbody >
    		<tr style="width: 940px;">
			<td style="border: 1px solid black;">
				<div>
					{{ HTML::image('images/indianajantje_splashscreen.png')}}<br /><br /><br /><br /><br />Je staat op een paar pressure plates. Op het scherm komt aan de linker of rechter kant een bal op je af rollen door je voet op te tillen aan die kant ontwijk je de bal en ga je door naar het volgende level.
				</div>
			</td>
			<td style="border: 1px solid black;">
				<div>
					{{HTML::image('images/fruitops_splashscreen.png')}}<br />Er wordt fruit omhoog geschoten in het scherm de bedoeling is dat je met de wii controller op het fruit richt en dan met 'b' een schot lost op het fruit zodat deze uitelkaar spatten. Raak al het fruit en je bent door naar het volgende level.
				</div>
			</td>
		</tr>	
		<tr>
			<td style="border: 1px solid black;">
				<div>
					{{HTML::image('images/whacafardoes_splashscreen.png')}}<br /> Je ziet op het scherm een 3x3 grid. Op een van de locaties verschijnd een fardoes de bedoeling is dat je de juiste locatie aanraakt op het grid om de fardoes te slaan. Raak je hem dan ga je door naar het volgende level.
				</div>
			</td>
			<td style="border: 1px solid black;">
				<div>
					{{HTML::image('images/flappy.jpg')}}<br /><br /> <br />Flap met een wii remote op en neer zodat je omhoog vliegt. Vlieg door de pijp heen en je bent door naar het volgende level.
				</div>
			</td>
		</tr>
<tr>
			<td style="border: 1px solid black;">
				<div>
					{{HTML::image('images/simon.png')}}<br /> Fruit valt uit de lucht het is jou taak om in de juiste volgorde de fruitstukken aan te raken. Als dit lukt ga je door naar het volgende scherm.
				</div>
			</td>
			<td style="border: 1px solid black;">
				<div>
					{{HTML::image('images/red button.png')}}<br /><br /><br /><br /><br /><br /><br />Er verschijnd een scherm met een hoop pijlen richting de rode knop lees heel goed wat er staat. Als je het goed doet ga je door naar het volgende level.
				</div>
			</td>
		</tr>		
	</tbody>
</table>
@endsection

@section('none');

<b>Current games:</b> <br />
{{ HTML::image('images/indianajantje_splashscreen.png')}}<br />
Flappy Bird <br />
{{HTML::image('images/fruitops_splashscreen.png')}}<br />
{{HTML::image('images/whacafardoes_splashscreen.png')}}<br />
Simon Loves Fruit<br />
Red Button 
@endsection
