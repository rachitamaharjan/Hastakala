@layout('layouts.default')
@section('content')
	blah
	@foreach($authors as $author)
	{{HTML::link_to_route('author',$author->name, array($author->id))}}
	@endforeach
	{{HTML::link_to_route('newAuthor','new author')}}
@endsection
