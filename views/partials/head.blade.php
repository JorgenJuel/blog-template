<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @php wp_head() @endphp
  @if(get_field('ga', 'options'))
<script async src="https://www.googletagmanager.com/gtag/js?id={{ get_field('ga', 'options') }}"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '{{ get_field('ga', 'options') }}');
</script>

  @endif
</head>
