
@extends('app')


	@section('content')
			<div class="col-md-10 col-md-offset-1">

				@if (isset($member))
							<div class="panel panel-success">
								<div class="panel-heading">Update Member  </div>
									{!! Form::model($member, ['method' => 'PATCH', 'action' => ['MemberController@update', $member->id]]) !!}
									
										<div class="panel-body">
											
											@include ('members.form')

										</div>

										<div class="panel-footer">
											
											@include ('members.button', ['submitButton' => 'Editar'])

										</div>
							
				@else
							<div class="panel panel-info">
								<div class="panel-heading">Create new Members  </div>
									{!! Form::open(['route' => 'members.store']) !!}
										
										<div class="panel-body">

											@include ('members.form')

										</div>

										<div class="panel-footer">
											
											@include ('members.button',  ['submitButton' => 'Grabar'])

										</div>
							
				@endif
					</div>

							{!! Form::close() !!}
			</div>	

	@stop
