
@if(app()->getLocale() == 'en')
<!-- CSS -->

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('assets/assets/img/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('assets/assets/img/favicon_60x60.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/assets/img/favicon_76x76.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/assets/img/favicon_120x120.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/assets/img/favicon_152x152.png')}}">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!-- CSS Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}" />
    <!-- CSS Base -->
    <link id="theme" rel="stylesheet" href="{{asset('assets/css/themes/theme-energy.css')}}" />
    <style>
        /*  Back-to-top */
        #back-to-top {
            display:none;
            position:fixed;
            bottom:30px;
            cursor:pointer;
            line-height:1em;
            right: 10px;
            border-color:#2e9557;
            background-position: 12px 16px;
            background-repeat:no-repeat;
            -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
            filter: alpha(opacity=80);

            -webkit-transition: all .3s ease;
            -moz-transition: all .3s ease;
            -ms-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease;

        }

        #back-to-top:hover {
                background-color: #2e9557;
            -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
            filter: alpha(opacity=80);
            opacity:0.8;
            -webkit-transition: all .3s ease;
            -moz-transition: all .3s ease;
            -ms-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease;
        }

        </style>

@else

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('assets/assets/img/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('assets/assets/img/favicon_60x60.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/assets/img/favicon_76x76.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/assets/img/favicon_120x120.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/assets/img/favicon_152x152.png')}}">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!-- CSS Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-rtl.css')}}" />
    <!-- CSS Base -->
    <link id="theme" rel="stylesheet" href="{{asset('assets/css/themes/theme-energy.css')}}" />

    <link id="theme" rel="stylesheet" href="{{asset('assets/css/themes/theme-energy-rtl.css')}}" />
    <style>
        /*  Back-to-top */
        #back-to-top {
            display:none;
            position:fixed;
            bottom:30px;
            cursor:pointer;
            line-height:1em;
            border-color:#2e9557;
            background-position: 12px 16px;
            background-repeat:no-repeat;
            -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
            filter: alpha(opacity=80);

            -webkit-transition: all .3s ease;
            -moz-transition: all .3s ease;
            -ms-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease;

        }

        #back-to-top:hover {
                background-color: #2e9557;
            -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
            filter: alpha(opacity=80);
            opacity:0.8;
            -webkit-transition: all .3s ease;
            -moz-transition: all .3s ease;
            -ms-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease;
        }

        </style>


@endif

