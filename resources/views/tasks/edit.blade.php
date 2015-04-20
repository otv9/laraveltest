@extends('app')

@section('content')
	<h2>Edit Task "{{ $task->name }}"</h2>

	{!! Form::model($task, ['method' => 'PATCH', 'route' => ['projects.tasks.update', $project->slug, $task->slug]]) !!}
		@include('tasks/partials/_form', ['submit_text' => 'Edit Task'])
		{!! link_to_route('projects.index', 'Back to Projects') !!}
	{!! Form::close() !!}
@endsection