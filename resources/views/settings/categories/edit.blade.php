@extends('layouts.admin')

@section('list')
<a href="{{URL::route('catHome')}}">Category List</a>
@stop
@section('title')
Category
@stop
@section('subtitle')
edit
@stop
@section('content')

       {!! Form::open(['url' => 'admin/setting/category/'.$cat->cat_id.'/update']) !!}

               @include('settings.categories.form-edit', ['buttonTitle' => ' Save Change','buttonClass'=>'btn-save','iButtonClass'=>'fa fa-save',
                    'cat_name' => $cat->cat_name,
                    'cat_desc' => $cat->cat_desc
               ])

       {!! Form::close() !!}

        @include('errors.list')
@stop