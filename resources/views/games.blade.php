{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('type_id', 'Type_id:') !!}
			{!! Form::text('type_id') !!}
		</li>
		<li>
			{!! Form::label('max_player_per_team', 'Max_player_per_team:') !!}
			{!! Form::text('max_player_per_team') !!}
		</li>
		<li>
			{!! Form::label('max_player_reserve', 'Max_player_reserve:') !!}
			{!! Form::text('max_player_reserve') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}