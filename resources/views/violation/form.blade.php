@extends('app')

@section('main')

	<div class="col-sm-12 col-lg-offset-2">
		
        @if ($errors->has())
	        <div class="alert alert-danger col-lg-6">
	            @foreach ($errors->all() as $error)
	                {{ $error }}<br>        
	        	@endforeach
	        </div>
		@endif

		@yield('form')
		
		<div class="form-group">
			{!! Form::label('number', 'Номер автомобиля:', ['class' => 'col-xs-12']) !!}
			<div class="col-xs-10 col-lg-2"> 
				{!! Form::text('number', null, ['class' => 'form-control', 'maxlength' => '6', 'placeholder' => 'a123aa']) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('region', 'Регион:', ['class' => 'col-xs-12']) !!}
			<div class="col-xs-6 col-lg-1">
				{!! Form::text('region', null, ['class' => 'form-control', 'maxlength' => '2']) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('url', 'Ссылка на видео:', ['class' => 'col-xs-12']) !!}
			<div class="col-xs-12 col-lg-8">
				{!! Form::text('url', null, ['class' => 'form-control']) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('description', 'Описание ситуации:', ['class' => 'col-xs-12']) !!}
			<div class="col-xs-12 col-lg-8">
				{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
			</div>
		</div>
		<div class="form-group">
			<div class="col-xs-12 col-lg-8">
				{!! Form::submit('Добавить нарушение', ['class' => 'btn btn-primary form-control']) !!}
			</div>
		</div>
		{!! Form::close() !!}
	</div>

@stop