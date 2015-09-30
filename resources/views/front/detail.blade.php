@extends('layouts.front')
@section('content')

<!-- Start Section Team -->
<section class="our_team text-center">
  <div class="team">
    <div class="container">
      <div class="row">
            <div class="col-lg-8 col-md-8">
                <h4>{!! $post->pos_name !!}</h4>
                {!! $post->pos_desc !!}
            </div>
            @include('layouts.right_sidebar')
      </div>
    </div>
  </div>
</section>
<!-- End Section Team -->


@stop