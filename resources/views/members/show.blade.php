@extends('app')



	@section('content')
		<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Informacion del Registro </div>
						<div class="panel-body">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Neighborhood</th>
										<th>Name</th>
										<th>Surname</th>
										<th>Document</th>
										<th>Celullar</th>
										<th>Phone</th>										
										<th>Created_at</th>
										<th>Updated_at</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td> {{ $member->neighborhood->name }} </td> 
										<td> {{ $member->name }} </td> 
										<td> {{ $member->surname}} </td>
										<td> {{ $member->document}} </td>
										<td> {{ $member->celullar}} </td>
										<td> {{ $member->phone}} </td>
										<td> {{ $member->created_at }} </td>
										<td> {{ $member->updated_at }} </td>
									</tr>
								</tbody>
							</table>

							
						</div>
					<div class="panel-footer"><a href="{{action('MemberController@index')}}"  class="btn btn-warning" >Regresar</a>
</div>
				</div>
		</div>
		
	@stop

