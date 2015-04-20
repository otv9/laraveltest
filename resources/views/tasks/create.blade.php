@extends('app')

@section('content')
	<h2>Create Task for Project "{{ $project->name}}"</h2>

	{!! Form::model(new App\Task, ['route' => ['projects.tasks.store', $project->slug], 'class' =>'']) !!}
		@include('tasks/partials/_form', ['submit_text' => 'Create Task'])
		{!! link_to_route('projects.index', 'Back to Projects') !!}
	{!! Form::close() !!}
@endsection