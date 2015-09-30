@extends('layouts.admin')
@section('list')
<a href="{{URL::to('admin/setting/category')}}">Category List</a>
@stop
@section('title')
Category
@stop
@section('content')

        <div class="list">
            <div class="list-right">
                <button type="button" onclick="window.location.href='{{ URL::to('admin/setting/category/create') }}'" data-toggle="tooltip" title="Add New" class="btn-addnew"><i class="fa fa-plus"> Add New</i></button>
                <button type="button" name="bt-delete" class="btn-delete"><i class="fa fa-trash-o"> Delete</i></button>
            </div>
        </div>
    <div class="content">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%">
                <thead>
                    <tr>
                        <th class="text-center"><input type="checkbox" name="selectall" id="selectall" ></th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cats as $v)
                        <tr>
                            <td class="text-center"><input type="checkbox" name="did[]" value="{!! $v->cat_id !!}" class="did" ></td>
                            <td>{!! $v->cat_name !!}</td>
                            <td>{!! $v->cat_desc !!}</td>
                            <td>{!! $v->cat_status_cd !!}</td>
                            <td><a href="{{ URL::to('admin/setting/category/'.$v->cat_id.'/edit') }}"><i class="fa fa-pencil"> Edit</i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop