<div class="container-fluid">
	<div class="row">
		<div class="col-xs-6">
			<div class="form-group @if ($errors->has('name')) has-error @endif">
				{!! Form::label('name', 'Name:') !!}
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Write name new neighborhood', 'maxlength' => '50', 'tabindex' => '1', 'autofocus' => 'autofocus', 'style' => 'text-transform:uppercase', 'onKeyUp' => 'javascript:this.value=this.value.toUpperCase()']) !!}
				@if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
			</div>
		</div>
		<div class="col-xs-6">
			<div class="form-group @if ($errors->has('description')) has-error @endif">
				{!! Form::label('description', 'Description:') !!}
				{!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Write description new neighborhood', 'maxlength' => '100', 'tabindex' => '2', 'style' => 'text-transform:uppercase', 'onKeyUp' => 'javascript:this.value=this.value.toUpperCase()']) !!}
				@if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif
			</div>
		</div>
	</div>
	
</div>