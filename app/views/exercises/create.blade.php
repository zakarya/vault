@extends('layouts.scaffold')

@section('main')

<h1>Create Exercise</h1>

{{ Form::open(array('route' => 'exercises.store')) }}
	<ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('description', 'Description:') }}
            {{ Form::textarea('description') }}
        </li>

        <li>
            {{ Form::label('level', 'Level:') }}
            {{ Form::input('number', 'level') }}
        </li>

        <li>
            {{ Form::label('master', 'Master:') }}
            {{ Form::text('master') }}
        </li>

        <li>
            {{ Form::label('isMaster', 'IsMaster:') }}
            {{ Form::checkbox('isMaster') }}
        </li>

		<li>
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


