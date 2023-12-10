@extends('frontend.front.layouts.app')
@section('page_title','Khan Rayees')
@section('meta_keywords','Khan Rayees')
@section('meta_description', 'Khan Rayees')
@section('container')

<!-- Slider -->
<x-front.slider />

<!-- About us -->
<x-front.about-us />

<!-- What we do -->
<x-front.what-we-do />

<!-- Projects -->
<x-front.projects />

<!-- Review -->
<x-front.review />

<!-- Team mates -->
<x-front.team-mates />

<!-- Blogs -->
<x-front.blog name="blogs" :blogs="$blogs" />

<!-- Get in touch -->
<x-front.contact />


@endsection