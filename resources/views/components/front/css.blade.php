<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>@yield('page_title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="@yield('meta_keywords','Khan Rayees')" />
    <meta name="description" content="@yield('meta_description','Khan Rayees')" />

    <meta name="author" content="Khan Rayees">

    <link rel="canonical" href="{{url()->current()}}"/>
        
    <meta name="email" content="info@khanrayees.com">
    <meta name="version" content="1.0">
    <!-- favicon -->
    <link href="{{ asset('frontend/assets/images/favicon.ico') }}" rel="shortcut icon">

    <!-- Css -->
    <link href="{{ asset('frontend/assets/libs/tobii/css/tobii.min.css" rel="stylesheet') }}">
    <!-- Main Css -->
    <link href="{{ asset('frontend/assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/tailwind.min.css') }}">

    <style type="text/css">
        .text-danger{color: red}
    </style>
</head>