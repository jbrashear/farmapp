@extends('layouts.scaffold')

@section('main')

<h1>Show Blog</h1>

<p>{{ link_to_route('blogs.index', 'Return to all blogs') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Title</th>
				<th>Author</th>
				<th>Excerpt</th>
				<th>Body</th>
				<th>Image</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $blog->title }}}</td>
					<td>{{{ $blog->author }}}</td>
					<td>{{{ $blog->excerpt }}}</td>
					<td>{{{ $blog->body }}}</td>
					<td>{{{ $blog->image }}}</td>
                    <td>{{ link_to_route('blogs.edit', 'Edit', array($blog->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('blogs.destroy', $blog->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
