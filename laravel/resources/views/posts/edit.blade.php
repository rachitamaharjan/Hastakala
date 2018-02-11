
<div class="row">
	<center>{!!Form::model($post,['route'=>['posts.update',$post->id],'method'=>'PUT'])!!}
      	<div class="col-md-8">
		{{Form::text('title',null,['class'=>'form-control'])}}<br><br>
		{{Form::textarea('body',null,['class'=>'form-control'])}}
		
	</div>
	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">	
				<dt>Created At:</dt>
				<dd>{{date('M j, Y h:ia', strtotime($post->created_at))}}</dd>
			</dl>
			<dl class="dl-horizontal">	
				<dt>Last Updated:</dt>
				<dd>{{date('M j, Y h:ia', strtotime($post->updated_at))}}</dd>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">
{{Form::submit('save changes',['class'=>'btn btn-success btn-block'])}}
				
					{!! Html::linkRoute('posts.show','Cancel',array($post->id),array('class'=>'btn btn-destroy btn-block'))!!}</center>
					<!--Instead of this<a href="#" class="btn btn-primary btn-block"> Edit</a>-->
					<!--And this<a href="#" class="btn btn-danger btn-block"> Delete</a>-->
				</div>
		</div>
	</div>
</div><!--end of form-->
         
