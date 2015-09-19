@extends('layouts.admin')
@section('list')
<a href="{{URL::route('postHome')}}">Page List</a>
@stop
@section('title')
Page
@stop
@section('subtitle')
create
@stop
@section('content')

       {!! Form::open(['url' => 'admin/page/store']) !!}

               @include('pages.form-create', ['buttonTitle' => ' Save','buttonClass'=>'btn-save','iButtonClass'=>'fa fa-save'])

       {!! Form::close() !!}

        @include('errors.list')
@stop