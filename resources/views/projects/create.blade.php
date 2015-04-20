@extends('app')

@section('content')
	<h2>Create Project</h2>

	{!! Form::model(new App\Project, ['route' => ['projects.store']]) !!}
		@include('projects/partials/_form', ['submit_text' => 'Create Project'])
		{!! link_to_route('projects.index', 'Back to Projects') !!}
	{!! Form::close() !!}
@endsection