@extends('layouts.admin')
@section('head')

	{!! HTML::style('ckeditor/plugins/codesnippet/lib/highlight/styles/default.css') !!}

@stop
@section('list')
<a href="{{URL::route('postHome')}}">Post List</a>
@stop
@section('title')
Post
@stop
@section('subtitle')
edit
@stop
@section('content')

       {!! Form::open(['url' => 'admin/post/'.$post->pos_id.'/update', 'files' => 'true']) !!}

               @include('posts.form-edit', ['buttonTitle' => ' Save Change','buttonClass'=>'btn-save','iButtonClass'=>'fa fa-save',
                    'pos_name' => $post->pos_name,
                    'pos_slug' => $post->pos_slug,
                    'imgsrc' => "/img/media/285x170/".$post->pos_image,
                    'pos_sum' => $post->pos_sum,
                    'pos_desc' => $post->pos_desc
               ])

       {!! Form::close() !!}

        @include('errors.list')
@stop

@section('scripts')

	{!! HTML::script('ckeditor/ckeditor.js') !!}

	<script>

	var config = {
		codeSnippet_theme: 'Monokai',
		language: '{{ config('app.locale') }}',
		height: 100,
		filebrowserBrowseUrl: baseUrl+'/admin/media/gallery',
		toolbarGroups: [
			{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
			{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
			{ name: 'links' },
			{ name: 'insert' },
			{ name: 'forms' },
			{ name: 'tools' },
			{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
			{ name: 'others' },
			//'/',
			{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
			{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
			{ name: 'styles' },
			{ name: 'colors' }
		]
	};

	CKEDITOR.replace( 'pos_sum', config);

	config['height'] = 400;

	CKEDITOR.replace( 'pos_desc', config);

	$("#title").keyup(function(){
			var str = sansAccent($(this).val());
			str = str.replace(/[^a-zA-Z0-9\s]/g,"");
			str = str.toLowerCase();
			str = str.replace(/\s/g,'-');
			$("#permalien").val(str);
		});

  </script>

@stop