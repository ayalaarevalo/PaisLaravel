
@extends('app')


	@section('content')
			<div class="col-md-10 col-md-offset-1">

				@if (isset($neighborhood))
							<div class="panel panel-success">
								<div class="panel-heading">Update Neighborhood  </div>
									{!! Form::model($neighborhood, ['method' => 'PATCH', 'action' => ['NeighborhoodController@update', $neighborhood->id]]) !!}
									
										<div class="panel-body">
											
											@include ('neighborhoods.form')

										</div>

										<div class="panel-footer">
											
											@include ('neighborhoods.button', ['submitButton' => 'Editar'])

										</div>
							
				@else
							<div class="panel panel-info">
								<div class="panel-heading">Create new Neighborhood  </div>
									{!! Form::open(['route' => 'neighborhoods.store']) !!}
										
										<div class="panel-body">

											@include ('neighborhoods.form')

										</div>

										<div class="panel-footer">
											
											@include ('neighborhoods.button',  ['submitButton' => 'Grabar'])

										</div>
							
				@endif
					</div>

							{!! Form::close() !!}
			</div>	

	@stop
