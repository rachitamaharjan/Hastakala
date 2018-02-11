
<div class="row">
      	<div class="col-md-8">
		<br><br>
		<h2><b>All posts</b></h2>&nbsp&nbsp&nbsp&nbsp&nbsp
		<center><a href="{{route('posts.create')}}">Create New post</a></center>	<br> <br>
	</div>
	<div class="col-md-4">
		<table class="table">
			<thead>
				<th>#</th>
				<th>Title</th>
				<th>Body</th>
				<th>Created At</th>
				<th></th>
			</thead>
			<tbody>
				@foreach ($posts as $post)
					<tr>
					<th>{{$post->id}}</th>
					<td>{{$post->title}}</td>
					<td>{{$post->body}}</td>
					<td>{{date('M j, Y h:ia', strtotime($post->created_at))}}</td>
					<td><a href="{{route('posts.show',$post->id)}}">View</a>&nbsp&nbsp&nbsp<br><a href="{{route('posts.edit',$post->id)}}">Edit</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
         
