
<div class="row">
      	<div class="col-md-8">
		<br><br>
		<b>Blog:</b><br><br><br>
		<div class
		<u><b>{{$post->title}}</b></u><br><br>
		<p class="lead">{{$post->body}}</p>
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
					{!! Html::linkRoute('posts.edit','Edit',array($post->id),array('class'=>'btn btn-primary btn-block'))!!}<br><br>
					{!! Form::open([
            'method' => 'DELETE',
            'route' => ['posts.destroy', $post->id]
        ]) !!}					
					<!--{!!Form::open(['route'=>['posts.destroy', $post->id],'method'=>'DELETE'])!!}
					<!--Instead of this{!! Html::linkRoute('posts.destroy','Delete',array($post->id),array('class'=>'btn btn-destroy btn-block'))!!}-->
				{!!Form::submit('Delete',['class'=>'btn btn-destroy btn-block'])!!}
				{!!Form::close()!!}
					<!--Instead of this<a href="#" class="btn btn-primary btn-block"> Edit</a>-->
					<!--And this<a href="#" class="btn btn-danger btn-block"> Delete</a>-->
				</div>
		</div>
	</div>
</div>
         
