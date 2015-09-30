<div class="list">
        <div class="list-right">
            <button type="submit"  data-toggle="tooltip" title="{!! $buttonTitle !!}" class="{!! $buttonClass !!}"><i class="{!! $iButtonClass !!}">{!! $buttonTitle !!}</i></button>
            <button type="button" onclick="window.location.href='{{ URL::to('admin/page') }}'" data-toggle="tooltip" title="cancel" class="btn-cancel"><i class="fa fa-reply"> Cancel</i></button>
        </div>
</div>
<div class="content">
        <div class="form-group">
        	{!! Form::label('name', 'Name:') !!}
        	{!! Form::text('pag_name', ($pag_name), ['class' => 'form-control', 'id' => 'name']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('slug', 'Permalink :') !!}
            {!! Form::text('pag_slug', ($pag_slug), ['id' => 'permalien']) !!}
        </div>

        <div class="form-group">
          {!! Form::Label('cats', 'Category:') !!}
          <select class="form-control" name="cat_id">
          <option value="0">Select use cat as page</option>
            @foreach($cats as $cat)
              <option value="{{$cat->cat_id}}" @if($page->pag_cat_id == $cat->cat_id) selected="selected" @endif>{{$cat->cat_desc}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('pag_desc', ($pag_desc), ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('order', 'Order:') !!}
            {!! Form::text('pag_order', ($pag_order), ['class' => 'form-control']) !!}
        </div>
</div>