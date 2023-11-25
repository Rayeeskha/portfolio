<!DOCTYPE html>
<html lang="en" dir="{{ session()->get('locale') =='ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8" >
    <title>@yield('page_title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="@yield('meta_keywords','Khan Rayees')" />
    <meta name="description" content="@yield('meta_description','Khan Rayees')" />

    <meta name="author" content="Khan Rayees">

    <link rel="canonical" href="{{url()->current()}}"/>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Lightbox -->
    <link href="{{ asset('assets/css/tobii.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Icon -->
    <link href="{{ asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css">
    <!-- SLIDER -->
    <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}"/>
    <!-- Custom Css -->
    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet" type="text/css" id="theme-opt">
    <link href="{{ asset('assets/css/colors/default.css') }}" rel="stylesheet" id="color-opt">
</head>