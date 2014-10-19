@if (count($errors->all()))
	<div class="col-xs-12">
		<div class="alert alert-danger alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			@foreach($errors->all() as $error)
				<p>{{$error}}</p>
			@endforeach

		</div>
	</div>
@endif
