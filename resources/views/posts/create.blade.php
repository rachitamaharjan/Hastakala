
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
	{!! Form::open(array('route'=>'posts.store'))!!}
		{{Form::label('title','Title:')}}
		{{Form::text('title',null,array('class'=>'form-control'))}}<br><br>
		{{Form::textarea('body',null,array('class'=>'form-control'))}}<br><br>
		{{Form::submit('Create Post')}}
	{!! Form::close()!!}
	</div>
	</div>
         
