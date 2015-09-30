@extends('layouts.admin')
@section('head')

	{!! HTML::style('ckeditor/plugins/codesnippet/lib/highlight/styles/default.css') !!}

@stop
@section('list')
<a href="{{URL::route('postHome')}}">Page List</a>
@stop
@section('title')
Page
@stop
@section('subtitle')
edit
@stop
@section('content')

       {!! Form::open(['url' => 'admin/page/'.$page->pag_id.'/update']) !!}

               @include('pages.form-edit', ['buttonTitle' => ' Save Change','buttonClass'=>'btn-save','iButtonClass'=>'fa fa-save',
                    'pag_name' => $page->pag_name,
                    'pag_slug' => $page->pag_slug,
                    'pag_desc' => $page->pag_desc,
                    'pag_order' => $page->pag_order
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


	config['height'] = 400;

	CKEDITOR.replace( 'pag_desc', config);


  </script>

@stop