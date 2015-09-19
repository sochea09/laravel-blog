@extends('layouts.admin')
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
                    'pag_filename' => $page->pag_filename,
                    'pag_desc' => $page->pag_desc,
                    'pag_order' => $page->pag_order
               ])

       {!! Form::close() !!}

        @include('errors.list')
@stop