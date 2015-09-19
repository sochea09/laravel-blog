@extends('layouts.front')
@section('content')

<!-- Start Section Team -->
<section class="our_team text-center">
  <div class="team">
    <div class="container">
      <div class="row">
         @foreach($posts as $post)
            <div class="col-lg-6 col-sm-6">
              <div class="person">
                   {!! $post->pos_sum !!}
              </div>
            </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
<!-- End Section Team -->



@stop