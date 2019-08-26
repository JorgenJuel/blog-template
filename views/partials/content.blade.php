<article @php post_class('in-archive') @endphp>
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
    @include('partials/entry-meta')
  </header>
  <div class="entry-summary">
  	@if(has_post_thumbnail())
  		<a href="{!! get_the_permalink() !!}">
  			{!! get_the_post_thumbnail( null, 'full' ) !!}
  		</a>
  	@endif
    @php the_excerpt() @endphp
  </div>
</article>
