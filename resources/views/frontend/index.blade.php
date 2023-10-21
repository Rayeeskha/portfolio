@extends('frontend.layouts.app')
@section('page_title','Khan Rayees')
@section('meta_keywords','Khan Rayees')
@section('meta_description', 'Khan Rayees')
@section('container')

<!-- Slider -->
<x-frontend.slider />

<!-- Aboutus -->
<x-frontend.about />

<!-- Services -->
<x-frontend.service />

<!-- Resume -->
<x-frontend.resume />

<!-- Skill -->
<x-frontend.skill />

<!-- Project -->
<x-frontend.project />

<!-- Testimonial -->
<x-frontend.testimonial />

<!-- Blog -->
<x-frontend.blog name="blogs" :blogs="$blogs" />

<!-- Contactus -->
<x-frontend.contactus />

@endsection