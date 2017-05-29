@extends('layouts.front')
@section('content')

<!-- Start Section Team -->
<section class="our_team text-center">
  <div class="team">
    <div class="container">
      <div class="row">
         @foreach($posts as $post)
            <div class="col-lg-6 col-md-6">
                <div class="media">
                  <!--<a class="pull-left" href="{{URL::to('/')}}/article/{{ $post->pos_id }}">
                    <img class="media-object" src="img/media/285x170/{{ $post->pos_image }}" width="100" height="100" />
                  </a>
                  <div class="media-body">
                  <h4 class="media-heading">
                    {!! $post->pos_name !!}
                  </h4>-->
                    {!! $post->pos_sum !!}
                  <!--</div>-->
                </div>
            </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
<!-- End Section Team -->



@stop