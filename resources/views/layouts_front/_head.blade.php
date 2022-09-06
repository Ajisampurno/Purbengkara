<head>

    <!-- Title -->
    <title>{{config('app.name')}}</title>
    <meta property="og:title" content="{{$data->seo_title}}" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#4aa6e8" />

    <meta name="keywords" content="{{$data->seo_keyword}}" />

    <meta name="description" content="{{$data->seo_description}}"/>
    <meta property="og:description" content="{{$data->seo_description}}" />

    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="id-ID" />
    <meta http-equiv="Cache-control" content="public">
    <meta name="mobile-web-app-capable" content="yes">

    <link rel="apple-touch-icon" href="{{url('/')}}/{{$data->logo_website}}">
    <link rel="android-touch-icon" href="{{url('/')}}/{{$data->logo_website}}" />
    <link rel="windows-touch-icon" href="{{url('/')}}/{{$data->logo_website}}" />

    <!-- For Facebook -->
    <meta property="og:image" content="{{url('/')}}/{{$data->logo_website}}" />

    <!-- For Twitter -->
    <meta name="twitter:image" content="{{url('/')}}/{{$data->logo_website}}" />

    <meta name="author" content="{{config('app.name')}}">
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <link rel="canonical" href="{{url()->current()}}" />

    <meta property="og:locale" content="id-ID" />
    <meta property="og:type" content="website" />

    <meta property="og:url" content="{{url('/')}}" />
    <meta property="og:site_name" content="{{config('app.name')}}" />

    <meta  property="og:image" itemprop="image" content="{{url('/')}}/{{$data->logo_website}}"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('/')}}/{{$data->logo_website}}">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css">

  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link href="//db.onlinewebfonts.com/c/0e979bd4a3c1c6ac788ed57ac569667f?family=revicons" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" id="brk-skin-color" href="{{asset('assets/css/skins/brk-green-1.css')}}">

  	<link id="brk-base-color" rel="stylesheet" href="{{asset('assets/css/skins/brk-base-color.css')}}">

  	<link rel="stylesheet" id="brk-direction-offsets" href="{{asset('assets/css/offsets.css')}}">

  	<link id="brk-css-min" rel="stylesheet" href="{{asset('assets/css/style_front.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/components/services.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/components/shop-components-grid-filter.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/components/tags.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/components/social-links.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/components/footer.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/assets/brk-header-elements.css')}}">

    <style> #rev_slider_18_1_wrapper .tp-loader.spinner2{ background-color: #0071fc !important; } </style>
  	<style>.brk-castom-btn.rev-btn.rev-withicon i{margin-left:0 !important; margin-right:10px !important; vertical-align:0; top:-1px}.brk-castom-btn-1.rev-btn.rev-withicon i{vertical-align:2px}</style>
  	<style>.custom.tparrows{cursor:pointer;background:#000;background:rgba(0,0,0,0.5);width:40px;height:40px;position:absolute;display:block;z-index:100}.custom.tparrows:hover{background:#000}.custom.tparrows:before{font-family:"revicons";font-size:15px;color:#fff;display:block;line-height:40px;text-align:center}.custom.tparrows.tp-leftarrow:before{content:"\e824"}.custom.tparrows.tp-rightarrow:before{content:"\e825"}</style>

    <style media="screen">
      .brk-header {
        background-color: white !important;
      }
    </style>
</head>
