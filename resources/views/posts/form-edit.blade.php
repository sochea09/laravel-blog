<div class="list">
        <div class="list-right">
            <button type="submit"  data-toggle="tooltip" title="{!! $buttonTitle !!}" class="{!! $buttonClass !!}"><i class="{!! $iButtonClass !!}">{!! $buttonTitle !!}</i></button>
            <button type="button" onclick="window.location.href='{{ URL::to('admin/post') }}'" data-toggle="tooltip" title="cancel" class="btn-cancel"><i class="fa fa-reply"> Cancel</i></button>
        </div>
</div>
<div class="content">
        <div class="form-group">
        	{!! Form::label('name', 'Name:') !!}
        	{!! Form::text('pos_name', ($pos_name), ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
        	{!! Form::label('filename', 'FileName:') !!}
        	{!! Form::text('pos_filename', ($pos_filename), ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('summary', 'Summary:') !!}
            {!! Form::textarea('pos_sum', ($pos_sum), ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('pos_desc', ($pos_desc), ['class' => 'form-control']) !!}
        </div>
</div>