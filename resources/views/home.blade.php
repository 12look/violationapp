@extends('app')

@section('main')
<!--/violations-->
@foreach($violations as $violation)
	@include('violation/partials/violationblock');
@endforeach
<!--/violations-->

<div class="text-center"><?php echo $violations->render(); ?></div>
@stop
