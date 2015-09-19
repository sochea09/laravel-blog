<div class="list">
        <div class="list-right">
            <button type="submit"  data-toggle="tooltip" title="{!! $buttonTitle !!}" class="{!! $buttonClass !!}"><i class="{!! $iButtonClass !!}">{!! $buttonTitle !!}</i></button>
            <button type="button" onclick="window.location.href='{{ URL::to('admin/page') }}'" data-toggle="tooltip" title="cancel" class="btn-cancel"><i class="fa fa-reply"> Cancel</i></button>
        </div>
</div>
<div class="content">
        <div class="form-group">
        	{!! Form::label('name', 'Name:') !!}
        	{!! Form::text('pag_name', ($pag_name), ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
        	{!! Form::label('filename', 'FileName:') !!}
        	{!! Form::text('pag_filename', ($pag_filename), ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('pag_desc', ($pag_desc), ['class' => 'form-control']) !!}
        </div>
</div>