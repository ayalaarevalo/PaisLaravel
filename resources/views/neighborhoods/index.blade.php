
@extends('app')



	@section('content')

			<div class="col-md-12 col-xs-12">
				<div class="panel panel-info">
					<div class="panel-heading">Neigborhoods  </div>

					<div class="panel-body">						
						@if (Session::has('deleted'))
							<div class="alert alert-warning" role="alert"> Neighborhood borrado, si desea deshacer el cambio <a href="{{ route('neighborhoods/restore', [Session::get('deleted')]) }}">Click aqui</a> </div>
						@endif
						 
						@if (Session::has('restored'))
						    <div class="alert alert-success" role="alert"> Neighborhood restaurado</div>
						@endif
						@if (Session::has('message'))
						    <div class="alert alert-success">{{ Session::get('message') }}</div>
						@endif

						@include('neighborhoods.search')

						<table class="table table-hover">
							<thead>
								<tr>
									<th>Name</th>
									<th>Description</th>
									<th colspan="2" style = "text-align:center;">Acción</th>

								</tr>
							</thead>
							<tbody>
							
								@foreach ($neighborhoods as $neighborhood)
									<tr>
										<td> {{ $neighborhood->name }} </td> 
										<td> {{ $neighborhood->description}} </td>
										<td>  <a href="{{url('/neighborhoods', $neighborhood->id)}}"><i class="glyphicon glyphicon-search"></i></a></td>
										<td>  <a href="{{ route('neighborhoods.edit', [$neighborhood->id]) }}"><i class="glyphicon glyphicon-edit icon-edit"></i></a> </td>
										<td>  <a href="{{ route('neighborhoods/delete', [$neighborhood->id]) }}"><i class="glyphicon glyphicon-trash icon-trash"></i></a></td>
									</tr>
								@endforeach

							</tbody>
						</table>
						<div align="right">
							<p> Mostrando <strong> {{ $neighborhoods->total() }} </strong> registro(s) </p>
						</div>						
					</div>
					@if ($neighborhoods->render())
						<div class="panel-footer" align="right">{!! $neighborhoods->render() !!}</div>
					@endif
				</div>
			</div>	
		
	@stop
