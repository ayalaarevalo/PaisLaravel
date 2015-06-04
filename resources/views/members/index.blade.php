
@extends('app')



	@section('content')

			<div class="col-md-12 col-xs-12">
				<div class="panel panel-info">
					<div class="panel-heading">Members  </div>

					<div class="panel-body">
						@if (Session::has('deleted'))
							<div class="alert alert-warning" role="alert"> Members borrado, si desea deshacer el cambio <a href="{{ route('members/restore', [Session::get('deleted')]) }}">Click aqui</a> </div>
						@endif
						 
						@if (Session::has('restored'))
						    <div class="alert alert-success" role="alert"> Members restaurado</div>
						@endif
						@if (Session::has('message'))
						    <div class="alert alert-success">{{ Session::get('message') }}</div>
						@endif

						@include('members.search')
						
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Neighborhood</th>
									<th>Name</th>
									<th>Surname</th>
									<th>Document</th>
									<th>Celular</th>
									<th>Phone</th>
									<th>Firmas</th>
									<th colspan="3" style="text-align:center;">Acción</th>
								</tr>
							</thead>
							<tbody>
							
								@foreach ($members as $member)
									<tr>
										<td> {{ $member->neighborhood->name }}</td>
										<td> {{ $member->name }} </td> 
										<td> {{ $member->surname}} </td>
										<td> {{ $member->document}} </td>
										<td> {{ $member->celullar}} </td>
										<td> {{ $member->phone}} </td>
										<td> </td>
										<td>  <a href="{{url('/members', $member->id)}}"><i class="glyphicon glyphicon-search"></i></a></td>
										<td>  <a href="{{ route('members.edit', [$member->id]) }}"><i class="glyphicon glyphicon-edit icon-edit"></i></a> </td>
										<td>  <a href="{{ route('members/delete', [$member->id]) }}"><i class="glyphicon glyphicon-trash icon-trash"></i></a></td>
									</tr>
								@endforeach

							</tbody>
						</table>
						<div align="right">
							<p> Mostrando <strong> {{ $members->total() }} </strong> registro(s) </p>
						</div>
					</div>
					@if ($members->render())
						<div class="panel-footer" align="right">{!! $members->render() !!}</div>
					@endif
				</div>
			</div>	
		
	@stop
