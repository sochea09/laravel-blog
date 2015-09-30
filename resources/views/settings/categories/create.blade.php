@extends('layouts.admin')

@section('list')
<a href="{{URL::to('/admin/setting/category')}}">Category List</a>
@stop
@section('title')
Category
@stop
@section('subtitle')
create
@stop
@section('content')

       {!! Form::open(['url' => 'admin/setting/category/store']) !!}

               @include('settings.categories.form', ['buttonTitle' => ' Save','buttonClass'=>'btn-save','iButtonClass'=>'fa fa-save'])

       {!! Form::close() !!}

        @include('errors.list')
@stop