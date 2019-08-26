<div class="entry-meta">
<time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>

@php($terms = get_the_terms(get_the_ID(), 'category'))

@if($terms == false)
	@php($terms = [])
@endif

@foreach($terms as $category)
	@if($loop->first)
		{{ __('in', 'sage') }}
	@endif
	<a href="{!! get_term_link( $category ) !!}">
		{{ $category->name }}</a>@unless( $loop->last ),@endunless
@endforeach
{{-- 
<p class="byline author vcard">
  {{ __('By', 'sage') }} <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
    {{ get_the_author() }}
  </a>
</p>--}}
</div>