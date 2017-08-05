{{--
  Template Name: Frontpage
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
  <div class="row">
    <aside class="col-lg-4">
      <img class="img-responsive max-width" src="{!! get_the_post_thumbnail_url( $post = null, $size = 'medium') !!}" >
    </aside>
    <article class="col-lg-8">
      @include('partials.page-header')
      @include('partials.content-page')
    </article>
  </div>
  <hr>
  <div class="row">
    @php
      $args = array( 'post_type' => 'puff', 'posts_per_page' => 3 );
      $menuloop = new WP_Query( $args );
      while ( $menuloop->have_posts() ) : $menuloop->the_post();
    @endphp
    <div class="col-md-4">
      <figure class="card text-center">
        <div class="card-img-top background-image" style="background-image:url({!! get_the_post_thumbnail_url( $post = null, $size = 'medium') !!})"> </div>
        <figcaption class="card-block">
          <p class="card-text">
            <h5>{{ the_title() }}</h5>
            {{ the_excerpt() }}
          </p>
        </figcaption>
      </figure>
    </div>
    @php
      endwhile;
      wp_reset_postdata();
    @endphp
  </div>
@endwhile
@endsection
