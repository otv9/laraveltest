@extends ('app')

@section ('content')
 <h2>Projects</h2>

 @if ( !$projects->count() )
 		No projects
 @else

 <table>
	<thead>
		<tr>
			<th>Project</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>	
 	<tbody>
 		@foreach ($projects as $project) 
 			<tr>
 				{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.destroy', $project->slug))) !!}
 				<td>	<a href="{{ route('projects.show', $project->slug) }}">{{ $project->name}}</a></td>
 					
 						<td>{!! link_to_route('projects.edit', 'Edit', array($project->slug), array('class' => 'btn btn-info')) !!}, </td>
 						<td>{!! Form::submit('Delete', array('class'=>'btn btn-danger')) !!} </td>
 					
 				{!! Form::close() !!}
 			</tr>
 		@endforeach
 	</tbody>
 </table>
 @endif

 	<p>
 		{!! link_to_route('projects.create', 'Create Project') !!}
 	</p> 
@endsection