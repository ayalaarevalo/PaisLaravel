		@extends('app')



		@section('content')
		<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
		<div class="panel-heading">Informacion del Registro </div>
		<div class="panel-body">
		<table class="table table-hover">
		<thead>
		<tr>
		<th>Name</th>
		<th>Description</th>										
		<th>Created_at</th>
		<th>Updated_at</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td> {{ $neighborhood->name }} </td> 
		<td> {{ $neighborhood->description}} </td>										
		<td> {{ $neighborhood->created_at }} </td>
		<td> {{ $neighborhood->updated_at }} </td>
		</tr>
		</tbody>
		</table>


		</div>
		<div class="panel-footer"><a href="{{action('NeighborhoodController@index')}}"  class="btn btn-warning" >Regresar</a>
		</div>
		</div>
		</div>

		@stop

