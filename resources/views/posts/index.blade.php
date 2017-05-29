@extends('layouts.admin')
@section('list')
<a href="{{URL::route('postHome')}}">Post List</a>
@stop
@section('title')
Post
@stop
@section('content')

    <div class="list">
        <div class="list-right">
            <button type="button" onclick="window.location.href='{{ URL::to('admin/post/create') }}'" data-toggle="tooltip" title="Add New" class="btn-addnew"><i class="fa fa-plus"> Add New</i></button>
            <button type="button" name="bt-delete" class="btn-delete"><i class="fa fa-trash-o"> Delete</i></button>
        </div>
    </div>
    <br>
    <div class="content">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%">
                <thead>
                    <tr>
                        <th class="text-center"><input type="checkbox" name="selectall" id="selectall" ></th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $v)
                        <tr>
                            <td class="text-center"><input type="checkbox" name="did[]" value="{!! $v->pos_id !!}" class="did" ></td>
                            <td>{!! $v->pos_name !!}</td>
                            <td>{!! $v->pos_slug !!}</td>
                            <td>{!! $v->pos_status_cd !!}</td>
                            <td><a href="{{ URL::to('admin/post/'.$v->pos_id.'/edit') }}"><i class="fa fa-pencil"> Edit</i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop