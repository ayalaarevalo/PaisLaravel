
{!! Form::model(Request::all(),['route' => 'members.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) !!}
	
	{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Escriba el dato a buscar']) !!}
	{!! Form::select('neighborhood_id', array('' => 'Select' ) + $neighborhoods,  null, ['class' => 'form-control', 'tabindex' => '1']) !!}
	{!! Form::submit('Search', ['class' => 'btn btn-primary']) !!}
	<a href="{{ route('members.index') }}" class="btn btn-primary">All</a>
	<a href="{{action('MemberController@create')}}" class="btn btn-info" role="button">Create</a>
	<a href="{{action('ExcelController@index', Request::get('neighborhood_id'))}}" class="btn btn-success" role="button">Print</a>

{!! Form::close() !!}