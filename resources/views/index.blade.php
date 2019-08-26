@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile

{!! get_the_posts_pagination(['mid_size' => 3, 
  'prev_text' => __('&#8592;', 'sage'),
  'next_text' => __('&#8594;', 'sage')
]) !!}
@endsection
