{!! Form::open(['route' => 'neighborhoods/search', 'method' => 'post', 'novalidate', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) !!}
	{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Escriba el dato a buscar']) !!}
	{!! Form::submit('Search', ['class' => 'btn btn-primary']) !!}
	<a href="{{ route('neighborhoods.index') }}" class="btn btn-primary">All</a>
	<a href="{{action('NeighborhoodController@create')}}" class="btn btn-info" role="button">Create</a>
{!! Form::close() !!}