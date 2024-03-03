
@if(app()->getLocale() == 'en')
<!-- CSS -->

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('assets/assets/img/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('assets/assets/img/favicon_60x60.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/assets/img/favicon_76x76.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/assets/img/favicon_120x120.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/assets/img/favicon_152x152.png')}}">

    <!-- Google Web Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,200,300,100,500,600,700' rel='stylesheet' type='text/css'>

    <!-- CSS Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}" />
    <!-- CSS Base -->
    <link id="theme" rel="stylesheet" href="{{asset('assets/css/themes/theme-bottle.css')}}" />

@else

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('assets/assets/img/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('assets/assets/img/favicon_60x60.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/assets/img/favicon_76x76.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/assets/img/favicon_120x120.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/assets/img/favicon_152x152.png')}}">

    <!-- Google Web Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,200,300,100,500,600,700' rel='stylesheet' type='text/css'>

    <!-- CSS Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-rtl.css')}}" />
    <!-- CSS Base -->
    <link id="theme" rel="stylesheet" href="{{asset('assets/css/themes/theme-bottle.css')}}" />

    <link id="theme" rel="stylesheet" href="{{asset('assets/css/themes/theme-bottle-rtl.css')}}" />


@endif
