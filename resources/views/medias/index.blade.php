@extends('layouts.admin')
@section('list')
<a href="{{URL::route('mediaHome')}}">Media List</a>
@stop
@section('title')
Media
@stop
@section('content')

        <div class="list">
            <div class="list-right">
                <button type="button" onclick="window.location.href='{{ URL::to('admin/media/create') }}'" data-toggle="tooltip" title="Add New" class="btn-addnew"><i class="fa fa-plus"> Add New</i></button>
                <button type="button" name="bt-delete" class="btn-delete"><i class="fa fa-trash-o"> Delete</i></button>
            </div>
        </div>
        <hr>
    <div class="content">
        <!-- Start Section Our Team -->
        <section class="our_team text-center">
          <div class="team">
            <div class="container">
              <div class="row">
                @foreach($medias as $media)
                    <div class="col-lg-3 col-sm-6">
                      <div class="person">
                        <img width="150" height="150" class="img-circle" src="{{URL::to('/').$media->med_link}}" alt="Chris Coyier"/>
                        <input type="checkbox" name="did[]" value="{!! $media->med_id !!}" class="did" >
                        <h4>{{$media->med_title}}</h4>
                        <p>{{$media->med_desc}}</p>
                        <input type="text" value="{{$media->med_link}}">
                      </div>
                    </div>
                @endforeach
              </div>
            </div>
          </div>
        </section>
        <!-- End Section Our Team -->
    </div>

@stop