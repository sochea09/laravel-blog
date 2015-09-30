<div class="list">
        <div class="list-right">
            <button type="submit"  data-toggle="tooltip" title="{!! $buttonTitle !!}" class="{!! $buttonClass !!}"><i class="{!! $iButtonClass !!}">{!! $buttonTitle !!}</i></button>
            <button type="button" onclick="window.location.href='{{ URL::to('admin/post') }}'" data-toggle="tooltip" title="cancel" class="btn-cancel"><i class="fa fa-reply"> Cancel</i></button>
        </div>
</div>
<div class="content">
        <div class="form-group">
        	{!! Form::label('name', 'Name:') !!}
        	{!! Form::text('pos_name', null, ['class' => 'form-control', 'id' => 'name']) !!}
        </div>

        <div class="form-group">
          {!! Form::Label('cats', 'Category:') !!}
          <select class="form-control" name="cat_id">
            @foreach($cats as $cat)
              <option value="{{$cat->cat_id}}">{{$cat->cat_desc}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
        	{!! Form::label('slug', 'Permalink :') !!}
        	{!! Form::text('pos_slug', null, ['id' => 'permalien']) !!}
        </div>
        <div class="form-inline">
            <div class="form-group">
                <img id="blah" src="#" alt="your image" width="275" height="133"/>
                {!! Form::file('image', ['class' => 'upload-box', 'id' => 'imgInp', 'accept' => 'accept="image/gif, image/jpeg, image/png"', 'multiple' => 'multiple']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('summary', 'Summary:') !!}
                {!! Form::textarea('pos_sum', null, ['class' => 'form-control']) !!}
            </div>
        </div>


        <div class="form-group">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('pos_desc', null, ['class' => 'form-control']) !!}
        </div>
</div>