@extends('layouts.admin')
@section('list')
<a href="{{URL::route('pageHome')}}">Page List</a>
@stop
@section('title')
Page
@stop
@section('content')

        <div class="list">
            <div class="list-right">
                <button type="button" onclick="window.location.href='{{ URL::to('admin/page/create') }}'" data-toggle="tooltip" title="Add New" class="btn-addnew"><i class="fa fa-plus"> Add New</i></button>
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
                        <th>File Name</th>
                        <th>Description</th>
                        <th>Order</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pages as $v)
                        <tr>
                            <td class="text-center"><input type="checkbox" name="did[]" value="{!! $v->pag_id !!}" class="did" ></td>
                            <td>{!! $v->pag_name !!}</td>
                            <td>{!! $v->pag_filename !!}</td>
                            <td>{!! $v->pag_desc !!}</td>
                            <td>{!! $v->pag_order !!}</td>
                            <td>{!! $v->pag_status_cd !!}</td>
                            <td><a href="{{ URL::to('admin/page/'.$v->pag_id.'/edit') }}"><i class="fa fa-pencil"> Edit</i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop