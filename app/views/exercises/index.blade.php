@extends('layouts.scaffold')

@section('main')

<h1>All Exercises</h1>

<p>{{ link_to_route('exercises.create', 'Add new exercise') }}</p>

@if ($exercises->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Description</th>
				<th>Level</th>
				<th>Master</th>
				<th>IsMaster</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($exercises as $exercise)
				<tr>
					<td>{{{ $exercise->name }}}</td>
					<td>{{{ $exercise->description }}}</td>
					<td>{{{ $exercise->level }}}</td>
					<td>{{{ $exercise->master }}}</td>
					<td>{{{ $exercise->isMaster }}}</td>
                    <td>{{ link_to_route('exercises.edit', 'Edit', array($exercise->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('exercises.destroy', $exercise->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no exercises
@endif

@stop
