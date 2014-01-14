@extends('layouts.scaffold')

@section('main')

<h1>Create Blog</h1>

{{ Form::open(array('route' => 'blogs.store')) }}
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
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


