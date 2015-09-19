<div class="list">
        <div class="list-right">
            <button type="submit"  data-toggle="tooltip" title="{!! $buttonTitle !!}" class="{!! $buttonClass !!}"><i class="{!! $iButtonClass !!}">{!! $buttonTitle !!}</i></button>
            <button type="button" onclick="window.location.href='{{ URL::to('admin/post') }}'" data-toggle="tooltip" title="cancel" class="btn-cancel"><i class="fa fa-reply"> Cancel</i></button>
        </div>
</div>
<div class="content">
        <div class="form-group">
        	{!! Form::label('name', 'Name:') !!}
        	{!! Form::text('pos_name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
        	{!! Form::label('filename', 'FileName:') !!}
        	{!! Form::text('pos_filename', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('pos_desc', null, ['class' => 'form-control']) !!}
        </div>
</div>