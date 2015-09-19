@extends('layouts.admin')
@section('jcropcss')
	{!! HTML::style('jcrop/css/jcrop.min.css') !!}
	<style>
	    .jcrop-keymgr{
	        opacity: 0;
	    }
	</style>
@stop
@section('list')
<a href="{{URL::route('mediaHome')}}">Media List</a>
@stop
@section('title')
Media
@stop
@section('subtitle')
create
@stop
@section('content')
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Upload image</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => 'cropImage', 'onsubmit' => 'return checkCoords();']) !!}
                    {!! HTML::image($data['image'], '', ['id' => 'crop']) !!}
                    <input type="hidden" id="src" name="src" value="{{$data['image']}}" />
                    <input type="hidden" id="x" name="x" />
                    <input type="hidden" id="y" name="y" />
                    <input type="hidden" id="w" name="w" />
                    <input type="hidden" id="h" name="h" />
            </div>
            <div class="form-group">
                           <input type="text" name="med_title" class="form-control input-lg" placeholder="Image title">
                         </div>
                         <div class="form-group">
                           <input type="text" name="med_desc" class="form-control input-lg" placeholder="Image description">
                         </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save Record</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

{!! Form::open(['route' => 'postImage', 'files' => 'true', 'id' => 'postImage']) !!}

<input type="hidden" name="img_bckp" value="{!! $data['image'] !!}" />

<form role="form">
  <div class="col-md-6">
    <div class="form-group">
      {!! HTML::image($data['image'], '') !!}
      <br/>
      {!!Form::file('image')!!}
    </div>
  </div>
</form>
{!! Form::close() !!}


<input type="hidden" id="modal" value="{!! $data['modal'] !!}" />

@include('errors.list')
@stop


@section('jcropjs')
{!! HTML::script('jcrop/js/jcrop.min.js') !!}

<script>

    var modal;

    if($('#modal').val() == 'true'){
        modal = true;
    }else{
        modal = false;
    }

    $(document).ready(function(){

        $('#crop').Jcrop({
            aspectRatio: 1,
            onSelect: atualizeCoords
        });

        $('#myModal').modal({show: modal});
    });

    function atualizeCoords(c){
        $('#x').val(c.x);
        $('#y').val(c.y);
        $('#w').val(c.w);
        $('#h').val(c.h);
    }

    function checkCoords(){
        if(parseInt($('#w').val())) return true;
        alert('Please hold click and drag on image to crop');
        return false;
    }
</script>
@stop