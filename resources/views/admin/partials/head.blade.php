@php
    $direction = \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() === 'ar' ? '-rtl' : '';
@endphp
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="favicon.ico">
<title>Admin {{ __('keywords.dashboard') }} - @yield('title')</title>
<!-- Simple bar CSS -->
<link rel="stylesheet" href="{{ asset('assets-admin' . $direction) }}/css/simplebar.css">
<!-- fonts css -->
<link href="https://fonts.googleapis.com/css2?family=overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<!-- Icons CSS -->
<link rel="stylesheet" href="{{ asset('assets-admin' . $direction) }}/css/feather.css">
<link rel="stylesheet" href="{{ asset('assets-admin' . $direction) }}/css/select2.css">
<link rel="stylesheet" href="{{ asset('assets-admin' . $direction) }}/css/dropzone.css">
<link rel="stylesheet" href="{{ asset('assets-admin' . $direction) }}/css/uppy.min.css">
<link rel="stylesheet" href="{{ asset('assets-admin' . $direction) }}/css/jquery.steps.css">
<link rel="stylesheet" href="{{ asset('assets-admin' . $direction) }}/css/jquery.timepicker.css">
<link rel="stylesheet" href="{{ asset('assets-admin' . $direction) }}/css/quill.snow.css">
<!-- Date Range Picker CSS -->
<link rel="stylesheet" href="{{ asset('assets-admin' . $direction) }}/css/daterangepicker.css">
<!-- App CSS -->
<link rel="stylesheet" href="{{ asset('assets-admin' . $direction) }}/css/app-light.css" id="lightTheme" disabled>
<link rel="stylesheet" href="{{ asset('assets-admin' . $direction) }}/css/app-dark.css" id="darkTheme">
@vite(['resources/css/app.css', 'resources/js/app.js'])
