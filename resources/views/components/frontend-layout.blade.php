<!--fe-layout.blade.php-->
{{-- @props([
    'title' => 'Website',
    'meta_description' => '',
    'meta_keyword' => '',
     'meta_author' => '',
     'meta_og_url' => '',
     'meta_og_title' => '',
     'meta_og_description' => '',
     'meta_og_image' => '',
    'image' => null
]) --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
      {{-- <title>{{"Best Web Developer in Nepal".': '. $showName->name}}</title> --}}
    {{-- @if(!empty($favicon->image))
        <link rel="icon" href="{{ asset($favicon->image) }}" type="image/png">
    @endif --}}

    {{-- <meta name="description" content="{{ $meta_description }}">
    <meta name="keywords" content="{{ $meta_keyword }}"> --}}
    <meta name="robots" content="index, follow">
    <meta name="author" content="pradipkumarshrestha.com.np">

    {{-- <link rel="canonical" href="{{ $url }}"> --}}
    {{-- <link rel="icon" href="{{ asset('image') }}" type="image/x-icon">
    <meta name="language" content="English"> --}}

    <!-- Open Graph Meta -->
     {{-- <meta property="og:title" content="{{ $meta_og_title }}" />
    <meta property="og:description" content="{{ $meta_og_description }}" />
    <meta property="og:image" content="{{ $meta_og_image }}" />
    <meta property="og:url" content="{{$meta_og_url}}" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="www.pradipkumarshrestha.com.np" /> --}}


    <!-- assets -->

        <link rel="stylesheet" href="{{ asset('imws_css/imws_main.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('imws_css/form.css') }}">
        <link rel="stylesheet" href="{{ asset('imws_css/imws_anim.css') }}">
        <link rel="stylesheet" href="{{ asset('imws_css/imws_responsive.css') }}">


</head>
<body>
  <header>
    <x-frontend-navbar/>
</header>

  <main>{{ $slot }}</main>

    <footer>
        <x-fe-footer/>
</footer>
    <script src="{{ asset('myjs/imws.js') }}"></script>


</body>
</html>
