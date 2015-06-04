<div class="container-fluid">
	<div class="row">
		<div class="col-xs-4">			
			<div class="form-group @if ($errors->has('neighborhood_id')) has-error @endif">
				{!! Form::label('neighborhood_id', 'Neighborhood') !!}
				{!! Form::select('neighborhood_id', array('' => 'Select' ) + $neighborhoods,  null, ['class' => 'form-control', 'tabindex' => '1']) !!}	
				@if ($errors->has('neighborhood_id')) <p class="help-block">{{ $errors->first('neighborhood_id') }}</p> @endif
			</div>			
		</div>
		<div class="col-xs-4">			
			<div class="form-group @if ($errors->has('name')) has-error @endif">
				{!! Form::label('name', 'Name:') !!}
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Write name new members', 'maxlength' => '50', 'tabindex' => '2', 'autofocus' => 'autofocus', 'style' => 'text-transform:uppercase', 'onKeyUp' => 'javascript:this.value=this.value.toUpperCase()']) !!}
				@if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
			</div>			
		</div>
		<div class="col-xs-4">			
			<div class="form-group @if ($errors->has('surname')) has-error @endif">
				{!! Form::label('surname', 'Surname:') !!}
				{!! Form::text('surname', null, ['class' => 'form-control', 'placeholder' => 'Write surname new members', 'maxlength' => '100', 'tabindex' => '3', 'style' => 'text-transform:uppercase', 'onKeyUp' => 'javascript:this.value=this.value.toUpperCase()']) !!}
				@if ($errors->has('surname')) <p class="help-block">{{ $errors->first('surname') }}</p> @endif
			</div>			
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4">			
			<div class="form-group @if ($errors->has('document')) has-error @endif">
				{!! Form::label('document', 'Document:') !!}
				{!! Form::text('document', null, ['class' => 'form-control', 'placeholder' => 'Write new celullar', 'maxlength' => '10', 'tabindex' => '4']) !!}
				@if ($errors->has('document')) <p class="help-block">{{ $errors->first('document') }}</p> @endif
			</div>			
		</div>
		<div class="col-xs-4">			
			<div class="form-group @if ($errors->has('celullar')) has-error @endif">
				{!! Form::label('celullar', 'Celullar:') !!}
				{!! Form::text('celullar', null, ['class' => 'form-control', 'placeholder' => 'Write new celullar', 'maxlength' => '10', 'tabindex' => '5']) !!}
				@if ($errors->has('celullar')) <p class="help-block">{{ $errors->first('celullar') }}</p> @endif
			</div>			
		</div>
		<div class="col-xs-4">			
			<div class="form-group @if ($errors->has('phone')) has-error @endif">
				{!! Form::label('phone', 'Phone:') !!}
				{!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Write new phone', 'maxlength' => '10', 'tabindex' => '11']) !!}
				@if ($errors->has('phone')) <p class="help-block">{{ $errors->first('phone') }}</p> @endif
			</div>			
		</div>
	</div>
	
</div>