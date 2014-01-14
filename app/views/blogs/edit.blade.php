@extends('layouts.scaffold')

@section('main')

<h1>Edit Blog</h1>
{{ Form::model($blog, array('method' => 'PATCH', 'route' => array('blogs.update', $blog->id))) }}
	<ul>
        <li>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title') }}
        </li>

        <li>
            {{ Form::label('author', 'Author:') }}
            {{ Form::text('author') }}
        </li>

        <li>
            {{ Form::label('excerpt', 'Excerpt:') }}
            {{ Form::text('excerpt') }}
        </li>

        <li>
            {{ Form::label('body', 'Body:') }}
            {{ Form::text('body') }}
        </li>

        <li>
            {{ Form::label('image', 'Image:') }}
            {{ Form::text('image') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('blogs.show', 'Cancel', $blog->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
