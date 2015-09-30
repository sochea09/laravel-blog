@extends('layouts.front')
@section('content')

<!-- Start Section Team -->
<section class="our_team text-center">
  <div class="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
        @if(!$page)
         @foreach($datas as $post)
            <div class="media">
              <a class="pull-left" href="/article/{{ $post->pos_id }}">
                <img class="media-object" src="{{ URL::to('/') }}/img/media/285x170/{{ $post->pos_image }}" />
              </a>
              <div class="media-body">
              <h4 class="media-heading">
                {!! $post->pos_name !!}
              </h4>
                {!! $post->pos_sum !!}
              </div>
            </div>
        @endforeach
        @else
            {!! $page->pag_desc !!}
        @endif
        </div>
        @include('layouts.right_sidebar')
      </div>

    </div>
  </div>
</section>
<!-- End Section Team -->

@stop