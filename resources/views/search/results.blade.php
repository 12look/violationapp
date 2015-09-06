@extends('app')

@section('title')
	Результаты поиска нарушений с номером "{{ Request::input('query') }}"
@stop

@section('main')
	<h3>Результаты поиска нарушений с номером "{{ Request::input('query') }}"</h3>

	@if (!$violations->count())
		<p>Ничего не найдено :(</p>
	@else
		@foreach ($violations as $violation)
			@include('violation/partials/violationblock')
		@endforeach
	@endif
	
	<div class="text-center"><?php echo $violations->render(); ?></div>
@stop
